<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutfitStylesAndAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfit_styles_and_attributes', function (Blueprint $table) {
            $table->id();
            $table->mediumText('OutfitImage');
            $table->string('OutfitType');
            $table->string('OutfitStyle');
            $table->string('Neckline');
            $table->string('SleeveType');
            $table->string('Length')->nullable();
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
        Schema::dropIfExists('outfit_styles_and_attributes');
    }
}
