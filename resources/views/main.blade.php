<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <img src="{{ asset('image/logo.png') }}" class="img-fluid rounded-circle" alt="">&nbsp;
        <a class="navbar-brand" href="#">NSIT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="hardware.html">Hardware</a>
                <a class="dropdown-item" href="software.html">Software</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="main.html">Training</a>
              </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="contactus.html">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                       <a href="main.html"><img src="{{ asset('image/banner1.jpg') }}" class="d-block w-100" alt="...">
                      </a> 
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('image/banner2.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('image/banner3.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
   
    <div class="container-fluid" >
        <div class="row" style="padding:50px">
            <div class="col-md-4" style="text-align: center"><a href="main.html"><img src="{{ asset('image/html.png') }}" class="img-fluid " width="50%"  alt=""></a></div>
            <div class="col-md-4" ><img src="{{ asset('image/css.png') }}" class="img-fluid "  alt=""></div>
            <div class="col-md-4"><img src="{{ asset('image/js.png') }}" class="img-fluid "  alt=""></div>
        </div>
        <div class="row">
            <div class="col-md-12 bg-info">
                    NSIT Academy <br>
                    No.16, Jalan Sri Putra 1,
                    Bandar Putra, 
                    81000 Kulai, Johor <br>
                    607-6600628
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>