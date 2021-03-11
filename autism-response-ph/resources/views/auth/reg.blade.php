@extends('home.main')

@section('content')
<div class="container4">
  <div class="container4-0">
  <form action="{{ route('register') }}" method="post">
    @csrf
    <h2 class="header3">Registration Form</h2>
    <label for="first_name"></label>
    <input type="text" id="first_name" name="first_name" placeholder="First Name:"value="{{ old('first_name') }}">
    @error('first_name')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="last_name"></label>
    <input type="text" id="last_name" name="last_name" placeholder="Last Name:"value="{{ old('last_name') }}">
    @error('last_name')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="age"></label>
    <input type="text" id="age" name="age" placeholder="Age:"value="{{ old('age') }}">
    @error('age')
    <div style="color:red;">
      {{ $message }}
    </div>
    @enderror
    <select id="sex" name="sex">
    	<option value="" disabled selected>Sex:</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>
    @error('sex')
    <div style="color:red;">
      {{ $message }}
    </div>
    @enderror
    <select id="regas" name="regas">
      <option value="" disabled selected>Register as:</option>
      <option value="repsponder">Emergency Responder</option>
      <option value="civilian">Civilian</option>
    </select>
    @error('reg')
    <div style="color:red;">
      {{ $message }}
    </div>
    @enderror
    <label for="city"></label>
    <input type="text" id="city" name="city" placeholder="City:"value="{{ old('city') }}">
    @error('address')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="email"></label>
    <input type="text" id="email" name="email" placeholder="Email:"value="{{ old('email') }}">
    @error('email')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="phone"></label>
    <input type="text" id="phone" name="phone" placeholder="Contact Number:"value="{{ old('phone') }}">
    @error('phone')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="password"></label>
    <input type="password" id="password" name="password" placeholder="Password:"value="">
    @error('password')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <label for="password_confirmation"></label>
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Retype Password:"value="">
    @error('password_confirmation')
    <div style="color:red;">
      {{ $message }}
      </div>
    @enderror
    <div class="buttonstyle">
      <button type="submit" class="regs">Register</button>
    </div>
  </form>
  </div>
  <div class="container4-1">
    <h3 class="header4">How You Can <br>Make A Change</h3>
    <p class="phar">
      Donating would help not only to improve the training but it would also help spread awareness of the underlying factors that affect people with autism in dire situations<br><br>It would also help in improving and increasing the amount of  autism response kit that would be given to the first responders.<br>      Account Name: Justice Schmidt<br><br>
      Bank Account Numbers:<br>
      BDO: 342617092645<br>
      PNB: 5347129962963<br>
      BPI: 87775572919007<br>
    </p>

  </div>
</div>
@endsection