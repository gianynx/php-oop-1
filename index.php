<?php
include __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie(1, 'Il Padrino', 'The Godfather', 'en', '1972-03-24', '9.2', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg'),
    new Movie(2, 'Via Col Vento', 'Gone With The Wind', 'en', '1939-12-15', '8.6', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg'),
    new Movie(3, 'Psycho', 'Psycho', 'en', '1960-06-16', '9.4', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg'),
    new Movie(4, 'Gravity', 'Gravity', 'en', '2013-08-28', '7.8', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg'),
    new Movie(5, 'Toy Story - Il Mondo Dei Giocattoli', 'Toy Story', 'it', '1995-11-19', '9.0', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mGnOtBmpkQ5CndwxeIKDUqkUkre.jpg'),
    new Movie(6, 'Pulp Fiction', 'Pulp Fiction', 'de', '1994-19-14', '9.2', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg'),
    new Movie(7, 'Forrest Gump', 'Forrest Gump', 'fr', '1994-06-23', '8.8', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg'),
    new Movie(8, 'Guerre Stellari', 'Star Wars', 'en', '1977-05-25', '8.6', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fVqKwpvobwWy0P1UImZWIDuw4RI.jpg'),
    new Movie(9, "E.T. - L'Extra Terrestre", 'E.T. The Extra-Terrestrial', 'en', '1982-05-26', '7.9', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qKMqJCldp5fPsuv6Vb0RbKY9K8U.jpg'),
    new Movie(10, 'Il Silenzio Degli Innocenti', 'The Silence Of The Lambs', 'en', '1991-01-30', '8.6', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8P4fZhbiqfeMk2btOeXLu0AKvBl.jpg')
];

// var_dump($movies);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP - 1</title>
</head>
<body>
    <ul>
        <?php foreach($movies as $movie) { ?>
            <li>
                <?php echo $movie->title ?>
            </li>
        <?php } ?>
    </ul>
    
</body>
</html>