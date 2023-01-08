
const leftButton=document.getElementById("leftButton");
const rightButton=document.getElementById("rightButton");
const leftButton2=document.getElementById("leftButton2");
const rightButton2=document.getElementById("rightButton2");
const leftButton3=document.getElementById("leftButton3");
const rightButton3=document.getElementById("rightButton3");

if (leftButton) {
leftButton.onclick = function () {
    document.getElementById('interest1').scrollLeft -= 218;
}
}

if (rightButton) {
rightButton.onclick = function () {
    document.getElementById('interest1').scrollLeft += 218;
}
}

if (leftButton2) {
leftButton2.onclick = function () {
    document.getElementById('interest2').scrollLeft -= 218;
}
}

if (rightButton2) {
rightButton2.onclick = function () {
    document.getElementById('interest2').scrollLeft += 218;
}
}

if (leftButton3) {
leftButton3.onclick = function () {
    document.getElementById('interest3').scrollLeft -= 218;
}
}

if (rightButton3) {
rightButton3.onclick = function () {
    document.getElementById('interest3').scrollLeft += 218;
}
}
    const interestModalButton = document.getElementById("interestModalButton");
    const addInterestModal = document.getElementById("addInterestModal");
    const closeModal = document.getElementById("closeModal");

    interestModalButton.addEventListener("click", () => {
        addInterestModal.style.display = "block";
    });

    closeModal.addEventListener("click", () => {
        addInterestModal.style.display = "none";
    });