const popUpControl = document.querySelector('.popUpMain');
const close = document.querySelector('.close-button');

window.addEventListener("load", function() {
    showPopup();
});

function showPopup () {
    const timeLimit = 2; // seconds
    let i = 0;
    const timer = setInterval(function() {
        i++;
        if(i == timeLimit) {
            clearInterval(timer);
            popUpControl.classList.add("show");
        }
        console.log(i); 
    }, 1000);
}

close.addEventListener("click", function() {
    popUpControl.classList.remove("show");
});

