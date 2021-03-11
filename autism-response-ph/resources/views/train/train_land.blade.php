@extends('home.main')

@section('content')
<div>
    <img src="img/train.jpg" class="trainimg">
</div>
<h2 class="trainhow">How You Can Help</h2>

<div class="trainflx">
    <div class="container8-0">
	    <h2 class="header7">Autism Response PH Basic Training</h2>
	    <p class="container8-1">
        This training will help you start learning the things you need to be knowledgeable in dealing with people with autism in times of natural disasters. This is crucial to learn since people with autism are more likely to die from natural disasters than an average person. By having you learn all this, you will be able to save the lives of the people with autism from preventable accidents or death. 
        By the end of this training you will learn the following things:
        </p>
        <li>Things to bring for an autistic person</li>
        <li>How to approach an autistic person</li>
        <li>How to respond in a water emergency situation</li>
    </div>
    <div class="buttonstyle">
 	    <a type="submit" class="button" href="{{ route('reviewer') }}">Get Started</a>
    </div>
</div>
@endsection