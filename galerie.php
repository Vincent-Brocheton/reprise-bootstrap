<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Bootstrap</title>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="d-flex justify-content-around mt-4">
        <div class="card" style="width: 18rem;">
            <img src="img/luffy.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title font-italic">Card title</h5>
                <p class="card-text tex">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img/mandalorian.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title font-italic">Card title</h5>
                <p class="card-text tex">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img/mugiwara.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title font-italic">Card title</h5>
                <p class="card-text tex">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

</body>
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</html>