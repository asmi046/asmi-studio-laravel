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
        Schema::create('portfolio_post_images', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->useCurrent();
            $table->foreignId('portfolio_post_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('post_name', 100);
            $table->string("razdel_name", 100);
            $table->text("img");
            $table->string("img_title", 200);
            $table->string("img_alt", 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_post_images');
    }
};
