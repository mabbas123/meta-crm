<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevController extends Controller
{
    public function __invoke()
    {
        return [
            'message' => 'Hello Dev!'
        ];
    }
}
