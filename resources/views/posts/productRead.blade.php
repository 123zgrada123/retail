<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/readProducts">
    @csrf
    <label for="shop">Shop:</label>
    <input type="text" id="shop" name="shop">
    <button>Read</button>
    </form>
</body>
</html>