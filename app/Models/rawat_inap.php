<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rawat_inap extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

public function ruang()
{
    return $this->belongsTo(ruang::class);
}


public function pasien()
{
    return $this->belongsTo(pasien::class);
}


}
