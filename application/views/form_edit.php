<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit form</title>
</head>
<body>
    <h1><a href="<?php echo site_url('home/') ?>">Back home</a> </h1>
    <h1>Edit Form</h1>
    <form method="POST">
        <div>
            <label>Title</label>
            <input type="text" name="title" value="<?php echo $book['title']; ?>"><br>
            <label>Harga</label>
            <input type="number" name="price" value="<?php echo $book['price']; ?>"><br>
            <label>Url</label>
            <input type="text" name="url" value="<?php echo $book['url']; ?>">
        </div><br>
        <div>
            <label>Description</label>
            <textarea name="description" id="" cols="30" rows="10">
                <?php echo $book['description']; ?>
            </textarea>
        </div>
        
        <input type="submit" value="Edit">
    </form>
</body>
</html>