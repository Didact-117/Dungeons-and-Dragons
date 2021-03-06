<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpellBooksSpells extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spell_books_spells', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('spell_id');
            $table->string('spell_book_id');
            $table->unique(['spell_id', 'spell_book_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spell_books_spells');
    }
}
