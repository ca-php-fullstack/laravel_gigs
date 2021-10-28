<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('band_name');
            $table->unsignedBigInteger('artist_id'); // ->table:users->id
            $table->string('genre');
            $table->timestamps();

            $table->foreign('artist_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade'); // the gig is deleted if we delete the user
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gigs');
    }
}
