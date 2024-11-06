@extends('layouts.web')

@section('content')


<h1 style="text-align: center;">Add New Student</h1>

<div style="text-align: center;" class="container">
    <form action="{{'add-student'}}" method="post" class="form-control">
        @csrf

        <div style="margin:10px;">

            <label class="form-label">Name :</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name"><br>

        </div>
        <div style="margin:10px;">

            <label class="form-label">Father's Name :</label>
            <input type="text" class="form-control" name="father_name" placeholder="Enter Father's Name"><br>
        </div>
        <div style="margin:10px;">

            <label class="form-label">Date of Birth :</label>
            <input type="date" class="form-control" name="dob"><br>
        </div>

        <div style="margin:10px;">

            <label class="form-label">Class :</label>
            <select name="class" class="form-select">
                <option value="XI">XI</option>
                <option value="XII">XII</option>

            </select>
        </div>

        <br>
        <div style="margin:10px;">
            <label class="form-label">Stream :</label>
            <select name="stream" class="form-select">
                <option value="Arts">Arts</option>
                <option value="Commerce">Commerce</option>
                <option value="Medical">Medical</option>
                <option value="Non-Medical">Non-Medical</option>

            </select>
        </div>

        <div style="margin:10px;">
            <button type="submit" name="submit" class="btn btn-success">Submit</button>


        </div>


    </form>
</div>




@endsection