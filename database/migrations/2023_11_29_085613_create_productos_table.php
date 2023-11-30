<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marcaId')->nullable()->default(null);
            $table->bigInteger('category_id')->unsigned();
            $table->text('description')->nullable();
            $table->string('name');
            $table->integer('stock');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
