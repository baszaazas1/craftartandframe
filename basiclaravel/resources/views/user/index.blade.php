@extends('master')
@section('title','จัดการฐานข้อมูล')
@section('content')
<h1 align="middle">Show Data</h1>
    <div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
        </div>
    @endif
        <div class="row">
            <div class="col-md-12>
                <div class="col-md-12">
                    <a href="{{route('user.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a>
                </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                        @foreach($users as $row)
                        <tr>
                            
                            <td>{{$row['id']}}</td>
                            <td>{{$row['fname']}}</td>
                            <td>{{$row['lname']}}</td>
                            <td><a href="{{action('UsersController@edit',$row['id'])}}" class="btn btn-primary">Edit</a></td>
                            <td>
                            <form method="post" class="delete_form" action="{{action('UsersController@destroy',$row['id'])}}"> 
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                </table>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.delete_form').on('submit',function(){

                if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")){
                    return true;
                }else{
                    return false;
                }
        });
    });
    </script>

@stop