<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP BONUS</title>
</head>

<body>
    <form action="validation.php" method="post">
        <div>
            <label for="date">Date :</label>
            <input type="date" id="date" name="user_date" min="2018-01-01" max="2026-12-31">
        </div>
        <div>
            <label for="firstname">Nom :</label>
            <input type="text" id="firstname" name="user_name" required>
        </div>
        <div>
            <label for="age">Age :</label>
            <input type="number" id="age" name="user_age" required>
        </div>
        <div>
            <label for="courriel">Email :</label>
            <input type="email" id="courriel" name="user_email" required>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="user_phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
        </div>
        <div class="button">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</body>

</html>