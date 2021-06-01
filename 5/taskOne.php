<html>
<head>
<body>
<?php
if (!$database = mysqli_connect("localhost", "root", "root","database")) {
	exit("Failure to connect");
}
else {
	echo "Failure to connect";
}

$query = 'select * from wpr';
if(!$result = mysqli_query($database,$query)){
    echo "Query failed";
}
else{
    echo "Query sucessfull";
}

while($rows = mysqli_fetch_row($result)){
    foreach ($rows as $row){
        echo $row;
        echo "</br>";
    }
}

if ($result = mysqli_query($database, $query)) {
    $counter = mysqli_num_rows($result);
    printf("There is %d records\n", $counter);
}

    
$result = mysqli_query($database,$query);
while($r=mysqli_fetch_array($result))
{
echo $r['id']."<br/>";
}

$insert = 'insert into wpr (id) values (10)';
if(mysqli_query($database, $insert)){
    echo "Record added sucessfully";
} else{
    echo "Failure";
}

$numberOfRows = mysqli_affected_rows($database);
echo "Number of records added: $numberOfRows"
?>
</body>
</head>
</html>