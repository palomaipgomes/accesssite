<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Time extends Model
{
    protected $table = "times";
 
    public function nome()
    {
        return $this->belongsTo('App\Nome','nome_id');
    }
    public function cargo()
    {
        return $this->belongsTo('App\Cargo','cargo_id');
    }
    public function foto()
    {
        return $this->belongsTo('App\Foto','foto_id');
    }
}