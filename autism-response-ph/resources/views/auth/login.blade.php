@extends('home.main')

@section('content')
<div class="container3">
    @if (session('status'))
    <div style="color:red">
        {{ session('status') }}
    </div>
    @endif
    <div class="container5">
      <div class="lognform">
      <form action="{{ route('login') }}" method="post">
        @csrf
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
        <label for="remember">Remember Me</label>
        <input type="checkbox" id="remember" name="remember">
        <button type="submit" class="regs">Login</button>
      </form>
      </div>
      <div class="container6">
        <p class="fpass">Not yet a member?<br>Click here to be part of us!</p>
        <div class="buttonstyle">
          <a class="button"  href="{{ route('register') }}">Sign Up</a>
        </div>
      </div>
    </div>
</div>
@endsection