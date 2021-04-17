<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="taskFour.php" method="POST">
        <br><label>Enter number: <input type="number" min='0' name="number"></label>
        <input type="submit" name="send" value="send Number">
    </form>

    <?php
    function isNumberPrime($inputNumber)
    {
        if ($inputNumber == 1)
            return 0;
        for ($i = 2; $i <= $inputNumber / 2; $i++) {
            if ($inputNumber % $i == 0)
                return 0;
        }
        return 1;
    }
    if (isset($_POST['send'])) {
        $inputNumber = ($_POST['number']);;
        $result = isNumberPrime($inputNumber);
        if ($result == 1)
            echo "Your number is prime";
        else
            echo "Your number is not prime";
    }
    ?>
</body>

</html>