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
  echo('
  <form action="taskTwoAndThreeForm.php"  method="POST">
    <label for="number">Number of guests:</label><br>
    <select name="guests" required>
      <option value="" disabled selected>Choose option</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>   
    </select>
    <input type="submit" name="submitGuests" value="Submit Guests">
    </br></form>
    ');

    if(isset($_POST['submitGuests'])) {
      $numberOfGuests = $_POST['guests'];

      echo('<form action="taskTwoAndThreeResult.php"  method="POST">    
      <br><label for="name">Enter your name:</label><br>
      <input type="text" id="name" name="name" value="" required><br>
      <label for="surname">Enter your surname:</label><br>
      <input type="text" id="surname" name="surname" value="" required><br>
      <label for="address">Enter your address:</label><br>
      <input type="text" id="address" name="address" value="" required><br>
      <label for="email">Enter your e-mail:</label><br>
      <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>
      <label for="phone">Enter your phone number:</label><br>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br>
      <label for="creditCard">Enter your credit card number:</label><br>
      <input type="text" id="creditCard" name="creditCard" value="" required><br></br>
      <label for"cardDate">Enter Credit Card Date:</label>
			<input type="month" id="cardDate" value="" required><br></br>
      <label for="checkIn">Enter date of check-in:</label>
      <input type="date" id="checkIn" name="checkIn" required>
      <label for="checkOut">Enter date of check-out:</label>
      <input type="date" id="checkOut" name="checkOut" required><br><br>
      <input type="checkbox" id="childBed" name="additional bed" value=" ">
      <label for="childBed">Do you need  bed for child?</label><br><br>
      <label for="extras">Room facilities:</label><br>
      <select name="extras[]" id="extras" multiple>
        <option value="none" disabled selected>Choose option</option>
        <option value="tv">TV</option>
        <option value="bar">Bar</option>
      </select></br></br>');
      if ($numberOfGuests > 1)
        echo('<form>');
        for ($i =1; $i<$numberOfGuests; $i++){
          echo('
          <br>Guest info:
					<br><label>Enter guest firstname: <input type="text" name="firstName"></label>
					<br><label>Enter guest surname: <input type="text" name="lastName"></label>
					<br><label>Enter guest email adress: <input type="email" name="email"></label>
          ');
        }
      echo ('
				<br>
				<input type="submit" name="submitForm" value="Show me receipt!">
				</form>'
				);
    } 
?> 
</body>
</html>
