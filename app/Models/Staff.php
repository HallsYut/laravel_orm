<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';
    protected $primaryKey = 'id';

    public function telephones(): HasMany
    {
        return $this->hasMany(Telephone::class);
    }
}
