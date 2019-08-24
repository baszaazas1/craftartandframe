@extends('master')
@section('title','Search')
@section('content')
<h1 align="middle">Show Data</h1> <br><br>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
            <div align="right">
                <a href="{{route('user.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a> <br><br>
                <input type="text" name="search" id="search" placeholder="ค้นหาข้อมูล" class="form-control" />
                <br>
                <h3 align="right">จำนวนข้อมูล : <span id="total_records"></span></h3>
            </div>
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>

                    </tr>
                </thead> 
                <tbody></tbody>      
                </table>

                
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            fetch_data();
        });

        $(document).on('keyup','#search',function(){
            var query = $(this).val();
            fetch_data(query);
        });

        function fetch_data(query = '')
        {
            $.ajax({
                url:"{{ route('user.action') }}",
                method: 'GET',
                data:{query:query},
                dataType: 'json',
                success:function(data)
                    {
                        $('tbody').html(data.table_data);
                        $('#total_records').text(data.total_data);
                    }
            });
        }

    </script>
@endsection


