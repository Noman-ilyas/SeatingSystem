@extends('layout')
@section('addStudent')
    <div class="employee-form">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form action="/addStudent" style="margin-top: 10rem" method="POST">
                    {{ csrf_field() }}
                    <h4 class="text-center" style="color: green">Student Form</h4>
                    <input type="hidden" id="id" name="id" >
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Father Name" required="required">
                    </div>
                    <div class="form-group">
                        <input type="number" name="class" id="class" class="form-control" placeholder="Class" required="required">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" id=submit" name="submit" class="btn btn-success">Add Student</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
@endsection
