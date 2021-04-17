<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        Result
    </title>
</head>


<body>

    <div class="form">
        <?php

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        echo '<br> Name and surname: '   . $name, " "  . $surname;
        $address = $_POST['address'];
        echo '<br> Address: ' . $address;
        $email = $_POST['email'];
        echo '<br> e-mail: ' . $email;
        $phone = $_POST['phone'];
        echo '<br> Phone number: ' . $phone;
        $credit_card = $_POST['creditCard'];
        echo '<br> Credit card number: ' . $credit_card;
        $check_in = $_POST['checkIn'];
        echo '<br> Check-in: ' . $check_in;
        $check_out = $_POST['checkOut'];
        echo '<br> Check-out: ' . $check_out;

        if (isset($_POST['childBed'])) {
            echo '<br> Additional bed: Yes';
        } else {
            echo '<br> Additional bed: No';
        }
        echo '<br> Room facilities: ';
        if (!isset($_POST['room_facilities'])) {
            echo "<br> Not selected";
        } else {
            foreach ($_POST['extras'] as $selectedOption)
                echo $selectedOption . "\n";
        }

        ?>
    </div>
</body>

</html>