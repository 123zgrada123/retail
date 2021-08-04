<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/productCreate">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="shop">Shop:</label>
    <input type="text" id="shop" name="shop">
    <label for="sku">Sku:</label>
    <input type="number" id="sku" name="sku">
    <label for="description">Description</label>
    <input type="text" id="description" name="description">
    <label for="price">Price:</label>
    <input type="number" id="price" name="price">
    <label for="url">Url:</label>
    <input type="text" id="url" name="url">
    <button>Create</button>
   
    

    </form>

</body>
</html>