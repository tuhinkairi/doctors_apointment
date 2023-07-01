<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctors_tabel extends Model
{
    use HasFactory;
    protected $table = "doctor_tabel";
    protected $primaryKey = "id";
}
