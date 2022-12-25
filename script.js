/*
function goHome(){
document.location="index.html"
} */

const leftButton=document.getElementById('leftButton');
const rightButton=document.getElementById('rightButton');
const leftButton2=document.getElementById('leftButton2');
const rightButton2=document.getElementById('rightButton2');

leftButton.onclick = function () {
    document.getElementById('interest1').scrollLeft -= 218;
}

rightButton.onclick = function () {
    document.getElementById('interest1').scrollLeft += 218;
}

leftButton2.onclick = function () {
    document.getElementById('interest2').scrollLeft -= 218;
}

rightButton2.onclick = function () {
    document.getElementById('interest2').scrollLeft += 218;
}
