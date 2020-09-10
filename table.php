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
    <div class="container mt-4 d-flex justify-content-center">
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Numéro</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-primary">
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>06.xx.xx.xx.xx</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>06.xx.xx.xx.xx</td>
                </tr>
                <tr class="table-primary">
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>06.xx.xx.xx.xx</td>
                </tr>
            </tbody>
        </table>
    </div>


</body>
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</html>