<?php

namespace App\Http\Controllers\StartController;

use App\Http\Controllers\Controller;

class StartController extends Controller
{
    public function generate(Request $request)
    {
        // Initialize variables from session
        $this->getVarsFromSession($request);

        return view('start', [
        ]);
    }
}
