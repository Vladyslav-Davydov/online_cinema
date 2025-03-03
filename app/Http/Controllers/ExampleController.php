<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends BaseController
{
    // Реализация абстрактного метода
    public function handleRequest(Request $request)
    {
        return "Обработан запрос!";
    }
}
