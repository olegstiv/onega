<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="/comments" method="post">
        Имя:
        <input type="text" name="name"><br>
        Комментарий: <br>
        <textarea name="text"></textarea> <br>
        <input type="submit" value="asdfasdf">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />



    </form>
</body>
</html>