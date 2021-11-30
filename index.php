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
            flex-direction: row;
            justify-content: center;
            position: relative;
            top: 150px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 500px;
            justify-content: space-around;
        }

        input[type=submit] {
            height: 2.3em;
            margin-top: 100px;
        }

        input[type=submit]:hover {
            font-weight: bold;
            cursor: pointer;
            background-color: #ccc;
        } 

        th, td {
            color: rgb(239, 239, 239);
            font-size: 1.5em;
        }

        table, th, td {
            border: 2px solid black;
        }

        table {
            display: table;
            border-collapse: collapse;
            height: 180px;
        }
    </style>
</head>
<body>
    <header>
        <h1>FIFA 20 PLAYER RATING PREDICTION</h1>
    </header>
    <main>
        <form action="{{url_for('predict')}}" method="GET">
            <input type="text" name="name" placeholder="Player Name...">
            <input type="text" name="age" placeholder="Player Age...">
            <input type="number" name="overall" placeholder="Player Overall Score...">
            <input type="number" name="potential" placeholder="Player Potential Score...">
            <input type="text" name="country" placeholder="Player Nationality...">
            <input type="text" name="club" placeholder="Player Club...">
            <input type="text" name="value" placeholder="Player Value...">
            <input type="submit" name="submit" value="PREDICT">
        </form>
        {{ prediction_text}}
    </main>
</body>
</html>