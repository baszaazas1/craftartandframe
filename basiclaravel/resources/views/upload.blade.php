<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Image</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <br><br>
    <form method="POST" action="{{url('/upload')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <table class="table">
                <tr>
                    <td width="40%" align="right"><label> เลือกไฟล์เพื่ออัพโหลด</label></td>
                    <td width="30"><input  type="file" name="select_image"></td>
                    <td width="30%" align="left"> <input type="submit" name="upload" class="btn btn-primary" value="อัพโหลด"></td>
                </tr>

                <tr>
                    <td width="40%" align="right"></td>
                    <td width="30" ><span class="text-muted">jpg, jpeg, png</span></td>
                    <td width="30%" align="left"></td>
                </tr>
            </table>
        </div>
    </form>
    </div>

</body>
</html>
