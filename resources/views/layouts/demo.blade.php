<!DOCTYPE html>
<html>
<body>

<h2>Text Input</h2>

<form action="{{ route('submit') }}" method="POST">
	{{csrf_field()}}
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  <button type="submit">Submit</button>
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of a text input field is 20 characters.</p>

</body>
</html>
