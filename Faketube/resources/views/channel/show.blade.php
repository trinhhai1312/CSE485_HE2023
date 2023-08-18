@extends('layouts.base')
@section('title')
    Details
@endsection
@section('main-content')
    <div class="container">
        <a class="btn btn-primary" href="{{route('home')}}">Return Homepage</a>
        <div class="mb-3 col">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$employee->name}}" readonly >
        </div>

        <div class="mb-3 col">
            <label for="address" class="form-label">Address</label>
            <input type="text" id="address" name="address" class="form-control" value="{{$employee->address}}" readonly>
        </div>

        <div class="mb-3 col">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" id="salary" name="salary" class="form-control" value="{{$employee->salary}}" readonly>
        </div>

    </div>
@endsection
