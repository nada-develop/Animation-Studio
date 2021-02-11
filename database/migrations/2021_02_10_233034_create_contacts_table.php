<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 20);
            $table->string('mobile1',20);
            $table->string('mobile2', 20);
            $table->string('contact_email', 100);
            $table->string('facebook_link', 150)->nullable();
            $table->string('instagram_link', 150)->nullable();
            $table->float('google_lat');
            $table->float('google_long');
            $table->float('google_zoom');
            $table->string('address',255);
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
        Schema::dropIfExists('contacts');
    }
}
