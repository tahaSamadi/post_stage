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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->bigInteger('cat_id')->unsigned()->nullable();
            $table->foreign('cat_id')->on('news_cats')->references('id')->onDelete('set null');
            $table->integer('state')->default(1);
            $table->integer('state_main')->default(1);
            $table->integer('state_header')->default(1);
            $table->string('pic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
