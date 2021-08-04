<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <form method="POST" action="/storesCreate">
    @csrf
         
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="code">Code:</label>
        <input type="number" id="code" name="code">
        <label for="base_url">Url:</label>
        <input type="text" id="base_url" name="base_url">
        <label for="description">Description:</label>
        <input type="text" id="description" name="description">
        <Button>Create</Button>

    </form>
    
</body>
</html>