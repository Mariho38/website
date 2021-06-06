<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivepaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livepaints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('place', 100);
            $table->date('date');
            $table->text('detail');
            $table->integer('work_id')->unsigned()->unique('livepaints_work_id_unique_foreign');
            $table->timestamps();
            $table->dateTime('deleted_at');
            
            $table->foreign('work_id', 'livepaints_work_id_unique_foreign')->references('id')->on('works');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livepaints');
        
        $table->dropUnique('work_id');
    }
}
