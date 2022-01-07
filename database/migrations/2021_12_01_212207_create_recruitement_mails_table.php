<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitementMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitement_mails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->string('attachment')->nullable();
            $table->string('received_at')->nullable();
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
        Schema::dropIfExists('recruitement_mails');
    }
}
