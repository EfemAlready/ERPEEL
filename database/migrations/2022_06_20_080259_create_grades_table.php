<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('event_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->integer('pace');
            $table->integer('shooting');
            $table->integer('passing');
            $table->integer('agility');
            $table->integer('defending');
            $table->integer('overall');
            $table->longText('feedback');
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
        Schema::dropIfExists('grades');
    }
};
