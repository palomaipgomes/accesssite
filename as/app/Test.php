<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['name','user_id'];
    protected $primaryKey = 'id';
}