
@extends('layout')

@section('viewStudents')
    <h1 style="text-align: center;color: green;margin-left: 100px">Students Information</h1>
    <table class="table table-striped table-bordered table-hover text-center" style="margin-left: 250px;width: 80%">
        <thead>
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Class</th>
            <th colspan="2" style="text-align: center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($student as $std)
            <tr>
                <td> {{ $std->id}}  </td>
                <td> {{ $std->name}}  </td>
                <td> {{ $std->fname}}  </td>
                <td> {{ $std->class}}  </td>
                <td>
                    <a href="/admin_viewstudent/{{$std->id}}/edit" class="btn btn-primary" name="update" value="Update">Update</a>
                </td>
                <td>
                    <form class="delete" action="/admin_viewstudent/{{$std->id}}/delete" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger" name="delete" value="Delete">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <script>
            $(".delete").on("submit", function(){
                return confirm("Do you want to delete this item?");
            });
        </script>
        </tbody>
    </table>
@endsection
