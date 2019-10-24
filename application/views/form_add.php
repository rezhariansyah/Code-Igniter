<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><a href="<?php echo site_url('home/') ?>">Back home</a> </h1>
    <h1>Add Book</h1>
    <form method="POST">
        <div>
            <label>Title</label>
            <input type="text" name="title"><br>
            <label>Harga</label>
            <input type="number" name="price"><br>
            <label>Url</label>
            <input type="text" name="url">
        </div><br>
        <div>
            <label>Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        
        <input type="submit" value="Add">
    </form>
</body>
</html>