<!doctype html>
<html lang="en">
<style type="text/css">

    .login {
        height: 180px;
        width: 230px;
        margin: ;
        padding: 10px;
        border: black;
    }

    .login input {
        padding: 5px;
        margin: 5px;
    }

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index1.php" method="post">
    <div class="login">
        <h1>Product Discount Calculator</h1>
        Product Description: <input type="number" name="product"/><br>
        List Price: <input type="number" name="list"/><br>
        Discount Percent: <input type="number" name="discount"/><br>
        <button type="submit">Calculate Discount</button>
    </div>
</form>

</body>
</html>