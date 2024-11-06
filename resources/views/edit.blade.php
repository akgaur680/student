@extends('layouts.web')

@section('content')

<h1 style="text-align: center;">Edit Student</h1>

<div style="text-align: center;" class="container">
    <form action="{{route('student.update',$student['id'])}}" method="post" class="form-control">
        @csrf
        @method('PUT')
        <div style="margin:10px;">

            <label class="form-label">Name :</label>
            <input type="text" class="form-control" name="name" value="{{$student['name']}}" placeholder="Enter Name"><br>

        </div>
        <div style="margin:10px;">

            <label class="form-label">Father's Name :</label>
            <input type="text" class="form-control" name="father_name" value="{{$student['father_name']}}" placeholder="Enter Father's Name"><br>
        </div>
        <div style="margin:10px;">

            <label class="form-label">Date of Birth :</label>
            <input type="date" class="form-control" value="{{$student['dob']}}" name="dob"><br>
        </div>

        <div style="margin:10px;">

            <label class="form-label">Class :</label>
            <select name="class" class="form-select">
                <option value="XI" {{$student['class']=='XI'? 'selected':''}}>XI</option>
                <option value="XII" {{$student['class']=='XII'? 'selected':''}}>XII</option>

            </select>
        </div>

        <br>
        <div style="margin:10px;">
            <label class="form-label">Stream :</label>
            <select name="stream" class="form-select">
                <option value="Arts" {{$student['stream']=='Arts'? 'selected':''}}>Arts</option>
                <option value="Commerce" {{$student['stream']=='Commerce'? 'selected':''}}>Commerce</option>
                <option value="Medical" {{$student['stream']=='Medical'? 'selected':''}}>Medical</option>
                <option value="Non-Medical" {{$student['stream']=='Non-Medical'? 'selected':''}}>Non-Medical</option>

            </select>
        </div>

        <div style="margin:10px;">
            <button type="submit" name="submit" class="btn btn-success">Submit</button>


        </div>


    </form>
</div>

@endsection