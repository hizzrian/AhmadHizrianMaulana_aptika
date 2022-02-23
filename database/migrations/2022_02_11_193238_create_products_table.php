<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string("title");
            $table->timestamps();
            $table->string("slug")->unique();
            $table->string("image")->nullable();
            $table->string("mini_description");
            $table->text("description");
            $table->string("sku")->nullable();
            $table->integer("weight");
            $table->integer("stock")->nullable();
            $table->integer("price");
            $table->integer("discount");
            $table->integer("discount_price")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
