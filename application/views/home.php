<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Book management</h1>

    <?php foreach ($bookList as $key => $book): ?>
        <div class="bookList">
            <h2>
                <a href="<?php echo site_url('home/detail/').$book['url']; ?>">
                <?php echo $book['title']; ?></a>
            </h2>
            <p><?php echo $book['price']; ?></p>
            <p><?php echo $book['description']; ?></p>
        </div>
    <?php endforeach; ?>
    
</body>
</html>