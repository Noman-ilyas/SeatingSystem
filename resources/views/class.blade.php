@extends('layout')

@section('classes')
<div class="container">
    <form action="" method="POST">
        <div class="row">
                <div class="col-lg-4 mt-2 pt-2">
                    <a href="/addStudent" class="btn btn-success mt-2 pt-2" style="width: 15rem;height: 3rem;color: white;" name="class_one" value="One">Add Student of Class One</a>
                    <a href="/addStudent" class="btn btn-success mt-2 pt-2" style="width: 15rem;height: 3rem;color:white;" name="class_two" value="Two">Add Student of Class Two</a>
                    <a href="/addStudent" class="btn btn-success mt-2 pt-2" style="width: 15rem;height: 3rem;color: white" name="class_three" value="Three">Add Student of Class Three</a>
                </div>

                <div class="col-lg-4 mt-2 pt-2">
                    <a href="/addStudent" class="btn btn-success mt-2 pt-2" style="width: 15rem;height: 3rem;color: white" name="class_four" value="Four">Add Student of Class Four</a>
                    <a href="/addStudent" class="btn btn-success mt-2 pt-2" style="width: 15rem;height: 3rem;color: white" name="class_five" value="Five">Add Student of Class Five</a>
                    <a href="/addStudent" class="btn btn-success mt-2 pt-2" style="width: 15rem;height: 3rem;color: white" name="class_six" value="Six">Add Student of Class Six</a>
                </div>

                <div class="col-lg-4 mt-2 pt-2">
                    <a href="/addStudent" class="btn btn-success mt-2 pt-2" style="width: 15rem;height: 3rem;color: white" name="class_seven" value="Seven">Add Student of Class Seven</a>
                    <a href="/addStudent" class="btn btn-success mt-2 pt-2" style="width: 15rem;height: 3rem;color: white" name="class_eight" value="Eight">Add Student of Class Eight</a>
                    <a href="/addStudent" class="btn btn-success mt-2 pt-2" style="width: 15rem;height: 3rem;color: white" name="class_nine" value="Nine">Add Student of Class Nine</a>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <button type="submit" class="btn btn-success mt-5 pt-2" style="width: 15rem;height: 3rem" name="class_new" value="New">Add New Class</button>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </form>
</div>
@endsection
