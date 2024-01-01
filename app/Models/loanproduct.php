<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class loanproduct extends Model
{
    use HasFactory;

    
    protected $fillable =[
        'name',
        'duration',
        'interest',
    ];

    public function loan (): BelongsToMany
    {
        return $this-> belongsToMany(loan::class);
    }
}
