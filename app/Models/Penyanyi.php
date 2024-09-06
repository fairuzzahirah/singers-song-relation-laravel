<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyanyi extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function lagu()
    {
        return $this->hasMany(Lagu::class);
    }
}
