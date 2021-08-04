<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/productUpdate">
    @csrf
    @method('PUT')
    <label for="sku">Sku:</label>
    <input type="number" id="sku" name="sku">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="shop">Shop:</label>
    <input type="text" id="shop" name="shop">
    <label for="skuNew">Sku:</label>
    <input type="number" id="skuNew" name="skuNew">
    <label for="description">Description</label>
    <input type="text" id="description" name="description">
    <label for="price">Price:</label>
    <input type="number" id="price" name="price">
    <button>Update</button>
  
    

    </form>

</body>
</html>