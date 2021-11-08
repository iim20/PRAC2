<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    public $table = "songs";
    use HasFactory;

    public function library()
    {
        return $this->belongsTo(Library::class);
    }
}
