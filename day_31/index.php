<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>CALCULATOR</title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- custom css link  -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="" id="display">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="7" onclick="values(7)">
                    <input type="button" value="8" onclick="values(8)">
                    <input type="button" value="9" onclick="values(9)">
                    <input type="button" value="+" onclick="values('+')">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="4" onclick="values(4)">
                    <input type="button" value="5" onclick="values(5)">
                    <input type="button" value="6" onclick="values(6)">
                    <input type="button" value="-" onclick="values('-')">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="1" onclick="values(1)">
                    <input type="button" value="2" onclick="values(2)">
                    <input type="button" value="3" onclick="values(3)">
                    <input type="button" value="*" onclick="values('*')">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="0" onclick="values(0)">
                    <input type="button" value="." onclick="values('.')">
                    <input type="button" value="(" onclick="values('(')">
                    <input type="button" value=")" onclick="values(')')">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" value="/" onclick="values('/')">
                    <input type="button" value="=" onclick="values('=')">
                </div>
            </div>
        </div>
    </section>

    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- custom js link  -->
    <script src="assets/js/script.js"></script>
</body>

</html>