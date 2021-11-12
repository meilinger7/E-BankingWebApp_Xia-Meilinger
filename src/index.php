<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Banking App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="index.js"></script>

</head>

<body>

    <div class="container">
        <div class="card" id="headerCard">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 text-center" id="logoBox">
                        <h1>easy</h1>
                        <h2>banking</h2>
                    </div>
                    <div class="col-md-9  col-sm-12">
                        <div id="userBox">
                            <div class="container">
                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-md-7  col-sm-12 ">
                                        <a  id="button" class="btn" href="login.php" role="button">Ausloggen</a>

                                    </div>
                                    <div class="col-md-5  col-sm-12 ">
                                        <a  id="button" class="btn" href="transfer.php" role="button">Neue Überweisung</a>
                                    </div>
                                </div>
                                <div class="row" id="userData">
                                    <div class="col-md-7  col-sm-12 ">
                                        <h3>Julian Meilinger</h3>
                                        <h4>AT XXXX XXXX XXXX XXXX</h4>
                                    </div>
                                    <div class="col-md-5  col-sm-12 ">
                                        <h2 id="moneySum">52522, 50 €</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>

            <div id="transactionList">
                <h3>Letzte</h3>
                <h3>Überweisungen:</h3>
            </div>


            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <h4>Interspar Imst</h4>
                            </div>
                            <div class="col-4">
                                <h4>20.10.2021</h4>
                            </div>
                            <div class="col-4">
                                <h4>20,90 €</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card box1">
                <div class="card-body">
                    <h4>This is some text within a card body.</h4>
                </div>
            </div>

            <div class="card box1">
                <div class="card-body">
                    <h4>This is some text within a card body.</h4>
                </div>
            </div>
        </div>




</body>

</html>