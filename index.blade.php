<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>larave</title>
</head>
<body>
    <form action="submit" method="POST">
    @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="adress">Address:</label><br>
        <input type="text" id="address" name="address">
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>
