<?php
// app/Http/Controllers/Controller.php (Base Controller)
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // Başarı mesajları için helper method
    protected function successMessage($key, $params = [])
    {
        return [
            'success' => __('messages.'.$key, $params)
        ];
    }

    // Hata mesajları için helper method  
    protected function errorMessage($key, $params = [])
    {
        return [
            'error' => __('messages.'.$key, $params)
        ];
    }
}