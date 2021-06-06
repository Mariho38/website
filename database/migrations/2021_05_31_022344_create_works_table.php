<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->integer('category_id')->unsigned()->unique('works_category_id_unique_foreign');
            $table->text('detail');
            $table->string('path', 500);
            $table->timestamps();
            $table->dateTime('deleted_at');
            
            
            $table->foreign('category_id', 'works_category_id_unique_foreign')->references('id')->on('categories')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
        
        $table->dropUnique('category_id');
    }
}
