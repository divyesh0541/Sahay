const pop = gsap.timeline({
    paused: "true"
})

pop.to(".ask",{
    duration:  0.8,
    opacity: 1,
    y: 0,
    scale:1,
    ease: Power4.easeOut
})

pop.from(".ask .form_sides,.ask .form_sides .d_input, .ask .btn1_ask, .img_choice img", {
    duration: 0.6,
    opacity: 0,
    y: 150,
    stagger: {
        amount: 1
    }
},"-=.3")

pop.play();
function pop_close()
{
    pop.reverse();
    var interval = setInterval(myURL, 3000);
    var result = document.getElementById("result");
}
function myURL() {
    document.location.href = 'login.php';
    clearInterval(interval);
 }