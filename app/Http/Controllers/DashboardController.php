<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $services = Service::latest()->get();
        
        return view('dashboard', compact('services'));
    }
}
