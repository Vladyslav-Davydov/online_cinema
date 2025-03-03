<?php

namespace App\Http\Controllers;  // Пространство имен

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;  // Подключаем базовый контроллер Laravel

// Создаем абстрактный класс BaseController
abstract class BaseController extends Controller
{
    // Абстрактный метод, который должны реализовать дочерние классы
    abstract public function handleRequest(Request $request);

    // Можно добавить дополнительные методы
    public function commonMethod()
    {
        return "Этот метод доступен во всех классах-наследниках.";
    }
}
