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
        Schema::table('ta_products', function (Blueprint $table) {
            $table->string('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->text('seo_auther')->nullable();
            $table->longText('keywords')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ta_products', function (Blueprint $table) {
            $table->dropColumn('seo_title');
            $table->dropColumn('seo_description');
            $table->dropColumn('seo_auther');
            $table->dropColumn('keywords');
        });
    }
};
