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
        Schema::create('databundles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('network');
            // ->constrained()->cascadeOnDelete();         
            $table->string('plan');
            $table->double('phone');
            $table->decimal('amount', 50, 0);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databundles');
    }
};
