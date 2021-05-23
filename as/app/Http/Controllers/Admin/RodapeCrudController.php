<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\RodapeRequest as StoreRequest;
use App\Http\Requests\RodapeRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class RodapeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class RodapeCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Rodape');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/rodape');
        $this->crud->setEntityNameStrings('rodapé', 'Rodapé');

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
            'label' => 'Rua',
            'name' => 'rua',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'label' => 'Contato',
            'name' => 'contato',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'label' => 'E-mail',
            'name' => 'email',
            'type' => 'text'
        ]);

         $this->crud->addColumn([
            'label' => 'Logo',
            'name' => 'logo',
            'type' => 'binary'
        ]);

        //criar FIELDS
        
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Rua",
            'name' => 'rua',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Número",
            'name' => 'numero',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Bairro",
            'name' => 'bairro',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Cidade",
            'name' => 'cidade',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Estado",
            'name' => 'estado',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>País",
            'name' => 'pais',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>CEP",
            'name' => 'cep',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Contato principal",
            'name' => 'contato',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>E-mail principal",
            'name' => 'email',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => 'logomarca (tamanho menor)',
            'name' => 'logo',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads' 
        ]);

        // add asterisk for fields that are required in RodapeRequest
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
