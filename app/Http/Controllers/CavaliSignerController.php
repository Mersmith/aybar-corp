<?php

namespace App\Http\Controllers;

use App\Services\CavaliSignerService;

class CavaliSignerController extends Controller
{
    public function test(CavaliSignerService $service)
    {
        return response()->json($service->getSigner());
    }
}
