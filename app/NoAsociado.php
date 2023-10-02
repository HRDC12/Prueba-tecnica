<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NoAsociado
 *
 * @property $id
 * @property $primer_nombre
 * @property $segundo_nombre
 * @property $primer_apellido
 * @property $segundo_apellido
 * @property $dpi
 * @property $nit
 * @property $telefono
 * @property $es_asociado_id
 * @property $created_at
 * @property $updated_at
 *
 * @property EsAsociado $esAsociado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class NoAsociado extends Model
{
    
    static $rules = [
		'primer_nombre' => 'required',
		'segundo_nombre' => 'required',
		'primer_apellido' => 'required',
		'segundo_apellido' => 'required',
		'dpi' => 'required',
		'nit' => 'required',
		'telefono' => 'required',
		'es_asociado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','dpi','nit','telefono','es_asociado_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function esAsociado()
    {
        return $this->hasOne('App\EsAsociado', 'id', 'es_asociado_id');
    }
    

}
