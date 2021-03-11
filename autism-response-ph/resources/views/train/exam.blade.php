@extends('home.main')

@section('content')
<div class="container8">
<form method="get" name="quiz" id="quiz">
    <div class="questions">
        <p class="ques">1.	An item from Autism responder’s kit. Items to support _____ and relaxation</p>
        <p class="answer"><input type="radio" name="question1" value="walking">Walking</p>
        <p class="answer"><input type="radio" name="question1" value="swimming">Swimming</p>
        <p class="answer"><input type="radio" name="question1" value="breathing">Breathing</p>
        <p class="answer"><input type="radio" name="question1" value="reading">Reading</p>   
    </div>

    <div class="questions">
        <p class="ques">2.	An item from Autism responder’s kit. Items to _____and keep hands busy</p>
        <p class="answer"><input type="radio" name="question2" value="squeeze">Squeeze</p>
        <p class="answer"><input type="radio" name="question2" value="throw">Throw</p>
        <p class="answer"><input type="radio" name="question2" value="write">Write</p>
        <p class="answer"><input type="radio" name="question2" value="drop">Drop</p>        
    </div>

    <div class="questions">
        <p class="ques">3.	Items that give kids a brain _____</p>
        <p class="answer"><input type="radio" name="question3" value="breakdown">Breakdown</p>
        <p class="answer"><input type="radio" name="question3" value="break">Break</p>
        <p class="answer"><input type="radio" name="question3" value="freeze">Freeze</p>
        <p class="answer"><input type="radio" name="question3" value="relaxation">Relaxation</p>       
    </div>

    <div class="questions">
        <p class="ques">4.	What item support is not included</p>
        <p class="answer"><input type="radio" name="question4" value="auditory">Items for auditory sensory support.</p>
        <p class="answer"><input type="radio" name="question4" value="oral motor">Items for oral motor sensory support</p>
        <p class="answer"><input type="radio" name="question4" value="olfactory">Items for olfactory sensory support.</p>
        <p class="answer"><input type="radio" name="question4" value="taste sensory">Items for taste sensory support.	</p>     
    </div>

    <div class="questions">
        <p class="ques">5.	Approach the person in a quiet, nonthreatening manner.</p>
        <p class="answer"><input type="radio" name="question5" value="True">True</p>
        <p class="answer"><input type="radio" name="question5" value="False">False</p>    
    </div>

    <div class="questions">
        <p class="ques">6.	Understand that touching a person with autism may cause a “fight or flight” reaction.</p>
        <p class="answer"><input type="radio" name="question6" value="True">True</p>
        <p class="answer"><input type="radio" name="question6" value="False">False</p>   
    </div>

    <div class="questions">
        <p class="ques">7.	Talk to the person in a casual voice. Pressure the kid for an answer when giving directions or asking questions.</p>
        <p class="answer"><input type="radio" name="question7" value="True">True</p>
        <p class="answer"><input type="radio" name="question7" value="False">False</p>   
    </div>

    <div class="questions">
        <p class="ques">8.	Instruct the person imply and directly</p>
        <p class="answer"><input type="radio" name="question8" value="True">True</p>
        <p class="answer"><input type="radio" name="question8" value="False">False</p>   
    </div>

    <div class="questions">
        <p class="ques">9.	Maintain a close distance and be able to retreat, if necessary, to de-escalate the situation.</p>
        <p class="answer"><input type="radio" name="question9" value="True">True</p>
        <p class="answer"><input type="radio" name="question9" value="False">False</p>   
    </div>

    <div class="questions">
        <p class="ques">10.	Maximize sensory input</p>
        <p class="answer"><input type="radio" name="question10" value="True">True</p>
        <p class="answer"><input type="radio" name="question10" value="False">False</p>   
    </div>

    <div class="questions">
        <p class="ques">11.	Advocate, remember these individuals are doing the best they can.</p>
        <p class="answer"><input type="radio" name="question11" value="True">True</p>
        <p class="answer"><input type="radio" name="question11" value="False">False</p>   
    </div>

    <div class="questions">
        <p class="ques">12.	Keep your eyes out of your patient</p>
        <p class="answer"><input type="radio" name="question12" value="True">True</p>
        <p class="answer"><input type="radio" name="question12" value="False">False</p>   
    </div>

    <div class="buttonstyle">
        <input class="examsubmit"type="button" name="button" value="Sumbit" id="button" onclick="check()">
    </div>
</form>
<div class="container9">
    <div class="container10">
	    <h1 class="result" id="result"></h1>
	</div>
    <div class="container11">
	    <h2 class="comm" id="comm"></h2>
	</div>
	<div class="container12">
	    <div class="buttonstyle">
 	    	<a class="button" type="submit" href="{{ route('reviewer') }}">Review</a>
	    </div>
	    <div class="buttonstyle">
 	    	<a class="button" type="submit" href="{{ route('autism') }}">About Autism</a>
	    </div>
	    <div class="buttonstyle">
 	    	<a class="button" type="submit" href="{{ route('exam') }}">Take the Test</a>
	    </div>
    </div>
</div>
</div>
@endsection