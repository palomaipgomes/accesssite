<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\RedeRequest as StoreRequest;
use App\Http\Requests\RedeRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class RedeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class RedeCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Rede');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/rede');
        $this->crud->setEntityNameStrings('rede sociais', 'redes sociais');

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
            'label' => 'Facebook',
            'name' => 'facebook',
            'type' => 'text'
        ]); 

        $this->crud->addColumn([
            'label' => 'Instagram',
            'name' => 'instagram',
            'type' => 'text'
        ]); 

        $this->crud->addColumn([
            'label' => 'WhatsApp',
            'name' => 'whatsapp',
            'type' => 'text'
        ]); 

        //FIELDS
        $this->crud->addField([
            'label' => 'Facebook',
            'name' => 'facebook',
            'type' => 'text'
        ]); 

        $this->crud->addField([
            'label' => 'Instagram',
            'name' => 'instagram',
            'type' => 'text'
        ]);

        $this->crud->addField([
            'label' => 'WhatsApp',
            'name' => 'whatsapp',
            'type' => 'text'
        ]);


        // add asterisk for fields that are required in RedeRequest
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
