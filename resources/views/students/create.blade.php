@extends('layout')

@section('title', 'Add New Student')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Add New Student</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mobile_number" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                </div>
                <div class="mb-3">
                    <label for="enrollment_number" class="form-label">Enrollment Number</label>
                    <input type="text" class="form-control" id="enrollment_number" name="enrollment_number" required>
                </div>
                <div class="mb-3">
                    <h5>Parent Details</h5>
                    <div class="mb-3">
                        <label for="parent_name" class="form-label">Parent Name</label>
                        <input type="text" class="form-control" id="parent_name" name="parent_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="parent_email" class="form-label">Parent Email</label>
                        <input type="email" class="form-control" id="parent_email" name="parent_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="parent_phone" class="form-label">Parent Phone</label>
                        <input type="text" class="form-control" id="parent_phone" name="parent_phone" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
@endsection
