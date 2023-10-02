<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EsAsociado
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Asociado[] $asociados
 * @property NoAsociado[] $noAsociados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EsAsociado extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asociados()
    {
        return $this->hasMany('App\Asociado', 'es_asociado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function noAsociados()
    {
        return $this->hasMany('App\NoAsociado', 'es_asociado_id', 'id');
    }
    

}
