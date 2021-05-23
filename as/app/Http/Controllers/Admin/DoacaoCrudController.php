<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DoacaoRequest as StoreRequest;
use App\Http\Requests\DoacaoRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class DoacaoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class DoacaoCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Doacao');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/doacao');
        $this->crud->setEntityNameStrings('dados para doação', 'Dados para doação');

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
            'label' => 'Conta',
            'name' => 'conta',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'label' => 'Agência',
            'name' => 'agencia',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'label' => 'Banco',
            'name' => 'banco',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'label' => 'Tipo da conta',
            'name' => 'tipo',
            'type' => 'text'
        ]);

        //FIELDS
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Número da conta",
            'name' => 'conta',
            'type' => 'text',
            
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Agência bancária",
            'name' => 'agencia',
            'type' => 'text',
            
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Nome do banco",
            'name' => 'banco',
            'type' => 'text',
            
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Tipo da conta (conta poupança ou conta corrente)",
            'name' => 'tipo',
            'type' => 'text',
            
        ]);

        // add asterisk for fields that are required in DoacaoRequest
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
