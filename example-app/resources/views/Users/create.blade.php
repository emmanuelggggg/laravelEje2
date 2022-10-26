<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <h1>HOla</h1>

    <form action="http://127.0.0.1:8000/users/" method="POST" enctype="multipart/form-data">
        @csrf 
        
        <label for="">nombre</label>
        <input type="text" name="nombre">
        <label for="">email</label>
        <input type="email" name="email">

        <button type="submit" name="">Guardar</button>
    </form>
</body>
</html>