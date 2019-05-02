<!DOCTYPE html>
<html>
<body>

<h2>Text Input</h2>

<form method="post" action ="\productinfo">
{{csrf_field()}}
  FirstName:<br>
  <input type="text" name="firstname">
  <br>
  LastName:<br>
  <input type="text" name="lastname">
  <br>
  Gender:<br>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  Branch:<br>
  <input type="text" name="branch">
  <br>
  DOB:<br>
  <input type="date" name="dob">
  <br>
 
  <input type="submit" value="Submit">
 

</form>
</body>
</html>