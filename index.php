<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agência color</title>
</head>
<body>
  <div class="container-fluid branco">
<div class="container">
<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">
    <img src="image/logo.png" alt="Logo">
  </a>

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="las la-bars" style="font-size: 25px;"></i></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item  dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
        <div class="dropdown-menu" aria-labelledby="home">
          <a class="dropdown-item" href="#">Lorem</a>
    
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
        <div class="dropdown-menu" aria-labelledby="pages">
        <a class="dropdown-item" href="#">Lorem</a>
    
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="#">Screenshots</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>


   
    </ul>

  </div>
</nav>

</div>

</div>

<section class="mt-5 contato">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
      <h2><b>Contato</b></h2>

      <hr>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi cupiditate deserunt impedit rerum et repellendus beatae odit nemo autem enim cum maxime archit</p>

      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem vitae cum maiores odio asperiores provident, sunt officia </p>

        <div class="address">
          <div class="item d-flex align-items-center"  data-aos="fade-up"
     data-aos-duration="5000">
          <i class="las la-home"></i>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, reiciendis? Sin</p>
          </div>

          <div class="item d-flex align-items-center"  data-aos="fade-up"
     data-aos-duration="6000">
          <i class="las la-phone"></i>
          <p>+1 230 456 789-012 345 64789</p>
          </div>


          <div class="item d-flex align-items-center"  data-aos="fade-up"
     data-aos-duration="7000">
          <i class="las la-envelope"></i>
          <p>exampledomain@domain.com.br</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <form action="sendmail.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" id="nome" name="nome"  placeholder="Nome" required>
        </div>

        <div class="form-group">
          <input type="email" class="form-control" name="email" id="email"  placeholder="Email" required>
        </div>


        <div class="form-group">
          <input type="text" class="form-control" name="assunto" id="assunto"  placeholder="Assunto" required>
        </div>


        <div class="form-group">
        <textarea class="form-control" id="mensagem" rows="7" name="mensagem" placeholder="Mensagem" required></textarea>
        </div>

        <button type="submit" class="btn d-flex align-items-center justify-content-center "><i class="lab la-telegram-plane"></i>Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>
















<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
