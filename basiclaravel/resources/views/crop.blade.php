<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Crop Upload</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
</head>
<body><div id="upload-demo"></div>
        <div class="container">
                <div class="panel panel-info">
                  <div class="panel-heading">Cropping and Upload</div>
                  <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                
                                </div>
                                <div class="col-md-4" style="padding:5%;">
                                <strong>Select image to crop:</strong>
                                <input type="file" id="image">
                                <button class="btn btn-primary btn-block upload-image" style="margin-top:2%">Upload Image</button>
                                </div>
                                <div class="col-md-4">
                                <div id="preview-crop-image" style="background:#9d9d9d;width:300px;padding:50px 50px;height:300px;"></div>
                            </div>
                        </div>
                  </div>
                </div>
        </div>    
</body>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var resize=$('#upload-demo').croppie({
        enableExif:true,
        enableOrientation:true,
        viewport:{
            width:200,
            height:150
        },
        boundary:{
            width:1000,
            height:1000
        }
    });
    $('#image').on('change',function(){
        var reader = new FileReader();
        reader.onload=function(e){
            resize.croppie("bind",{
                url:e.target.result
            });
        }
        reader.readAsDataURL(this.files[0]);
    });
    $('.upload-image').on('click',function(){
        resize.croppie('result',{
            type:'canvas',
            size:'viewport'
        }).then(function(img){
            $.ajax({
                url:"{{route('crop')}}",
                type:'POST',
                data:{"image":img},
                success:function(data){
                    result='<img src="'+img+'"/>';
                    $('#preview-crop-image').html(result);
                }
            })
        });
    });
</script>

</html>