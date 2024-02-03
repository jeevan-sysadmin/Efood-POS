<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['table_id', 'is_reserved'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}