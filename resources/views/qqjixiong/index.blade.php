<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商城首页</title>
</head>
<body>
        <h1><center>qq测试吉凶</center></h1>
        <table>
                <tr>
                    <td>请输入qq号</td>
                    <td><input type="text" name="q_name" id=""></td>
                </tr>
                <tr>
                    <td><input type="button" value="执行"></td>
                    <td></td>
                </tr>
            <tr>
                <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
            </tr>
        </table>



</body>
</html>
<script src="./jquery.js"></script>
<script>
    $(document).on("click","input[type='button']",function(){
       var q_name = $("input[name='q_name']").val();
       var url = "{{url('qqjixiong/store')}}";
       var data = {q_name,q_name};
       $.ajax({
           url : url,
           type : "post",
           data : data,
           dataType:"json",
           success:function(res){
             $("textarea").text(res.data);
           }
       })
    })


</script>
