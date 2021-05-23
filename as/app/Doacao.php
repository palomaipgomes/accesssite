<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Doacao extends Model
{
    protected $table = "doacaos";
 
    public function conta()
    {
        return $this->belongsTo('App\Conta','conta_id');
    }
    public function agencia()
    {
        return $this->belongsTo('App\Agencia','agencia_id');
    }
    public function banco()
    {
        return $this->belongsTo('App\Banco','banco_id');
    }
    public function tipo()
    {
        return $this->belongsTo('App\Tipo','tipo_id');
    }

    public function user_id()
    {
        return $this->belongsTo('App\user_id','user_id');
    }
}