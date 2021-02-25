@extends('home.main')

@section('content')
<h2 class="header2">Registration Form</h2>
<div class="container3">
  <form action="{{ route('register') }}" method="post">
    @csrf
    <label for="username"></label>
    <input type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}">
    @error('username')
      <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="first_name"></label>
    <input type="text" id="first_name" name="first_name" placeholder="First Name"value="{{ old('first_name') }}">
    @error('first_name')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="last_name"></label>
    <input type="text" id="last_name" name="last_name" placeholder="Last Name"value="{{ old('last_name') }}">
    @error('last_name')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="email"></label>
    <input type="text" id="email" name="email" placeholder="Email"value="{{ old('email') }}">
    @error('email')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="password"></label>
    <input type="password" id="password" name="password" placeholder="Password"value="">
    @error('password')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="password_confirmation"></label>
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Retype Password"value="">
    @error('password_confirmation')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <button type="submit" class="regs">Register</button>
  </form>
</div>
@endsection