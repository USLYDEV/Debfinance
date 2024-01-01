<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class loan extends Model
{
    use HasFactory;

    protected $fillable =[

        'loanproduct_id',
        'loanofficer_id'  ,        
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'phone',
        'zip_code',
        'amount', 50, 0,
        'officer_comment',
         'approvalstatus',
        ' repaymentstatus' 
    ];
        public function loanofficer (): BelongsTo
        {
            return $this-> belongsTo(loanofficer::class);
        }

        public function loanproduct (): BelongsTo
        {
            return $this-> belongsTo(loanproduct::class);
        }


}
