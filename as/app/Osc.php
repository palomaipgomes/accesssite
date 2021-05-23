<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Osc extends Model
{
    protected $table = "oscs";
 
    public function servicos()
    {
        return $this->belongsTo('App\Servicos','servicos_id');
    }

}