@extends('layout')
@section('title')
Single Employee
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $employee->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $employee->name }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $employee->age }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $employee->address }}</td>
                    </tr>
                    <tr>
                        <th>Salary</th>
                        <td>${{ number_format($employee->salary, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="{{ route('employee.index') }}" class="btn btn-danger">back</a>
        @endsection