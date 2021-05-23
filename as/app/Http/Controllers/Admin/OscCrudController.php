<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\OscRequest as StoreRequest;
use App\Http\Requests\OscRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class OscCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class OscCrudController extends CrudController
{


    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Osc');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/osc');
        $this->crud->setEntityNameStrings('osc', 'Osc');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        $this->crud->addClause('where','user_id',backpack_user()->id);

        //COLUMNS
        $this->crud->addColumn([
            'label' => 'Nome',
            'name' => 'nome',
            'type' => 'text'
        ]); 

        $this->crud->addColumn([
            'label' => 'Logomarca',
            'name' => 'logo',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads' 
        ]); 

        $this->crud->addColumn([
            'label' => 'Descrição da logomarca',
            'name' => 'descricao',
            'type' => 'text'
        ]); 

        $this->crud->addColumn([
            'label' => 'Serviços',
            'name' => 'servicos',
            'type' => 'text'
        ]); 

        //FIELDS
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Nome",
            'name' => 'nome',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "Logomarca",
            'name' => 'logo',
            'type' => 'upload',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads'
        ]);

        $this->crud->addField([
            'label' => "Descrição da logomarca",
            'name' => 'descricao',
            'type' => 'ckeditor',
        ]);

        $this->crud->addField([
            'label' => "Serviços",
            'name' => 'servicos',
            'type' => 'ckeditor',
        ]);


        // add asterisk for fields that are required in OscRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        $request->request->set('user_id',backpack_user()->id); //set user id to currently logged user

        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
