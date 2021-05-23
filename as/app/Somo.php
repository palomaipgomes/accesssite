<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Somo extends Model
{
    protected $table = "somos";
 
    public function atuacao()
    {
        return $this->belongsTo('App\Atuacao','atuacao_id');
    }
    
    public function missao()
    {
        return $this->belongsTo('App\Missao','missao_id');
    }

    public function visao()
    {
        return $this->belongsTo('App\Visao','visao_id');
    }

    public function valores()
    {
        return $this->belongsTo('App\Valores','valores_id');
    }

    public function organograma()
    {
        return $this->belongsTo('App\Organograma','organograma_id');
    }
}