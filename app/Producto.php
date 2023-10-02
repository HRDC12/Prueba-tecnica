<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $tipo_producto
 * @property $created_at
 * @property $updated_at
 *
 * @property Asociado[] $asociados
 * @property TipoProducto $tipoProducto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipo_producto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipo_producto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asociados()
    {
        return $this->hasMany('App\Asociado', 'Producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoProducto()
    {
        return $this->hasOne('App\TipoProducto', 'id', 'tipo_producto');
    }
    

}
