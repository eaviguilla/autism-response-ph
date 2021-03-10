@extends('home.main')

@section('content')
<h2 class="header2">Contact Form</h2>

<div class="container3">
  @if(Session::get('message_sent'))
    <div class="alert alert-success" role="alert">
      {{Session::get('message_sent')}}
    </div>
  @endif
  <form action="{{ route('contactus') }}" method ="post">
    @csrf
    <label for="name"></label>
    <input type="text" id="name" name="name" placeholder="Name">

    <label for="email_con"></label>
    <input type="text" id="email_con" name="email_con" placeholder="Email">
    </select>
    @error('email_cont')
      <div style="color:red;">
        {{ $message }}
      </div>
    @enderror
    <label for="message"></label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px" value="{{ old('message') }}"></textarea>
    @error('message')
      <div style="color:red;">
        {{ $message }}
      </div>
    @enderror
    <button type="submit" class="regs">Submit</button>

  </form>
</div>

<h2 class="header2">Contact Information</h2>
  <h4 class="cntcweb">AutismResponsePH@yahoo.com</h4>
  <h4 class="cntcnum">09297055900</h4>
  <h4 class="cntccity">Pasig City</h4>
@endsection