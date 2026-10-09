<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <!-- bootstrap css cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- custom css link  -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="" id="display">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="7" id="7" onclick="calculator(7)">
                    <input type="button" value="8" id="8" onclick="calculator(8)">
                    <input type="button" value="9" id="9" onclick="calculator(9)">
                    <input type="button" value="+" id="+" onclick="calculator('+')">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="4" id="4" onclick="calculator(4)">
                    <input type="button" value="5" id="5" onclick="calculator(5)">
                    <input type="button" value="6" id="6" onclick="calculator(6)">
                    <input type="button" value="-" id="-" onclick="calculator('-')">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="1" id="1" onclick="calculator(1)">
                    <input type="button" value="2" id="2" onclick="calculator(2)">
                    <input type="button" value="3" id="3" onclick="calculator(3)">
                    <input type="button" value="*" id="*" onclick="calculator('*')">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="0" id="0" onclick="calculator(0)">
                    <input type="button" value="." id="." onclick="calculator('.')">
                    <input type="button" value="=" id="=" onclick="calculator('=')">
                    <input type="button" value="/" id="/" onclick="calculator('/')">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="(" id="(" onclick="calculator('(')">
                    <input type="button" value=")" id=")" onclick="calculator(')')">
                    <input type="button" value="c" id="c" onclick="clear()">
                </div>
            </div>
        </div>
    </section>
    <!-- bootstrap js cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- custom js link  -->
    <script src="assets/js/script.js"></script>
</body>
</html>