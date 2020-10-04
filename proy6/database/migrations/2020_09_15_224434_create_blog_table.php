<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');

            $table->string('titulo');
            $table->string('foto',128)->nullable();/** REVISAR  ................. */

            $table->string('slug',128);

            $table->mediumText('excerpt')->nullable();
            $table->text('body');

            $table->string('estado')->default('ACTIVO');
            $table->timestamps();


            //Relations
            $table->foreign('user_id')->references('id')->on('users')
            //->onDelete('cascade')
            ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
