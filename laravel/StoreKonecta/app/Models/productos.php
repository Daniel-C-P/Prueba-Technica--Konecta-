<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    /**
 * Class Configuracione
 *
 * @property $id
 * @property $Nom_producto
 * @property $Referencia
 * @property $Precio
 * @property $Peso
 * @property $Categoria
 * @property $Stock
 * @property $Ventas
 * @property $Fech_creacion
 *
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

 /**
 * Attributes that should be mass-assignable.
 *
 * @var array
 */


    protected $fillable =[
     'Nom_producto',
     'Referencia',
     'Precio',
     'Peso',
     'Categoria',
     'Stock',
     'Ventas',
     'Fech_creacion'];

     public $timestamps = false;
     protected $date = ['fech_creacion'];

}
