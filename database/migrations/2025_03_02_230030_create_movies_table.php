<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор фильма
            $table->string('title'); // Название фильма
            $table->text('description'); // Описание фильма
            $table->string('vk_url'); // Ссылка на видео в ВКонтакте
            $table->timestamps(); // Дата создания и обновления записи
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies'); // Удаление таблицы, если миграция откатывается
    }
}