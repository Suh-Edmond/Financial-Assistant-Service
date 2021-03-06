<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->double('amount');
            $table->boolean('complusory');
            $table->timestamps();
            $table->mediumText('created_by')->nullable(true);
            $table->mediumText('updated_by')->nullable(true);
            $table->string('payment_category_id');

            $table->foreign('payment_category_id')->references('id')->on('payment_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_items');
    }
}
