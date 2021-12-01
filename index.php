<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fifa 20 Ratings</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url('fifa20.jpg');
            display: flex;
            flex-direction: column;    
        }

        h1 {
            color: #ccc;
            font-size: 1.7em;
            margin-left: 25px;
        }

        input[type=search] {
            height: 2.3em;
            width: 25em;
            margin-top: 100px;
            margin-right: 10px;
            background-color: rgb(239, 239, 239);
            border-radius: 5px;
        }

        input[type=search]:hover {
            background-color: #c4c4c4;
        }

        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            top: 50px;
            margin-left: 25px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 500px;
            justify-content: space-around;
        }

        input[type=number] {
            height: 2.0em;
            margin-top: 20px;
        }

        input[type=text] {
            height: 2.0em;
            margin-top: 20px;
        }

        button {
            height: 2.3em;
            margin-top: 20px;
            width: 50%;
            align-self: center;
            margin-top: 15px;
        }

        button:hover {
            font-weight: bold;
            cursor: pointer;
            background-color: #ccc;
        } 

        input[type=reset] {
            height: 2.3em;
            margin-top: 20px;
            width: 50%;
            align-self: center;
            margin-top: 15px;
        }

        input[type=reset]:hover {
            font-weight: bold;
            cursor: pointer;
            background-color: #ccc;
        }

        h2 {
            font-size: 1.4em;
            color: #ccc;
            margin-top: 15px;
        }

        label {
            font-size: 2.4rem;
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h1>FIFA 20 PLAYER RATING PREDICTION</h1>
    </header>
    <main>
        <form action="index.php" method="POST">
            <input type="text" name="name" placeholder="Player Name...">
            <input type="text" name="age" placeholder="Player Age...">
            <input type="number" name="overall" placeholder="Player Overall Score..." id="overall">
            <input type="number" name="potential" placeholder="Player Potential Score..." id="potential">
            <input type="text" name="country" placeholder="Player Nationality...">
            <input type="text" name="club" placeholder="Player Club...">
            <input type="text" name="value" placeholder="Player Value...">
            <button type="button" id="button">PREDICT</button>
            <input type="reset" name="reset" value="RESET">
        </form>
        <h2>The player predicted rating is: <label id="label"></label></h2>
    </main>
    <?php
    echo '<script type="text/JavaScript">
        let overall = document.getElementById("overall").value;
        let potential = document.getElementById("potential").value;
        let button = document.getElementById("button").addEventListener("click", predict)

        function predict(e) {
            e.preventDefault();
            let avg;
            avg = ((overall*1 + potential*1) / 2);
            document.getElementById("label").innerHTML = overall;
        }
    </script>';
    ?>
</body>
</html>