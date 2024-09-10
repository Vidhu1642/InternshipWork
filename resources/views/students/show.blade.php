@extends('layout')

@section('title', 'Student Details')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Student Details</h3>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Email:</strong> {{ $student->email }}</p>
            <p><strong>Mobile Number:</strong> {{ $student->mobile_number }}</p>
            <p><strong>Enrollment Number:</strong> {{ $student->enrollment_number }}</p>
            <p><strong>Parent Name:</strong> {{ $student->parent_name }}</p>
            <p><strong>Parent Email:</strong> {{ $student->parent_email }}</p>
            <p><strong>Parent Phone:</strong> {{ $student->parent_phone }}</p>
        </div>
    </div>
@endsection
