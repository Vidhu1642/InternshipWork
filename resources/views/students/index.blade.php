@extends('layout')

@section('content')
    <h1>Students List</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <a href="{{ route('students.create') }}">Add New Student</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date of Birth</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->dob }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}">View</a>
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
