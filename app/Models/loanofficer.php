<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class loanofficer extends Model
{
    use HasFactory;

    protected $fillable =[
        'first_name',
        'last_name',
        'email',
        'state_id',
        'city_id',
         'phone',
         'gender',
         'position',
         'salary',
        //  'date_hired'
    ];


    public function loan (): HasMany
        {
            return $this-> hasMany(loan::class);
        }

       
}
