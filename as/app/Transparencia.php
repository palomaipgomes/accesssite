<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Transparencia extends Model
{
    protected $table = "transparencias";
 
    public function titulo()
    {
        return $this->belongsTo('App\Titulo','titulo_id');
    }
    public function arquivo()
    {
        return $this->belongsTo('App\Arquivo','arquivo_id');
    }
    public function observacao()
    {
        return $this->belongsTo('App\Observacao','observacao_id');
    }
}