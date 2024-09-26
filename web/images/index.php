<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Piesakies webināram!</h1>
</head>
<body>
    <form action="index.html">
        <input type="text" name="Username" id="username">
        <label for="username">Lietotajvards</label>
        <input type="text" name="Email" id="Email">
        <label for="Email">Epasts</label>
        <select name="choice" id="izvele">
            <option value="Beginner">Beginner</option>
            <option value="Intermediat">Intermediat</option>
            <option value="Advanced">Advanced</option>
        </select>
        <p>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</p>
        <input type="radio" name="Yes" id="Yes">
        <label for="Yes">Yes</label>
        <input type="radio" name="No" id="No">
        <label for="No">No</label>
        <input type="submit" value="Submit">
    </form>
    <h1>Jau reģistrējies</h1>
    <a href="confirmation.php">Aiziet uz confimatijas</a>
    <?php

    $masivs = [
        1 => ['name' => 'Janis', 'email' => 'Janis@gmail.com', 'limenis' => 'Beginner'],
        2 => ['name' => 'Peteris', 'email' => 'Peteris@gmail.com', 'limenis' => 'Intermediat'],
        3 => ['name' => 'Dzons', 'email' => 'CesuDzons@gmail.com', 'limenis' => 'Advanced'],
];

    foreach($masivs as $name){
        echo('Vards: '. $masivs['name']. 'Epasts: '. $masivs['email']. 'Limenis: '. $masivs['limenis']);
    }


    ?>


    <a href="blog.php">Aiziet uz Biogrāfiju</a>
    
    <script src="javascript/fails.js"></script>
</body>
</html>


