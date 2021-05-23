<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TransparenciaRequest as StoreRequest;
use App\Http\Requests\TransparenciaRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class TransparenciaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TransparenciaCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Transparencia');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/transparencia');
        $this->crud->setEntityNameStrings('prestação de contas', 'Prestação de contas');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        $this->crud->addClause('where','user_id',backpack_user()->id);
        
        //COLUMNS
        $this->crud->addColumn([
            'label' => 'Título',
            'name' => 'titulo',
            'type' => 'text'
        ]); 

        $this->crud->addColumn([
            'label' => 'Arquivo',
            'name' => 'arquivo',
            'type' => 'binary'
        ]); 

        $this->crud->addColumn([
            'label' => 'Observação',
            'name' => 'observacao',
            'type' => 'text'
        ]); 

        //FIELDS
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Título",
            'name' => 'titulo',
            'type' => 'text'
        ]); 
        
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Arquivo",
            'name' => 'arquivo',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads' 
        ]); 

        $this->crud->addField([
            'label' => 'Observação',
            'name' => 'observacao',
            'type' => 'ckeditor'
        ]); 


        // add asterisk for fields that are required in TransparenciaRequest
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
