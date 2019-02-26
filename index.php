<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- stylesheets -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Pokemon Project</title>
  </head>
  <body>
    <img src="pokemon.png" class="img-fluid" style="width: 100%;">
      <?php include 'navbar.html' ?>
	  <div class="container-fluid">
    <div class="row justify-content-around">
          <?php
          $url = "https://intern-pokedex.myriadapps.com/api/v1/pokemon?page=1";
          $ch = curl_init();
          curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch,CURLOPT_URL, $url);
          $result = curl_exec($ch);
          curl_close($ch);
          $json = json_decode($result, true);
          foreach($json['data'] as $pokemon) {
			echo '<div class="col-md-3 text-center mx-auto p-2 m-1 m-md-2 bg-dark text-light rounded">';
            echo '<h3>'. $pokemon['name'] .'</h3><br>';
			echo '<img src="'. $pokemon['image'] . '" class="img-fluid" id="poke-img"><br></div>';
          }
            ?>
     </div>
	 </div>
   
   <div class="container-fluid sticky-bottom bg-dark text-light" id="footer">
   <h1>Footer for page navigation</h1>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
