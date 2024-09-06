<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'penyanyi_id'];
    public function penyanyi()
    {
        return $this->belongsTo(Penyanyi::class);
    }
}
