<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSertifikats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sertifikats', function (Blueprint $table) {
            $table->foreignId('id_pendaftaran')->after('id')->constrained('pendaftarans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sertifikats', function (Blueprint $table) {
            // $table->dropForeign('id_pendaftaran');
        });
    }
}
