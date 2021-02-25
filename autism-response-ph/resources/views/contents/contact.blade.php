@extends('home.main')

@section('content')
<h2 class="header2">Contact Form</h2>

<div class="container3">
  <form action="action_page.php">

    <label for="fname"></label>
    <input type="text" id="fname" name="firstname" placeholder="Name">

    <label for="lname"></label>
    <input type="text" id="lname" name="lastname" placeholder="Email">
    </select>

    <label for="subject"></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

<h2 class="header2">Contact Information</h2>
  <h4 class="cntcweb">AutismResponsePH@yahoo.com</h4>
  <h4 class="cntcnum">09297055900</h4>
  <h4 class="cntccity">Pasig City</h4>
@endsection