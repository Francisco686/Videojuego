<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaMayoreo extends Model
{
    use HasFactory;

    protected $table = 'venta_mayoreo';

    protected $primaryKey = 'id_mayoreo';

    protected $fillable = [
        'id_producto',
        'id_proveedor',
        'id_fecha',
    ];

    // Definición de la relación con Producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    // Definición de la relación con Proveedor
    public function proveedor()
    {
        return $this->belongsTo(Provedor::class, 'id_proveedor');
    }

    // Definición de la relación con Fecha
    public function fecha()
    {
        return $this->belongsTo(Fecha::class, 'id_fecha');
    }
}
