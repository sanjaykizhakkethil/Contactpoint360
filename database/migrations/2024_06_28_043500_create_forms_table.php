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
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('form_id');
            $table->string('form_name')->nullable();
            $table->integer('form_phone')->nullable();
            $table->string('form_gender')->nullable();
            $table->timestamp('form_created_at')->useCurrent();
            $table->timestamp('form_updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
