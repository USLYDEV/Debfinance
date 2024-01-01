<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('loanproduct_id')->constrained()->cascadeOnDelete();         
            $table->foreignId('loanofficer_id');            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('address');
            $table->double('phone', 11,0);
            $table->char('zip_code');
            $table->decimal('amount', 50, 0);
            $table->string('officer_comment');
            
            
            // $table->macAddress('device_location');
            $table->boolean('approvalstatus');
            $table->boolean('repaymentstatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
