/*
function goHome(){
document.location="index.html"
} */

const leftButton=document.getElementById('leftButton');
const rightButton=document.getElementById('rightButton');

leftButton.onclick = function () {
    document.getElementById('interest1').scrollLeft -= 300;
}

rightButton.onclick = function () {
    document.getElementById('interest1').scrollLeft += 300;
}