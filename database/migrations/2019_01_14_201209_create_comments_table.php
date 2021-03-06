<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable(); // could be a system-generated comment
            $table->morphs('commentable');
            $table->text('subject');
            $table->text('body');
            $table->boolean('hidden')->default(false);
            $table->enum('type', ['LOG', 'MESSAGE']);
            $table->timestamps();

            $table->index('user_id');
            $table->index(['commentable_id','commentable_type']);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
