<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommentsToAnimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animes', function (Blueprint $table) {
            $table->string('comments')->after('image')->nullable();
            $table->string('folgen_gesamt')->after('comments')->nullable();
            $table->string('folgen_aktuell')->after('folgen_gesamt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animes', function (Blueprint $table) {
            $table->dropColumn('comments');
            $table->dropColumn('folgen_gesamt');
            $table->dropColumn('folgen_aktuell');
        });
    }
}
