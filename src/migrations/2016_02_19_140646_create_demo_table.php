<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('demo_items', function(Blueprint $t)
        {
            $t->increments('id')->unsigned();
            $t->text('slug', 255);
            $t->text('name', 255);
            $t->text('description', 255);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('demo_items');
    }
}
