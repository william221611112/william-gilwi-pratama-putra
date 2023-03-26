<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=b893c632&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container_new">
<div class="container">
<div class="row mt-3 text-center">
  <div class="col text-danger">
<h1>MOVIE TARENDING</h1>
</div>
</div>   
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="1.jpg" class="card-img-top" height="300px" >
      <div class="card-body bg-dark text-white text-center" style="height: 15rem;">
        <h5 class="card-title">NontonTonight You’re Sleeping with Me (2023)BIODATA </h5>
        <p class="card-text text-danger">Drama, Romance, Poland, WEBRip, 2023, 1080</p>
        <center>
        <a href="https://www.youtube.com/watch?v=82I1ErFD63U" class="btn btn-success"  style="margin-bottom: 10px;">TRAILER</a> <br>
        <a href="https://tv.lk21official.live/tonight-youre-sleeping-with-me-2023/" class="btn btn-danger">NONTON MOVIE</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="2.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white text-center" style="height: 15rem;">
        <h5 class="card-title">Waltair Veerayya (2023)Film Subtitle Indones</h5>
        <p class="card-text text-danger">Action, Drama, India, WEBRip, 2023, 1080</p>
        <center>
        <a href="https://www.youtube.com/watch?v=1MHN4vwz4iQ" class="btn btn-success" style="margin-bottom: 10px;">TRAILER</a> <br>
        <a href="https://tv.lk21official.live/waltair-veerayya-2023/" class="btn btn-danger">NONTON MOVIE</a>
        </center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="3.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white text-center "style="height: 15rem;">
        <h5 class="card-title">NontonThe Point Men (2023)Film Subtitle Indonesi</h5>
        <p class="card-text text-danger">Action, Drama, Thriller, South Korea, WEBDL, 2023, 1080</p>
        <center>
        <a href="https://www.youtube.com/watch?v=pnr3wcCsNW0" class="btn btn-success"  style="margin-bottom: 10px;">TRAILER</a> <br> 
        <a href="https://tv.lk21official.live/the-point-men-2023/" class="btn btn-danger">NONTON MOVIE</a>
        </center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="4.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white text-center" style="height: 15rem;">
        <h5 class="card-title">The Reading (2023)</h5>
        <p class="card-text text-danger">Thriller, United States, WEBDL, 2023, 1080</p>
        <center>
        <a href="https://www.youtube.com/watch?v=QudfA-FDocA" class="btn btn-success"  style="margin-bottom: 10px;">TRAILER</a> <br> 
        <a href="https://tv.lk21official.live/the-reading-2023/" class="btn btn-danger">NONTON MOVIE</a>
        </center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white text-center "style="height: 15rem;">
        <h5 class="card-title">We Have a Ghost (2023)</h5>
        <p class="card-text text-danger">Adventure, Comedy, Family, United States, WEBDL, 2023, </p>
        <center>
        <a href="https://www.youtube.com/watch?v=82I1ErFD63U" class="btn btn-success"  style="margin-bottom: 10px;">TRAILER</a> <br> 
        <a href="https://tv.lk21official.live/we-have-a-ghost-2023/" class="btn btn-danger">NONTON MOVIE</a>
        </center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="6.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white text-center "style="height: 15rem;">
        <h5 class="card-title">NontonDie Hart: The Movie (2023)</h5>
        <p class="card-text text-danger">Action, Comedy, United States, WEBDL, 2023, 1080</p>
        <center>
        <a href="https://www.youtube.com/watch?v=TKCseQ-b6GM" class="btn btn-success"  style="margin-bottom: 10px;">TRAILER</a> <br>
        <a href="https://tv.lk21official.live/die-hart-the-movie-2023/" class="btn btn-danger">NONTON MOVIE</a>
        </center>
      </div>
    </div>
  </div>
    </div>
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
