<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attachment;

class Ticket extends Model
{
    use HasFactory;

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

}
