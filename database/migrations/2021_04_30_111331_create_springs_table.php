<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('springs', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('name');
            $table->string('latitude');
            $table->string('longitude');
            $table->text('description', 65535);
            $table->string('img')->default('public/image/no_image.jfif');
            $table->integer('status_id')->nullable()->default(3)->index('status_id');
            $table->timestamps();
            $table->integer('user_id')->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('springs');
    }
}
