<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Validator;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'mobile' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'address' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);
        // Create a new employee record
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->mobile = $request->input('mobile');
        $employee->age = $request->input('age');
        $employee->address = $request->input('address');
        $employee->position = $request->input('position');
        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = \App\Models\Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
            'position' => 'required|string|max:255',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->mobile = $request->input('mobile');
        $employee->age = $request->input('age');
        $employee->address = $request->input('address');
        $employee->position = $request->input('position');
        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
}
