<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function store(Request $request, $id)
    {
        // Access form data using $request object (more secure)
        $data = $request->all();
        
        // Process form data (validation, logic, etc.)
        
        return view('tugas_processed'); // Replace with appropriate view name
    }
}
