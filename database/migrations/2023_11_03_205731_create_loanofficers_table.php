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
        Schema::create('loanofficers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->double('phone');
            $table->string('gender');
            $table->string('position');
            // $table->date('date_hired');
            $table->decimal('salary', 50, 0);
            $table->foreignId('state_id');
            // ->constrained()->cascadeOnDelete();         
            $table->foreignId('city_id');
            // ->constrained()->cascadeOnDelete();         
         
       

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loanofficers');
    }
};
