<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UInfoUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('job')->nullable()->after('img');
            $table->string('facebook')->nullable()->after('job');
            $table->string('github')->nullable()->after('facebook');
            $table->string('twitter')->nullable()->after('github');
            $table->string('website')->nullable()->after('twitter');
            $table->string('instagram')->nullable()->after('website');

            
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
