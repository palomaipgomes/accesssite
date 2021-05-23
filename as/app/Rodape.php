<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Rodape extends Model
{
    protected $table = "rodapes";
 
    public function rua()
    {
        return $this->belongsTo('App\Rua','rua_id');
    }

    public function numero()
    {
        return $this->belongsTo('App\Numero','numero_id');
    }

    public function bairro()
    {
        return $this->belongsTo('App\Bairro','bairro_id');
    }

    public function cidade()
    {
        return $this->belongsTo('App\Cidade','cidade_id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }

    public function pais()
    {
        return $this->belongsTo('App\Pais','pais_id');
    }

    public function cep()
    {
        return $this->belongsTo('App\Cep','cep_id');
    }

    public function contato()
    {
        return $this->belongsTo('App\Contato','contato_id');
    }

    public function email()
    {
        return $this->belongsTo('App\Email','email_id');
    }

}