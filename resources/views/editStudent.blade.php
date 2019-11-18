@extends('layout')
@section('editStudent')
    <div class="employee-form">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form action="/admin_viewstudent/{{$student->id}}" style="margin-top: 10rem" method="POST" class="col-lg-4">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <h4 class="text-center" style="color: #2a88bd">Edit Student</h4>
                    <input type="hidden" id="id" name="id" >
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fname" id="fname" class="form-control" value="{{$student->fname}}" required="required">
                    </div>
                    <div class="form-group">
                        <input type="number" name="class" id="class" class="form-control" value="{{$student->class}}" required="required">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id=submit" name="submit" class="btn btn-primary">Edit Student</button>
                        <a href="/viewStudents" class="btn btn-success" name="back" value="Back">Back</a>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
@endsection
