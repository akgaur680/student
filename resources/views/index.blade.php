@extends('layouts.web')

@section('content')

<h1 style="text-align: center;">Student Details</h1>
<a href="{{'add-student'}}" class="btn btn-primary m-3" style="text-align:left;">Add New Student</a>

<div class="container text-center">

    <table Class="table table-bordered">
        <tr>
            <th>Sr. No.</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Date of Birth</th>
            <th>Class</th>
            <th>Stream</th>
            <th>Operations</th>
        </tr>
        @if($student->isEmpty())
        <tr>
            <td colspan="5" Class="fw-bold">No Record Found</td>
        </tr>
        @else
        @foreach ($student as $students )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$students['name']}}</td>
            <td>{{$students['father_name']}}</td>
            <td>{{$students['dob']}}</td>
            <td>{{$students['class']}}</td>
            <td>{{$students['stream']}}</td>
            <td>
                <a href="{{'/edit/'.$students['id']}}" class="btn btn-primary d-inline-block mr-2">Edit</a>
                <form action="{{ route('students.delete', $students['id']) }}" method="post" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" Class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
        @endif
    </table>
</div>


@endsection