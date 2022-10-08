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
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->foreignId('product_category_id')->nullable()->constrained('product_categories')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('product_brand_id')->nullable()->constrained('product_brands')->nullOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('price');
            $table->unsignedInteger('stock');
            $table->unsignedInteger('weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['product_category_id']);
            $table->dropForeign(['product_brand_id']);
        });

        Schema::dropIfExists('products');
    }
};
