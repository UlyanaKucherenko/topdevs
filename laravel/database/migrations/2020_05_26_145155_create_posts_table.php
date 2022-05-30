<?php

use App\Services\Constants\PostStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->text('short_description');

            $table->string('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->string('keywords')->nullable();

            $table->string('read_time');
            $table->boolean('is_show_to_main_page')->default(false);

            $table->string('status')->default(PostStatus::getDefaultStatus());
            $table->timestamp('publish_at')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
