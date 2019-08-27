<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>อาหารไทย</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style media="screen">
        .food{
            width: 370px;
            height: 300px;
        }
    </style>
</head>
<body>
        <div class="container">
                <div class="row">
                    <div id="results"></div>
                </div>
            <center><div class="loading"><img src="https://media1.giphy.com/media/y1ZBcOGOOtlpC/200.gif" alt=""></div></center>
        </div>
</body>

<script type="text/javascript">
    var page=1; //4x1=4
    load_more(page);
    $(window).scroll(function(){
        if($(window).scrollTop()+$(window).height()>=$(document).height()){
            page++;
            load_more(page);
        }
    })
    function load_more(page){
        $.ajax({
            url:'?page='+page,
            type:'GET',
            dataType:'html',
            beforeSend:function(){
                $('.loading').show();
            }
        }) .done(function(data){
                if(data.length==0){
                    $('.loading').html('<b>หมด</b>');
                    return;
                }
                $('.loading').hide();
                $('#results').append(data);
            });
    }
</script>
</html>