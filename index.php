<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
    <!-- custom css file  -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="login">
        <h1>Log In </h1>
        <form action="" method="post">
            <div class="form_item">
                <label for="username">username</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="form_item">
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="form_item">
                <input type="submit" value="Log In">
            </div>
        </form>
        <a href="registration.php">Not a member? Register here</a>
    </div>
    <!-- written by PanditProgrammer.com  -->
</body>

</html>