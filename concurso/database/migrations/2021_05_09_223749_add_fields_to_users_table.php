<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')->nullable();
            $table->integer('identification')->nullable();
            $table->integer('phone')->nullable();
            $table->bigInteger('concourse_id')->unsigned();

            $table->foreign('concourse_id')->references('id')->on('concourses')->constrained();
            $table->foreignId('city_id')->nullable()->constrained();
            $table->foreignId('department_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
