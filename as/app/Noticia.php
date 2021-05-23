<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Noticia extends Model
{
    protected $table = "noticias";
 
    public function titulo()
    {
        return $this->belongsTo('App\Titulo','titulo_id');
    }
    
    public function data()
    {
        return $this->belongsTo('App\Data','data_id');
    }

    public function texto()
    {
        return $this->belongsTo('App\Texto','texto_id');
    }

}