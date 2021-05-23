<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\NoticiaRequest as StoreRequest;
use App\Http\Requests\NoticiaRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class NoticiaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class NoticiaCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Noticia');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/noticia');
        $this->crud->setEntityNameStrings('notícia', 'Notícias');

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
            'label' => 'Título',
            'name' => 'titulo',
            'type' => 'string'
        ]);

        $this->crud->addColumn([
            'label' => 'Data',
            'name' => 'data',
            'type' => 'date'
        ]);

         $this->crud->addColumn([
            'label' => 'Texto',
            'name' => 'texto',
            'type' => 'text'
        ]);

          //criar FIELDS
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Título",
            'name' => 'titulo',
            'type' => 'text',
        ]);
        
         $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Data",
            'name' => 'data',
            'type' => 'date',
        ]);

        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Texto",
            'name' => 'texto',
            'type' => 'ckeditor',
        ]);

        

        // add asterisk for fields that are required in NoticiaRequest
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
