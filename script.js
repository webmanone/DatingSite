/*
function goHome(){
document.location="index.html"
} */

let leftButton=document.getElementById('leftButton');
let rightButton=document.getElementById('rightButton');
let leftButton2=document.getElementById('leftButton2');
let rightButton2=document.getElementById('rightButton2');
let leftButton3=document.getElementById('leftButton3');
let rightButton3=document.getElementById('rightButton3');

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

leftButton3.onclick = function () {
    document.getElementById('interest3').scrollLeft -= 218;
}

rightButton3.onclick = function () {
    document.getElementById('interest3').scrollLeft += 218;
}
   
    const ageContainer = document.getElementById('userDob');
    const dob = ageContainer.textContent;

    console.log(dob);