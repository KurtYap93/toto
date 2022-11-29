<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{url('')}}" method="post">
  <label for="numberSet">Toto number:</label><br>
  <input type="text" id="numberSet" name="numberSet" value=""><br><br>
  <label for="c">C:</label><br>
  <input type="text" id="c" name="c" value=""><br><br>
  <label for="db">DB:</label><br>
  <input type="text" id="db" name="db" value=""><br><br>
  <label for="ms">MS:</label><br>
  <input type="text" id="ms" name="ms" value=""><br><br>
  <label for="of">OF:</label><br>
  <input type="text" id="of" name="of" value=""><br><br>
  <label for="h">H:</label><br>
  <input type="text" id="h" name="h" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<p>Result : {{$result}} </p>
</body>
</html>

