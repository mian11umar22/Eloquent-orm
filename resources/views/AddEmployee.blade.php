@extends('layout')
@section('title')
Add New Employee
@endsection
@section('content')
<form action="{{ route('employee.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" required>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
    </div>

    <div class="mb-3">
        <label for="salary" class="form-label">Salary</label>
        <input type="number" step="0.01" class="form-control" id="salary" name="salary" value="{{ old('salary') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Employee</button>
    <a href="{{ route('employee.index') }}" class="btn btn-secondary">Cancel</a>
</form>
</div>
@endsection