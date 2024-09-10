@extends('layout')

@section('title', 'Edit Student')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit Student</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="mobile_number" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{ $student->mobile_number }}" required>
                </div>
                <div class="mb-3">
                    <label for="enrollment_number" class="form-label">Enrollment Number</label>
                    <input type="text" class="form-control" id="enrollment_number" name="enrollment_number" value="{{ $student->enrollment_number }}" required>
                </div>
                <div class="mb-3">
                    <h5>Parent Details</h5>
                    <div class="mb-3">
                        <label for="parent_name" class="form-label">Parent Name</label>
                        <input type="text" class="form-control" id="parent_name" name="parent_name" value="{{ $student->parent_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="parent_email" class="form-label">Parent Email</label>
                        <input type="email" class="form-control" id="parent_email" name="parent_email" value="{{ $student->parent_email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="parent_phone" class="form-label">Parent Phone</label>
                        <input type="text" class="form-control" id="parent_phone" name="parent_phone" value="{{ $student->parent_phone }}" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update Student</button>
            </form>
        </div>
    </div>
@endsection
