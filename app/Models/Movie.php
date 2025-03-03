<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Поля, которые можно массово назначать
    protected $fillable = [
        'title',       // Название фильма
        'description', // Описание фильма
        'vk_url',      // Ссылка на фильм из ВК
    ];

    // Если нужно добавить дополнительные методы или логику, можно сделать это здесь
    // Например, метод для получения embed-ссылки из ВК
    public function getVkEmbedUrl()
    {
        // Пример: преобразуем ссылку из ВК в embed-формат
        $url = $this->vk_url;
        if (str_contains($url, 'video')) {
            $parts = explode('video', $url);
            return 'https://vk.com/video_ext.php?' . $parts[1];
        }
        return $url;
    }
}