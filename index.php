<?php
class Movie
{
    public $poster;
    public $title;
    public $genre;
    public $director;
    public $rating = 0;

    function __construct($poster, $title, $genre, $director)
    {
        $this->poster = $poster;
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
       
        
    }


    function vote()
    {
        if($this->rating == 0){
            return $this->rating = rand(1,5);
        }
    }
}

$movie1 = new Movie(
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/5uCQOswAMkOqUZiNzOxvckw59e3.jpg',
    'Matrix',
    'Fantascienza',
    'The Wachowskis'
);
$movie1->vote();


$movie2 = new Movie(
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/ckcBKTXdh67mwDFBTDmmvxbW71l.jpg',
    'Top Gun',
    'Azione',
    'Tony Scott'
);
$movie2->vote();

$movie3 = new Movie(
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/igKhFQTxyB5WKjH7gdN2R9RWOIj.jpg',
    'Equilibrium',
    'Azione, fantascienza',
    'Kurt Wimmer'
);
$movie3->vote();

$movie4 = new Movie(
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/vODOVn29fr0nLF9MVfpfKDcxuXF.jpg',
    'Metropolis',
    'Fantascienza',
    'Fritz Lang'
);
$movie4->vote();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Movies</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container d-flex justify-content-between py-5">
    <div class="card" style="width: 18rem;">
  <img src="<?= $movie1->poster ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title"><?=$movie1->title?></h1>
    <p class="card-text">Director: <?= $movie1->director?></p>
    <p>Genere: <?= $movie1->genre?></p>
    <span>Rating: <?= $movie1->rating?></span>   
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="<?= $movie2->poster ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title"><?=$movie2->title?></h1>
    <p class="card-text">Director: <?= $movie2->director?></p>
    <p>Genere: <?= $movie2->genre?></p>
    <span>Rating: <?= $movie2->rating?></span>   

  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="<?= $movie3->poster ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title"><?=$movie3->title?></h1>
    <p class="card-text">Director: <?= $movie3->director?></p>
    <p>Genere: <?= $movie3->genre?></p>
    <span>Rating: <?= $movie3->rating?></span>   

  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="<?= $movie4->poster ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title"><?=$movie4->title?></h1>
    <p class="card-text">Director: <?= $movie4->director?></p>
    <p>Genere: <?= $movie4->genre?></p>
    <span>Rating: <?= $movie4->rating?></span>   

  </div>
</div>
    </div>

</body>

</html>