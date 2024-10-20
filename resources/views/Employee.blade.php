@extends('layout')
@section('title')
    Employee
@endsection
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
   
    <a href="{{ route('employee.create') }}" class="btn btn-primary">Add Employee</a>
</div>
<div class="table-responsive">
    <table class="table table-hover table-bordered align-middle text-center">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employee as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->age }}</td>
                <td>{{ $employee->address }}</td>
                <td>${{ number_format($employee->salary, 2) }}</td>
                <td>
                    <a href="{{ route('employee.show',$employee->id) }}" class="btn btn-sm btn-warning">View</a>
                    <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-sm btn-primary">Update</a>
                    <form action="{{ route ('employee.destroy',$employee->id)}}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection