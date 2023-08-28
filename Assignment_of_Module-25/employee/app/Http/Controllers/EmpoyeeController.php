<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employe::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:employees,email',
        ]);

        Employe::create($validatedData);

        return redirect()->route('employees.index')
            ->with('success', 'Employee added successfully.');
    }

}

// The employ controller...................
