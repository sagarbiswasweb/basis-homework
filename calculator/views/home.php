<?php
    $cookieName1 = "number";
    $cookieValue1 = "";
    $cookieName2 = "operand";
    $cookieValue2 = "";

    if (isset($_POST["number"])) {
        $number = $_POST["c_display"] . $_POST["number"];
    } else {
        $number = "";
    }

    if (isset($_POST["operand"])) {
        $cookieValue1 = $_POST["c_display"];
        setcookie($cookieName1, $cookieValue1, time() + (3600));

        $cookieValue2 = $_POST["operand"];
        setcookie($cookieName2, $cookieValue2, time() + (3600));

        $number = "";
    }

    if (isset($_POST["equal"])) {
        $number = $_POST["c_display"];
        switch ($_COOKIE["operand"]) {
            case "+":
                $result = $_COOKIE["number"] + $number;
                break;

            case "-":
                $result = $_COOKIE["number"] - $number;
                break;

            case "*":
                $result = $_COOKIE["number"] * $number;
                break;

            case "/":
                $result = $_COOKIE["number"] / $number;
                break;
        }
        $number = $result;
    }

    if (isset($_POST["c"])) {
        $number = "";
    }
?>



<main>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3 offset-4 border border-secondary rounded my-3">
                <form class="my-3" action="" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="c_display" value="<?php echo $number; ?>">
                    </div>
                    <div class="mb-3">
                        <div class="container d-flex justify-content-center">
                            <div class="row">
                                <div class="col-md-12 my-1">
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="0">0</button>
                                    <button type="submit" class="btn btn-danger mx-2 col-md-2" name="c" value="c">C</button>
                                    <button type="submit" class="btn btn-success mx-2 col-md-2" name="equal" value="=">=</button>
                                    <button type="submit" class="btn btn-warning mx-2 col-md-2" name="operand" value="/">/</button>
                                </div>
                                <div class="col-md-12 my-1">
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="7">7</button>
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="8">8</button>
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="9">9</button>
                                    <button type="submit" class="btn btn-warning mx-2 col-md-2" name="operand" value="*">*</button>
                                </div>
                                <div class="col-md-12 my-1">
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="4">4</button>
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="5">5</button>
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="6">6</button>
                                    <button type="submit" class="btn btn-warning mx-2 col-md-2" name="operand" value="-">-</button>
                                </div>
                                <div class="col-md-12 my-1">
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="1">1</button>
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="2">2</button>
                                    <button type="submit" class="btn btn-primary mx-2 col-md-2" name="number" value="3">3</button>
                                    <button type="submit" class="btn btn-warning mx-2 col-md-2" name="operand" value="+">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>