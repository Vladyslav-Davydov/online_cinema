<?php

namespace App\Models\Cinema;  // Пространство имен

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Film newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Film newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Film query()
 * @mixin \Eloquent
 */
class Film extends Model
{
    use HasFactory;

    protected $table = 'films';  // Название таблицы в БД (если оно отличается от имени модели)

    // Указываем свойства модели, которые можно заполнять (для массового присвоения)
    protected $fillable = [
        'title', // Название фильма
        'director', // Режиссер
        'release_date', // Дата выпуска
    ];
}
