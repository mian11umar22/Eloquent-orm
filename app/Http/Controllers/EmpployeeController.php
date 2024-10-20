<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmpployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee =Employee::all();

        return view('Employee',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddEmployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Employee::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'address'=>$request->address,
            'salary'=>$request->salary
        ]);

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $employee =  Employee::find($id);

        return view('SingleEmployee',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee =  Employee::find($id);

        return view('UpdateEmployee',compact('employee'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee=Employee::where('id',$id);
        $employee->update([
            'name'=>$request->name,
            'age'=>$request->age,
            'address'=>$request->address,
            'salary'=>$request->salary
        ]);

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::destroy($id);

        if($employee){
        return redirect()->route('employee.index');}
    }
}
