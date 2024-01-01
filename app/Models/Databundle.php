<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class databundle extends Model
{
    use HasFactory;

    protected $fillable =[

            'network',
            'plan',
           'phone',
           'amount'
    ];
        public function datanetwork (): BelongsTo
        {
            return $this-> belongsTo(datanetwork::class);
        }



}
