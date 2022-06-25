<?php

namespace App\Models;

class Pedido extends RModel
{
    protected $table = "pedido";
    protected $fillable = ['datapedido', 'status', 'usuario_id'];
}
