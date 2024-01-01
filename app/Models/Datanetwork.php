<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class datanetwork extends Model
{
    use HasFactory;

    protected $fillable =[

            'name',
          
    ];
        public function databundle (): BelongsTo
        {
            return $this-> belongsTo(databundle::class);
        }



}
