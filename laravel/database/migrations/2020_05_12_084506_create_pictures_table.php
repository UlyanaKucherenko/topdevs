<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
            $table->string('thumbnail');
            $table->unsignedInteger('picturable_id');
            $table->string('picturable_type');
            $table->string('picture_meta_alt')->nullable();
            $table->string('picture_meta_title')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['picturable_id', 'picturable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
