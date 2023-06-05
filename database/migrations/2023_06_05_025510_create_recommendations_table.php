<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_profile_id');
            $table->unsignedBigInteger('outfit_id');
            $table->mediumText('OutfitImage');
            $table->string('Pattern');
            $table->string('OutfitColors(RGB)');
            $table->timestamps();

            $table->foreign('user_profile_id')->references('id')->on('user_profile');
            $table->foreign('outfit_id')->references('id')->on('outfit_styles_and_attributes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommendations');
    }
}
