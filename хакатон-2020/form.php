<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $link = mysqli_connect('localhost', 'admin', 'Apox51s42', 'users') or die("Ошибка " . mysqli_error($link));
    $names = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = "INSERT INTO users (names, surname, email, phone) VALUES ('$names', '$surname', '$email', '$phone')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        echo "<h1>Вы успешно зарегестрированы!</h1>";
        header('Refresh: 5; url=/payment.html');
        
    } else {
        echo "<h1>Вернитесь назад и повторите ввод данных</h1>";
    }
    ?>
</body>

</html>