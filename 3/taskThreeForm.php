<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>
    Booking Form
  </title>
</head>

<vbody>
  <?php
  echo ('<form action="taskThreeForm.php"  method="POST">
          <label for="number">Number of guests:</label><br>
    <select name="guests" required>
      <option value="" disabled selected>Choose option</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>   
    </select> 
      <br><label for="name">Enter your name:</label><br>
      <input type="text" id="name" name="name" value="" required><br>
      <label for="surname">Enter your surname:</label><br>
      <input type="text" id="surname" name="surname" value="" required><br>
      <label for="address">Enter your address:</label><br>
      <input type="text" id="address" name="address" value="" required><br>
      <label for="email">Enter your e-mail:</label><br>
      <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>
      <label for="phone">Enter your phone number:</label><br>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{9}" required><br>
      <label for="creditCard">Enter your credit card number:</label><br>
      <input type="text" id="creditCard" name="creditCard" value="" required><br></br>
      <label for"cardDate">Enter Credit Card Date:</label>
			<input type="month" id="cardDate" value="" required><br></br>
      <label for="checkIn">Enter date of check-in:</label>
      <input type="date" id="checkIn" name="checkIn" required>
      <label for="checkOut">Enter date of check-out:</label>
      <input type="date" id="checkOut" name="checkOut" required><br><br>
      </select></br></br>');

  echo ('
      <br>
      <input type="submit" name="submitForm" value="Save data to CSV!">
      </form>');


  ?>
  <div class="form">
    <?php
    if (isset($_POST["submitForm"])) {
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $creditCard = $_POST['creditCard'];
      $cardDate = $_POST['cardDate'];
      $checkIn = $_POST['checkIn'];
      $checkOut = $_POST['checkOut'];
      $numberOfGuests = $_POST['guests'];



      $filename = './reservation.csv';
      if (!file_exists($filename)) {
        $file = fopen('reservation.csv', 'w');
        fputcsv($file, array('Name', 'Surname', 'Address', 'Email', 'Phone', 'creditCard', 'cardDate', 'checkIn', 'checkOut', 'numberOfGuests'), ';');
        fclose($file);
      }
      $file = fopen('reservation.csv', 'a');
      $dataToWrite = array(
        $name, $surname, $email, $phone, $creditCard, $cardDate, $checkIn, $checkOut, $numberOfGuests
      );

      fputcsv($file, $dataToWrite, ";");

      fclose($file);
    }
    ?>
  </div>
  <?php
  if (isset($_POST['submitForm'])) {
    echo ('<form action="taskThreeResult.php" method="post">
      <label>
          <tr>
              <br><br>
              <td><input type="submit" name="showCSV" value="Show CSV"/></td>
          </tr>
      </label>
     </form>');
  }
  ?>

  </body>

</html>