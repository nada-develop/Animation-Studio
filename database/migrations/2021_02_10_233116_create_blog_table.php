<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('image', 150);
            $table->string('title',150);
            $table->string('desc', 255);
            $table->string('author_name', 255);
            $table->date('date');
            $table->unsignedBigInteger('category_id')->index();
            $table->timestamps();
            $table->foreign('category_id ')->references('id')->on('blog_categories')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
