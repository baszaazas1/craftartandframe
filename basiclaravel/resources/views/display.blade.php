@extends('master')
@section('title','Datatables : Laravel')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datatables : Laravel</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
<body>
    

    <div class="container">
        <h1 align="center">Laravel</h1>
        <table class="table table-bordered" id="table">
           <thead>
              <tr>
                 <th>ID</th>
                 <th>First Name</th>
                 <th>Last Name</th>
              </tr>
           </thead>
        </table>
</div>

    <script type="text/javascript">
        $(function() {
               $('#table').DataTable({
               ajax: '{{ url('index') }}',
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'fname', name: 'fname' },
                        { data: 'lname', name: 'lname' }
                     ]
            });
         });
    </script>
</body>
</html>
@endsection