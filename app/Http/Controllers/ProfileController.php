<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id): JsonResponse
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age
        ];

        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $response = response()->json($data, 200);
        $response->cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);

        return $response;
    }
}


