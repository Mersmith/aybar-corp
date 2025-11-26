<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SlinController extends Controller
{
    public function probarSlin()
    {
        $dni = "41870082";

        $response = Http::get("https://aybarcorp.com/slin/cliente/{$dni}");

        return $response->json();
    }
}
