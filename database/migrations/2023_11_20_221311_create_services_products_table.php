<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services_products', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['service','product']);
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('image');
            $table->longText('content');
            $table->boolean('active')->default(0);
            $table->boolean('main_page')->default(0);
            $table->string('icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_products');
    }
};
