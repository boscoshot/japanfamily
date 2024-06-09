<!doctype html>
<html lang="fr">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Japon en famille</title> 
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="container text-center">
      <div class="row">
        <div class="col col-lg-8">
          <br>
          <h2 class="alignleft">Bienvenue sur notre site "Le Japon en famille" !</h2><br>
          <p class="alignleft">Nous avons crée ce site web pour aider les parents préparant un voyage au Japon avec un ou plusieurs enfants. Lors de la préparation de notre voyage, nous avons dû éplucher de nombreux sites internet et forums pour trouver des informations pour voyager avec des enfants. Nous avons donc décider de tout regrouper ici. <br><br>Et pour commencer, nous vous proposons nos conseils pour préparer votre voyage.</p>
          <button type="button" class="btn btn-danger aligncenter" onclick="window.location.href = './preparation-voyage.php';">Préparer son voyage</button>
        </div>
        
        <div class="col-md-auto">
          <br>
          <img src="./images/family-photo.png" alt="famille devant mont fuji">
        </div>
      </div>
    </div>
  <div class="container text-center mx-auto">
    <div class="row">
      <div class="col">
        <br>
        <div class="card radius" style="width: 100%;">
          <img src="./images/visites-japon.jpg" class="card-img-top" alt="photos japon tokyo kyoto osaka">
          <div class="card-body">
            <h5 class="card-title">Les visites à faire</h5>
            <p class="card-text">Les visites à faire absolument en famille au Japon !</p>
            <a href="./visites-japon.php" class="btn btn-danger">Découvrez les visites</a>
          </div>
        </div>
      </div>
      <div class="col">
        <br>
        <div class="card radius" style="width: 100%;">
          <img src="./images/culture-japonaise.jpg" class="card-img-top" alt="culture japonaise bouddha">
          <div class="card-body">
            <h5 class="card-title">La culture japonaise</h5>
            <p class="card-text">Nos conseils pour respecter la culture japonaise !</p>
            <a href="./culture-japonaise.php" class="btn btn-danger">Découvrez la culture</a>
          </div>
        </div>
      </div>
      <div class="col">
        <br>
        <div class="card radius" style="width: 100%;">
          <img src="./images/manger-au-japon.jpg" class="card-img-top" alt="manger au japon sushi ramen">
          <div class="card-body">
            <h5 class="card-title">Manger au Japon</h5>
            <p class="card-text">Comment faire manger toute la famille au Japon ?</p>
            <a href="./manger-au-japon.php" class="btn btn-danger">Que manger au Japon?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<button id="scrollToTopBtn" class="btn alignright"><i class="fas fa-chevron-up"></i></button>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        var btn = $('#scrollToTopBtn');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.fadeIn();
            } else {
                btn.fadeOut();
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
        });
    });
</script>
  <br><br>
  <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
