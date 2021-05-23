<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TimeRequest as StoreRequest;
use App\Http\Requests\TimeRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class TimeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TimeCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Time');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/time');
        $this->crud->setEntityNameStrings('equipe', 'Equipe');

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
            'type' => 'text'
        ]);
         $this->crud->addColumn([
            'label' => 'Cargo',
            'name' => 'cargo',
            'type' => 'text'
        ]);
         $this->crud->addColumn([
            'label' => 'Foto',
            'name' => 'foto',
            'type' => 'file'
        ]);

          //criar FIELDS
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Nome",
            'name' => 'nome',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Cargo",
            'name' => 'cargo',
            'type' => 'text',
        ]);
        
        $this->crud->addField([
            'label' => 'Foto',
            'name' => 'foto',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads' // if you store files in the /public folder, please ommit this; if you store them in /storage or S3, please specify it;
        ]);




        // add asterisk for fields that are required in TimeRequest
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
