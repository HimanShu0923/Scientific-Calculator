<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600&display=swap" rel="stylesheet">

</head>
<style>
    * {
        margin: 0;

        box-sizing: border-box;
        color: aliceblue;

    }

    body {
        background-color: #151e2b;
        padding: 16px;
    }

    .container {
        width: 40%;
        height: auto;
        margin: auto;
        background-color: rgb(40, 44, 49);
        box-shadow: 3px 7px 9px blue;
        padding: 20px;
    }

    .f1 {
        font-size: 16px;
        padding: 6px;
        background-color: lightgray;
        width: 123px;
        height: auto;
        border: 2px solid blue;
        border-radius: 10px;
        color: black;
    }

    #O1 {
        width: 60px;
        padding: 6px;
        font-size: 16px;
        color: aliceblue;
        background-color: #314dbd;
        box-shadow: 1px 3px 5px red;
        font-weight: 700;
    }

    #O2 {
        width: 110px;
        padding: 6px;
        font-size: 16px;
        color: aliceblue;
        background-color: #314dbd;
        box-shadow: 1px 3px 5px red;
        font-weight: 701;
    }

    #O3 {
        width: 70px;
        padding: 6px;
        font-size: 16px;
        color: aliceblue;
        background-color: #314dbd;
        box-shadow: 1px 3px 5px red;
        font-weight: 700;
    }


    .Operations {
        font-size: 18px;
        font-family: monospace;
        font-weight: bold;
        padding: 16px;
        margin: auto;
        margin-bottom: 8px;
    }

    .ari {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        margin-bottom: -30px;
        margin-top: 10px;
    }

    .btn {
        background-color: blue;
        height: auto;
        width: auto;
        padding: 6px;
        font-size: 19px;
        box-shadow: 1px 3px 5px red;
        border-radius: 10px;
        margin-left: 14px;
        margin-right: 14px;
        margin-bottom: 30px;
        margin-top: 35px;

    }

    .output {
        font-family: 'Dosis', monospace;
        height: 50px;
        width: 80%;
        margin: auto;
        margin-bottom: 5px;
        font-size: 23px;
        font-weight: bold;
        background-color: rgb(80, 80, 80);
        border: #2521f5 2px solid;
        box-shadow: 1px 3px 5px red;
        border-radius: 5px;
        padding-top: 3px;
        padding-bottom: 2px;

    }

    h1 {
        margin: auto;
        color: rgb(0, 153, 255);
        font-family: 'Rampart One', cursive, monospace;
        margin-bottom: 20px;

    }
</style>


<body>
    <center>
        <h1>

            Scientific Calculator
        </h1>
    </center>


    <form action="work.php" method="post">
        <div class="container">
            <div class="output">
                <center>
                    <?php
                    $answer = $_GET["ans"];
                    echo $answer;
                    ?>
                </center>
            </div>

            <div class="Operations">
                <input type="radio" name="Choice" id="option" value="A" required />Arithmetic
                </br>
                <div class="ari">
                    <input type='text' name="Num11" class="f1" placeholder="Number 1">
                    <select name="Operation1" id="O1">
                        <option value="ADD">+</option>
                        <option value="SUB">-</option>
                        <option value="DIV">/</option>
                        <option value="MUL">X</option>
                        <option value="MOD">%</option>
                    </select>
                    <input type='text' name="Num12" class="f1" placeholder="Number 2">
                </div>

            </div>

            <div class="Operations">
                <input type="radio" name="Choice" id="option" value="B" required />Bit Wise
                </br>
                <div class="ari">
                    <input type='text' name="Num61" class="f1" placeholder="Number 1">
                    <select name="Operation3" id="O3">
                        <option value="AND">AND</option>
                        <option value="OR">OR</option>
                        <option value="XOR">XOR</option>
                    </select>
                    <input type='text' name="Num62" class="f1" placeholder="Number 2">
                </div>

            </div>


            <div class="Operations">
                <input type="radio" name="Choice" id="option" value="T" required />Trigonometric
                </br>
                <div class="ari">
                    <select name="Operation2" id="O2">
                        <option value="SIN">SIN</option>
                        <option value="COS">COS</option>
                        <option value="TAN">TAN</option>
                        <option value="ARCSIN">ARCSIN</option>
                        <option value="ARCCOS">ARCCOS</option>
                        <option value="ARCTAN">ARCTAN</option>
                    </select>
                    <input type='text' name="Num21" class="f1" placeholder="Value">
                </div>
            </div>



            <div class="Operations">
                <input type="radio" name="Choice" id="option" value="E" required />Exponential
                </br>
                <div class="ari">
                    <input type='text' name="Num31" class="f1" placeholder="Value">
                    <input type='text' name="Num32" class="f1" placeholder="Power">
                </div>
            </div>


            <div class="Operations">
                <input type="radio" name="Choice" id="option" value="R" required />Root
                <div class="ari">
                    <input type='text' name="Num41" class="f1" placeholder="Value">
                    <input type='text' name="Num42" class="f1" placeholder="Root">
                </div>

            </div>



            <div class="Operations">
                <input type="radio" name="Choice" id="option" value="L" required />Logarithmic
                <div class="ari">
                    <input type='text' name="Num51" class="f1" placeholder="Value">
                    <input type='text' name="Num52" class="f1" placeholder="Base">
                </div>

            </div>



            <div class="ari" style="justify-content:center;">
                <input type="submit" class="btn" value="Calculate">
            </div>

        </div>

    </form>

</body>

</html>
