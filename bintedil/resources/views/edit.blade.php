<!DOCTYPE html>
<html>
<body>

<h2>Text Input</h2>

<form method="POST" action="/employee/{{ $emp->id }}">
{{ csrf_field() }}
{{ method_field('PATCH') }}
  FirstName:<br>
  <input type="text" name="firstname" value="{{$emp->firstname}}">
  <br>
  LastName:<br>
  <input type="text" name="lastname" value ="{{$emp->lastname}}">
  <br>
  Gender:<br>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  Branch:<br>
  <input type="text" name="branch" value="{{$emp->branch}}">
  <br>
  DOB:<br>
  <input type="text" name="dob" value="{{$emp->dob}}">
  <br>
 
  <input type="submit" value="Update info">


   <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>

 

</form>
</body>
</html>