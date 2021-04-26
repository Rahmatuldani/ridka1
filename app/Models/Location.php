<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = 'location';
    protected $fillable = ['name', 'created_at', 'updated_at'];
    protected $primaryKey = 'id_location';


    protected $guarded = [];
}
