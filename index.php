
<!-- PHP -->
<?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTAWSONE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--stylesheet-->
    <link rel="stylesheet" href="css/style.css">

    <!--Page Title-->
    <title>
        Hotels
    </title>
    <!--Page Icon-->
    <link rel="icon" type="image/x-icon" href="img/hotel.png">
</head>

<body>
<div class="container my-4">
    <h1 class="text-center my-5">HOTELS</h1>
<table class="table pt-5">
  <thead>
    <tr>
      <th scope="col"><h4>Name</h4></th>
      <th scope="col"><h4>Description</h4></th>
      <th scope="col"><h4>Parking</h4></th>
      <th scope="col"><h4>Vote</h4></th>
      <th scope="col"><h4>Distance to Center</h4></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($hotels as $hotel) : ?>
    <tr>
      <th scope="row"><i class="fa-solid fa-hotel"></i> <?= $hotel['name'] ?></th>
      <td><i class="fa-regular fa-comment"></i> <?= $hotel['description'] ?></td>
      <?php if ($hotel['parking']) : ?>
        <td><i class="fa-solid fa-circle-check fa-xl"></i></td>
        <?php else : ?>
            <td><i class="fa-solid fa-circle-xmark fa-xl"></i></td>
        <?php endif; ?>
      <td><?= $hotel['vote'] ?> <i class="fa-solid fa-star"></i> </td>
      <td><?= $hotel['distance_to_center'] ?> km</td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

</body>



</html>