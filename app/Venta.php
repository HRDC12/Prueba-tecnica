<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $fecha_emision
 * @property $fecha_contacto
 * @property $usuario_contacto
 * @property $acuerdo
 * @property $es_asociado
 * @property $nombre_asociado
 * @property $nombre_no_asociado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'fecha_emision' => 'required',
		'fecha_contacto' => 'required',
		'usuario_contacto' => 'required',
		'acuerdo' => 'required',
		'es_asociado' => 'required',
		'nombre_asociado' => 'required',
		'nombre_no_asociado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_emision','fecha_contacto','usuario_contacto','acuerdo','es_asociado','nombre_asociado','nombre_no_asociado'];



}
