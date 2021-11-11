<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_star_wars.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Star Wars:Solo</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container">


                <a class="navbar-brand" href="#">MOVIES</a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#target_collapse">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse" id="target_collapse">
                    <span class="navbar-text"></span>
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">About</a></li>
                    </ul>
                    <form>
                        <div class="search_box">
                            <input type="text" class="search-txt" placeholder="Search Movie...">
                            <a href="#" class="search-btn"><i class="fas fa-search"></i> </a>
                        </div>
                    </form>
                </div>
            </div>

        </nav>
    </header>

    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Star Wars: Solo</h1>
                <p class="lead">O Poveste Star Wars este un film american SF din 2018<br>
                    regizat de Phil Lord, Christopher Miller și Ron Howard.<br> Se concentrează asupra
                    personajului Han Solo și are loc după evenimentele din <br>filmul Rogue One dar înainte
                    de cele din filmul original din 1977. </p>
                <h2>Regizor: Ron Howard</h2>
                <h3>Cast</h3>

                <a href="#"><img src="image_solo/cast1.png" alt=""></a>
                <a href="#"><img src="image_solo/cast2.png" alt=""></a>
                <a href="#"><img src="image_solo/cast3.png" alt=""></a>
                <a href="#"><img src="image_solo/cast4.png" alt=""></a>
                <a href="#"><img src="image_solo/cast5.png" alt=""></a>
            </div>

            <div class="col">
                <img class="banner" src="image_solo/banner.png" alt="">
            </div>
        </div>


        <div class="row">
            <div class="col">
                <h1>Trailer</h1>
                <iframe width="1100" height="600" src="https://www.youtube.com/embed/jPEYpryMp2s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </div>

    <!--Details-->

    <div class="jumbotron jumbotron-fluid">

        <div class="details">

            <h1>Details</h1>

            <p>
                <?php
                $off_site = 'Official Site;';
                $country = 'USA;';
                $language = 'Engleza;';
                $release_date = '25 Mai 2018 Usa;';
                $filming_location = 'Pinewood Studios, Iver Heath, Buckinghamshire, England, UK;';
                $production = ' Lucasfilm, Walt Disney Pictures, Allison Shearmur Productions; ';


                echo "<h2> Official Sites: </h2> <a href=https://www.starwars.com/films/solo> $off_site</a> <br>";
                echo "<h4> Tara: </h4> <a href=https://www.usa.gov/#tpcs> $country</a> <br>";
                echo "<h5> Limba: </h5> <div class=whitout_a> $language </div>  <br>";
                echo "<h6> Data de lansare: </h6> <div class=whitout_a> $release_date </div> <br>";
                echo "<h3> Locatiile filmarilor: </h3> <a href=https://www.pinewoodgroup.com/> $filming_location</a> <br>";
                echo "<div class=production> Productia: </div> <a> $production</a>";

                ?>
            </p>
        </div>

    </div>

    <!--Box Office-->

    <div class="jumbotron jumbotron-fluid">

        <div class="box_office">

            <h1>Box Office</h1>

            <p>
                <?php
                $buget = '$275,000,000 (estimated)';
                $opening_weekend_usa = '$84,420,489, 27 May 2018';
                $gross_usa = '$213,767,512';
                $worldwide_gross =  '$392,924,807';
                $total = '$691,112,808‬';


                echo "<h2> Buget: </h2> <a href=https://bit.ly/2Vj4hlO>  $buget</a> <br>";
                echo "<h4> Venitul brut din lansare: </h4> <a href=https://bit.ly/2Z9oQCk>  $opening_weekend_usa</a> <br>";
                echo "<h5> Venitul brut din USA: </h5> <a href=https://bit.ly/31gjuI1>  $gross_usa </a>  <br>";
                echo "<h6> Venitul brut din toata lumea: </h6> <a href=https://bit.ly/2YAdZlL>  $worldwide_gross </a> <br>";
                echo "<h3> Venitul brut TOTAL: </h3> <a href=https://bit.ly/2YzGqjw>  $total </a> <br>";
               

                ?>
            </p>
        </div>

    </div>






    <footer>
        <div class=" copy lead footer-copyright text-uppercase text-center py-3">© 2020 Copyright:
            <a class="lead" href="#"> on-movie-film</a>
        </div>
    </footer>

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>