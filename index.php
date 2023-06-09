<?php

require_once './db.php';


// provo a settare lo sconto al 99%
try {

  $brush->setDiscount(99);

} catch (Exception $e) {

  echo $e->getMessage();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 2</title>

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- my style -->
  <link rel="stylesheet" href="./css/style.scss">

</head>
<body>

  <!-- importo l'header -->
  <?php
  include './Views/partials/header.php';
  ?>

  <!-- contenitore principale -->
  <div class="container">
    <h1>
      Shop
    </h1>

    <!-- contenitore delle carte -->
    <div class="card-container">
    <!-- ciclo i prodotti per comporre le carte -->
    <?php foreach($products as $SignleProduct) {
    ?>
      <!-- singola carta -->
      <div class="card">
        <img class="card-image" src="<?= $SignleProduct->image ?>" alt="image">
          <div class="card-text">
            <h3 class="card-title"><?= $SignleProduct->name ?></h3>
            <!-- <div class="card-category"><?= "Category: " . $SignleProduct->category ?></div> -->
            <?= $SignleProduct->getCategoryIcon() ?>
            <div class="card-category-container">
              <strong class="card-type"><?= "Type: " . $SignleProduct->type ?></strong>
              <i class="<?= $SignleProduct::$icon ?>"></i>
            </div>
            <p class="card-subtitle"><?= $SignleProduct->description ?></p>
            <div class="card-price">Price: <?= $SignleProduct->getPrice() ?></div>
            <strong class="card-discounted-price">Discounted Price: <?= $SignleProduct->getDiscountedPrice($SignleProduct->getDiscount()) ?>€</strong>
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
    <?php
    }
    ?>
    </div>
    <!-- /contenitore delle carte -->
  </div>
  <!-- /contenitore principale -->

  <!-- importo il footer -->
  <?php
  include './Views/partials/footer.php';
  ?>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>