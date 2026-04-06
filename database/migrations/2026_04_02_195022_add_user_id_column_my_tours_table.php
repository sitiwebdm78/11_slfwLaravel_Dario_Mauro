<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::table('my_tours', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id')->nullable(); /* nullable() */; //fin qui non abbbiamo un valore logico, per cui dobbimao indicarglielo
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('my_tours', function (Blueprint $table) {
           $table->dropForeign(['user_id']);//Rottura del vincolo referenziale
        $table->dropColumn('user_id');//Eliminazione clonna precedetemente creata e collegata con il foreign-key
        });
    }
};
