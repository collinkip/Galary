<!DOCTYPE html>
<html lang="en">
<head>
    <title>Animation Galary</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h3>My Records</h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#sony">Sony</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#netflix">Netflix</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#disney">Disney</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              
            </ul>
            
            
          </div>
        </div>
      </nav>


      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/sony+.jpg" class="d-block w-100" alt="sony">
            <div class="carousel-caption d-none d-md-block">
              <h2>Sony originals</h2>
             
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/netflix+.jpg" class="d-block w-100" alt="netflix">
            <div class="carousel-caption d-none d-md-block">
              <h3>Netflix originals</h3>
            
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/disney+.jpeg" class="d-block w-100" alt="disne">
            <div class="carousel-caption d-none d-md-block">
              <h3>disney originals</h3>
            
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <a id="sony">
      <section>
          <div class="my-4">
              <div class="py-4">
                  <h2 class="text-center">Sony</h2>
              </div>
              <div class="container-fluid">
                  <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/sony1.jpg" alt="" class="img-fluid pb-3">
                  <h4 class="text-center">Hotel Transylvania 2</h4>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="images/sony2.jpg" alt="" class="img-fluid pb-3">
                <h4 class="text-center">Spiderman into the spider-verse</h4>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="images/sony3.png" alt="" class="img-fluid pb-3">
                <h4 class="text-center">The Smurfs</h4>
              </div>
            </div>
        </div>
          </div>
          
      </section>
      </a>


      <a id="netflix">
      <section>
        <div class="my-4">
            <div class="py-4">
                <h2 class="text-center">Netflix</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/netflix1.jpg" alt="" class="img-fluid pb-3">
                <h4 class="text-center">The Willloughbys</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/netflix2.jpg" alt="" class="img-fluid pb-3">
              <h4 class="text-center">Back to the outback</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/netflix3.jpg" alt="" class="img-fluid pb-3">
              <h4 class="text-center">Over the moon 2</h4>
            </div>
          </div>
      </div>
        </div>
        
    </section>
    </a>



    <a id="disney">
    <section>
        <div class="my-4">
            <div class="py-4">
                <h2 class="text-center">Disney</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/disney1.jpeg" alt="" class="img-fluid pb-3">
                <h4>Raya and the lost Dragon</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/disney2.jpg" alt="" class="img-fluid pb-3">
              <h4 class="text-center">Frozen 2</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/disney3.jpg" alt="" class="img-fluid pb-3">
              <h4 class="text-center">Moana</h4>
            </div>
          </div>
      </div>
        </div>
        
    </section>
    </a>

    <a id="contact">
    <section>
        <div class="my-4">
            <div class="py-4">
                <h2 class="text-center">Contact Us</h2>
            </div>

            <div class="w-50 m-auto">
                <form action="about.php" method="POST">
                  <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Phone:</label>
                    <input type="integer" name="phone" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>
            </div>
        </div>
    </section>  
    </a>
    <a id="about">
    <section>
      <div class="my-4">
          <div class="py-4">
              <h2 class="text-center">About Us</h2>
          </div>
          <div class="container fluid">
            <h3 class="text-center ml-20">Collins</h3><br>
            <p>Flowbite is optimized for learning and training. might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, <br>but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy</h4></div>
        </p>
            <p class="text-center"> I am a passinate collector of records and classic animations.I am also interseted in current trends in animations creations an 3D animations.</p>
          </div>
      </div>
    </section>
    </a>

    


      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
