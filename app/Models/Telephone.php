<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Telephone extends Model
{
    use HasFactory;

    protected $table = 'telephones';
    protected $primaryKey = 'id';

    public function staffs(): BelongsTo
    {
        return $this->belongsTo(staff::class);
    }
}
