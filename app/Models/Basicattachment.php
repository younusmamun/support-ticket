<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Basicticket;

class Basicattachment extends Model
{
    use HasFactory;
    public function basicticket()
    {
        return $this->belongsTo(Basicticket::class);
    }
}
