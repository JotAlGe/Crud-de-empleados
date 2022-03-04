<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('name');
            $table->string('slug');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('password');

            # relation with level table
            $table->unsignedBigInteger('id_level')->default(2);
            $table->foreign('id_level')
                ->references('id')
                ->on('level')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            # relation with professions table
            $table->foreign('id')
                ->references('id')
                ->on('professions')
                ->onDelete('cascade')
                ->onUpdate('cascade');


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
        Schema::dropIfExists('user');
    }
}
