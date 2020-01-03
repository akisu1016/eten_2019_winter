<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token', 64)->unique();
            $table->string('project_code', 20);
            $table->unsignedTinyInteger('season_id');
            $table->string('department', 15);
            $table->timestamp('expires_at');
            $table->unique(['project_code', 'season_id']);
            $table->timestamps();
            //今回2038年問題は対応しません(18年も代々使われるシステムを作るつもりはないです)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokens');
    }
}