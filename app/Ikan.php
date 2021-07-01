<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
   protected $table ='ikan';
    protected $fillable =['nama','harga','penjual','tanggal','image'];
}
