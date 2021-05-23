<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Auth;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CorRequest as StoreRequest;
use App\Http\Requests\CorRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;


/**
 * Class CorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CorCrudController extends CrudController
{

    public function setup()

    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Cor');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/cor');
        $this->crud->setEntityNameStrings('cor do site', 'Cor do site');

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
            'label' => 'Código da cor',
            'name' => 'nome',
            'type' => 'text'
        ]); 

        //FIELDS
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Clique na faixa preta e escolha a cor do menu do site",
            'name' => 'nome',
            'type' => 'color',
        ]); 



        
        // add asterisk for fields that are required in CorRequest
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

    
