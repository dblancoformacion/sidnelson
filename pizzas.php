<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pedido</title>
    <?php
        include_once "libreria.php"; 
        
            sql2js('datos','nelson_laluna',"
                SELECT * FROM articulos WHERE grupo='Pizzas';
                
            ");
        
    ?>
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" />
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body class="bg-info">
   <div class="container bg-light my-5"> 
    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-2">Pizza</th>
                    <th scope="col-8">Ingredientes</th>
                    <th scope="col-2">Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">?</th>
                    <td>?</td>
                    <td>?</td>
                </tr>
                <tr>
                    <th scope="row">?</th>
                    <td>?</td>
                    <td>?</td>
                </tr>
                <tr>
                    <th scope="row">?</th>
                    <td>?</td>
                    <td>?</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>