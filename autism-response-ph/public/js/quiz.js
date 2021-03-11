function check() {
    var c = 0
    var q1 = document.quiz.question1.value;
    var q2 = document.quiz.question2.value;
    var q3 = document.quiz.question3.value;
    var q4 = document.quiz.question4.value;
    var q5 = document.quiz.question5.value;
    var q6 = document.quiz.question6.value;
    var q7 = document.quiz.question7.value;
    var q8 = document.quiz.question8.value;
    var q9 = document.quiz.question9.value;
    var q10 = document.quiz.question10.value;
    var q11 = document.quiz.question11.value;
    var q12 = document.quiz.question12.value;
    var result = document.getElementById("result");
    var comm = document.getElementById("comm");
    var quiz = document.getElementById("quiz");
    if (q1 == "breathing") { c++ }
    if (q2 == "squeeze") { c++ }
    if (q3 == "break") { c++ }
    if (q4 == "taste sensory") { c++ }
    if (q5 == "True") { c++ }
    if (q6 == "True") { c++ }
    if (q7 == "False") { c++ }
    if (q8 == "True") { c++ }
    if (q9 == "False") { c++ }
    if (q10 == "False") { c++ }
    if (q11 == "True") { c++ }
    if (q12 == "False") { c++ }
    quiz.style.display = "none";

    if (c <= 11) {
        result.textContent = `The result of your test is  ${c}`
        comm.textContent = `It is cruicial for Responders to know what they are doing in emergency situations. Would you like to Try again or would you like to Review first.`

    } else {
        result.textContent = `Congratulations! You got a score of ${c} out of ${c}`
        comm.textContent = `You are now knowlegable in responding to people with autism in emergency situations`
    }
}