<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Slideshow extends Model
{
    protected $table = "slideshows";
 
    public function imagem()
    {
        return $this->belongsTo('App\Imagem','imagem_id');
    }

}