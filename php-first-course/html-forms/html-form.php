<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form Demo</title>
</head>

<body>
    <form action="html-form-processor.php" method="post">
        <label for="surname">Surname: </label>
        <input type="text" name="surname" />
        <label for="gender">Male</label>
        <input type="radio" name="gender" value="Male" />
        <label for="gender">Female</label>
        <input type="radio" name="gender" value="Female" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>