<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('custFirstName');
            $table->text('custLastName');
            $table->text('custAddress1');
            $table->text('custAddress2');
            $table->text('custCity');
            $table->text('custState');
            $table->integer('custZip');
            $table->bigInteger('custPhone');
            $table->text('custEmail');
            $table->text('compName');
            $table->text('compAddress');
            $table->text('compCity');
            $table->text('compState');
            $table->integer('compZip');
            $table->bigInteger('compPhone');
            $table->binary('compInvoicePDF');
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
        Schema::dropIfExists('posts');
    }
}
