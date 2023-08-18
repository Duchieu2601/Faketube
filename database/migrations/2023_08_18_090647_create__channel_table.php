<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_channel', function (Blueprint $table) {
            $table->ID('ChannelID');
            $table->string('ChannelName');
            $table->string('Description');
            $table->string('SubcribersCount');
            $table->string("URL");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_channel');
    }
};
