<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineService extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function illness()
    {
        return $this->belongsTo(Illness::class, 'illness_id');
    }
}
