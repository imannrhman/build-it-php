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
        Schema::create('product_specification_value_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('specification_value_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('specification_value_id', 'specification_value_foreign')->references('id')->on('product_specification_values');
            $table->foreign('product_id', 'product_foreign')->references('id')->on('products');
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
        Schema::table('product_specification_value_links', function (Blueprint $table) {
            $table->dropForeign('specification_value_foreign');
            $table->dropForeign('product_foreign');
        });
        Schema::dropIfExists('product_specification_value_links');
    }
};
