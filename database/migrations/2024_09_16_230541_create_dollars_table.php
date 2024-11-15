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
        Schema::create('dollars', function (Blueprint $table) {
            $table->id();
            $table->string('type'); 
            $table->string('icon'); 
            $table->decimal('buy_price', 10, 2); // nuy price
            $table->decimal('sell_price', 10, 2); // sell price
            $table->date('date'); // date update price
            $table->timestamps();     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dollars');
    }
};
