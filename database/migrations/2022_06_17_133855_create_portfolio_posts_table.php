<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_posts', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->useCurrent();
            $table->string('name', 100);
            $table->string('image_folder_name', 50);
            $table->string('seo_title', 100);
            $table->string('seo_description', 250);
            $table->text('content');
            $table->string('color1', 10);
            $table->string('color2', 10);
            $table->string('color3', 10)->nullable();
            $table->string('color4', 10)->nullable();
            $table->text('oblozgka');
            $table->text('page_prev');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_posts');
    }
};
