<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('notifications', function (Blueprint $table) {
            /* $table->uuid('id', 200)->primary();
            $table->string('type', 200);
            $table->morphs('notifiable', 100);
            $table->text('data', 200);
            $table->timestamp('read_at')->nullable();
            $table->timestamps(); */
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
