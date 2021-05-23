<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Parceiro extends Model
{
    protected $table = "parceiros";
 
    public function nome()
    {
        return $this->belongsTo('App\Nome','nome_id');
    }

    public function logo()
    {
        return $this->belongsTo('App\Logo','logo_id');
    }

    public function link()
    {
        return $this->belongsTo('App\Link','link_id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Tipo','tipo_id');
    }

}