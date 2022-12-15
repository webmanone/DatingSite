/*
function goHome(){
document.location="index.html"
} */

const leftButton=document.getElementById('leftButton');
const rightButton=document.getElementById('rightButton');

leftButton.onclick = function () {
    document.getElementById('interest1').scrollLeft -= 20;
}

rightButton.onclick = function () {
    document.getElementById('interest1').scrollLeft += 20;
}