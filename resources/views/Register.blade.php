@extends('Master/master')
@section('Register1')


<div class="form">

  <form id="sampleForm" method="POST" >
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <button type="button" class="button" onclick="submitForm()">Submit</button>
  </form>
</div>

  <script>
    function submitForm() {
      // You can add your JavaScript logic here to handle the form submission
      var firstName = document.getElementById('firstName').value;
      var lastName = document.getElementById('lastName').value;
      var email = document.getElementById('email').value;

      // Example: Log the form data to the console
      console.log('First Name:', firstName);
      console.log('Last Name:', lastName);
      console.log('Email:', email);
    }
  </script>
</body>
</html>




@endsection