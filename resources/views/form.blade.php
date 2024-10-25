<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
</head>
<body>
    
    <form method="post" action="/upload" enctype="multipart/form-data">
        @csrf
        <input type="file" name="uploadinput" accept="image/*">
        <input type="submit">
    </form>

</body>
</html>

<!--start from 25.00 of CH-18-->