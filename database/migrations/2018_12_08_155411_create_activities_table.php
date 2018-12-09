<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code', 100)->unique() ;

            $table->string('name')->nullable()->default(null) ;

            $table->dateTime('start')->nullable()->default(null);

            $table->dateTime('end')->nullable()->default(null) ;

            $table->dateTime('actual_start')->nullable()->default(null) ;

            $table->dateTime('actual_end')->nullable()->default(null) ;

            $table->string('responsible_person')->nullable()->default(null) ;

            $table->integer('progress')->nullable()->default(0);


            $table->text('details')->nullable()->default(null);   


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
        Schema::dropIfExists('activities');
    }
}
