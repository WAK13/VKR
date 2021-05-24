<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToSpringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('springs', function(Blueprint $table)
        {
            $table->foreign('user_id', 'springs_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('status_id', 'springs_ibfk_2')->references('id')->on('status')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('springs', function(Blueprint $table)
        {
            $table->dropForeign('springs_ibfk_1');
            $table->dropForeign('springs_ibfk_2');
        });
    }
}
