<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SomoRequest as StoreRequest;
use App\Http\Requests\SomoRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class SomoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SomoCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Somo');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/somo');
        $this->crud->setEntityNameStrings('Quem Somos', 'Quem Somos');

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
            'label' => 'Atuação',
            'name' => 'atuacao',
            'type' => 'text'
        ]);
         $this->crud->addColumn([
            'label' => 'Missão',
            'name' => 'missao',
            'type' => 'text'
        ]);
         $this->crud->addColumn([
            'label' => 'Visão',
            'name' => 'visao',
            'type' => 'text'
        ]);
         $this->crud->addColumn([
            'label' => 'Valores',
            'name' => 'valores',
            'type' => 'text'
        ]);
         $this->crud->addColumn([
            'label' => 'Organograma',
            'name' => 'organograma',
            'type' => 'binary'
        ]);

          //criar FIELDS
        $this->crud->addField([
            'label' => "Atuação",
            'name' => 'atuacao',
            'type' => 'ckeditor',
        ]);
        
         $this->crud->addField([
            'label' => 'Missão',
            'name' => 'missao',
            'type' => 'ckeditor'
        ]);
         $this->crud->addField([
            'label' => 'Visão',
            'name' => 'visao',
            'type' => 'ckeditor'
        ]);
         $this->crud->addField([
            'label' => 'Valores',
            'name' => 'valores',
            'type' => 'ckeditor'
        ]);
         $this->crud->addField([
            'label' => 'Organograma',
            'name' => 'organograma',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads' 
        ]);


        // add asterisk for fields that are required in SomoRequest
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
