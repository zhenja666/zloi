<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cписок дел</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/csss.css">
</head>
<body>
    <div class="container">
        <h1>Cписок дел</h1>
        <form action="/add.php" method="POST" >
            <input type="text" name="task" placeholder="нужно сделать" class="form-control"><br>
            <button type="submit" name="sendTask" class="btn btn-primary">добавить</button>
        </form>
        <?php
        require 'config.php';
        echo '<ul>';
        // ORDER BY `id` DESC СОРТИРОВКА В ОБРАТНОМ НАПРАВЛЕНИИ
        $query = $pdo->query('SELECT * FROM `taskkk` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_OBJ)){
            echo '<li><b>'.$row->task.'</li><a href="/delete.php?id='.$row->id.'"><button id="qqq">удалить</button></a><b>';

        }
        echo '</ul>';
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="formMail.js"></script> 
</body>
</html>
