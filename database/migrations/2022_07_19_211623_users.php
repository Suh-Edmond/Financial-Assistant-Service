<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique()->nullable(true);
            $table->string('telephone')->nullable(true);
            $table->timestamp('email_verified_at')->nullable(true);
            $table->string('password');
            $table->string('gender');
            $table->string('address');
            $table->string('occupation');
            $table->rememberToken();
            $table->timestamps();
            $table->mediumText('created_by')->nullable(true);
            $table->mediumText('updated_by')->nullable(true);
            $table->string('organisation_id');

            $table->foreign('organisation_id')->references('id')->on('organisations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
