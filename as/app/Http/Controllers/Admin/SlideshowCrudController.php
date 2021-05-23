<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SlideshowRequest as StoreRequest;
use App\Http\Requests\SlideshowRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class SlideshowCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SlideshowCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Slideshow');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/slideshow');
        $this->crud->setEntityNameStrings('apresentação de fotos', 'Apresentação de fotos');

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
            'label' => 'Imagem',
            'name' => 'imagem',
            'type' => 'binary'
        ]);

          //criar FIELDS
        $this->crud->addField([
            'label' => "<span style='color:red'>* </span>Imagem",
            'name' => 'imagem',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads' 
        ]);


        // add asterisk for fields that are required in SlideshowRequest
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
