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
        Schema::create('orders', function (Blueprint $table) {
           
            $table->unsignedBigInteger('ID')->autoIncrement(); // Defining CityKey as an unsignedBigInteger with auto-increment
            $table->string('Name');
            $table->text('Description')->nullable(); // Description can be nullable
            $table->timestamps(); // Adds created_at and updated_at columns
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
