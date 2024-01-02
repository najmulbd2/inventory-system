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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->unique();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('quantity')->nullable();
            $table->double('cost_price',2)->nullable();
            $table->double('regular_price',2)->nullable();
            $table->double('sale_price',2)->nullable();
            $table->tinyInteger('status')->nullable()->comment('0=not allow, 1=allow');
            $table->tinyInteger('updated_by')->nullable();
            $table->tinyInteger('added_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
