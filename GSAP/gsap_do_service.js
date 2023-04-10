const pop = gsap.timeline({
    paused: "true"
})

pop.to(".skill",{
    duration:  1,
    opacity: 1,
    y: 30,
    scale:1,
    ease: Power4.easeOut
})

pop.from(".skill .lt h1, .skill .lt #dynamicCheck input[type='button'], .skill .lt #newElementId, .skill .rt .logo img, .skill .rt .img img, .skill .lt .submit input[type='submit']", {
    duration: .5,
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