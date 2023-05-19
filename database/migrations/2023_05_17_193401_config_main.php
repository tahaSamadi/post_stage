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
        Schema::create('config_main', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->nullable();
            $table->string('site_title_en')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->longText('description')->nullable();
            $table->string('tags')->nullable();
            $table->text('address')->nullable();
            $table->string('tell')->nullable();
            $table->string('admin_page_number')->nullable();
            $table->string('telegram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('mobile_contact')->nullable();
            $table->string('email_contact')->nullable();
            $table->longText('address_contact')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_main');
    }
};
