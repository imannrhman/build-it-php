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
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('image_id')->nullable()->constrained('product_images');
            $table->foreignId('sub_categories_id')->nullable()->constrained('sub_categories');
            $table->foreignId('store_id')->nullable()->constrained('stores');
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
            $table->dropConstrainedForeignId('image_id');
            $table->dropConstrainedForeignId('sub_categories_id');
            $table->dropConstrainedForeignId('store_id');
        });
    }
};
