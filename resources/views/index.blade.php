<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Šeit būs grāmatu saraksts</h1>
</head>
<body>
    <?php
        $books = [
            'Karlsions' ,
            'Lācuplēsis' ,
            'Matemātika' ,
        ];

        echo "<ul>";
        foreach ($books as $book) {
            echo "<li> . $book . </li>";
        }
        echo "</ul>";



    ?>

</body>
</html>