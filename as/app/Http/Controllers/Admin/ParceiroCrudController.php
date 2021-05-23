<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ParceiroRequest as StoreRequest;
use App\Http\Requests\ParceiroRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ParceiroCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ParceiroCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Parceiro');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/parceiro');
        $this->crud->setEntityNameStrings('parceiro', 'Parceiros');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        $this->crud->addClause('where','user_id',backpack_user()->id);

        //criar COLUMNS
         $this->crud->addColumn([
            'label' => 'Nome',
            'name' => 'nome',
            'type' => 'string'
        ]);
         $this->crud->addColumn([
            'label' => 'Logo',
            'name' => 'logo',
            'type' => 'binary'
        ]);
         $this->crud->addColumn([
            'label' => 'Link',
            'name' => 'link',
            'type' => 'string'
        ]);

        $this->crud->addColumn([
            'label' => 'Tipo',
            'name' => 'tipo',
            'type' => 'string'
        ]);

          //criar FIELDS
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Nome do parceiro",
            'name' => 'nome',
            'type' => 'text',
        ]);

         $this->crud->addField([
            'label' => 'Logomarca do parceiro',
            'name' => 'logo',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads' 
        ]);

         $this->crud->addField([
            'label' => 'Link do parceiro',
            'name' => 'link',
            'type' => 'text'
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Tipo (Parceiro ou Convênio)",
            'name' => 'tipo',
            'type' => 'text'
        ]);


        // add asterisk for fields that are required in ParceiroRequest
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
