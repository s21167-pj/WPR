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
        $row = 1;

        if (($handle = fopen("rezerwacja.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $row++;
                for ($c = 0; $c < $num; $c++) {
                    echo $data[$c] . "<br />\n";
                }
            }
            fclose($handle);
        }

        ?>
    </div>

</body>

</html>