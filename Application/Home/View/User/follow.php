<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    我关注的：
    <volist name='list' id='vo'>
        <div>
            {$vo.fid}{$vo.username}
        </div>
        
    </volist>
</body>
</html>