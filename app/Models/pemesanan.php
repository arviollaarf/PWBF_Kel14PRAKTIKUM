<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    protected $table = 'tabel_pemesanan';

    public function User()
    {
	return $this->belongsTo('App\Models\Tabel_user','id_user','id');
    }
    public function Supplier()
    {
	return $this->belongsTo('App\Models\Supplier','id_sup','id');
    }

    public function detailPemesanans()
    {
	return $this->hasMany('App\Models\detailPemesanan','id_pesan','id');
    }
}
