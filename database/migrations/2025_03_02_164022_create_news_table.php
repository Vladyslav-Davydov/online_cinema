<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Запуск миграции.
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // id
            $table->string('title'); // заголовок новости
            $table->text('preview'); // краткое содержание новости
            $table->text('content'); // полное содержание новости
            $table->boolean('is_active')->default(true); // статус активности новости
            $table->timestamp('published_at')->nullable(); // дата публикации новости
            $table->timestamps(); // created_at и updated_at
            $table->softDeletes(); // softDeletes для мягкого удаления
        });
    }

    /**
     * Откат миграции.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
