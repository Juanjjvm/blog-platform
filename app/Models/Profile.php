<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at']; // guarded: para guardar las propiedades que no queremos que se asignen masivamente    
}
