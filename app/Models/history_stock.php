<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history_stock extends Model
{
    protected $table = 'tabel_history_stock';

    public function Barang()
    {
	return $this->belongsTo('App\Models\Barang','id_barang','id');
    }
}
