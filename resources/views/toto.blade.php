<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{url('')}}" method="post">
  <label for="pattern">Pattern:</label><br>
  <input type="text" id="pattern" name="patternGiven" value=""><br><br>
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

<p>Pattern : {{$lastPattern}} </p>
<p>Result : {{$result}} </p><br>

</body>
</html>

