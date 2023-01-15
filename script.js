
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
    const form = document.getElementById("interestsModalForm");
    const input = document.getElementById("interestsInput");
    const interestSubmit = document.getElementById("interestSubmit");
    const interestsBox = document.getElementById("interestsBox");
    const deleteInterest = document.querySelectorAll('.delete');
    //const interests = document.querySelectorAll("delete");

    interestModalButton.addEventListener("click", () => {
        addInterestModal.style.display = "block";
    });

    closeModal.addEventListener("click", () => {
        addInterestModal.style.display = "none";
    });
/*
    form.addEventListener("submit", (event) => {
        event.preventDefault();
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "includes/interestsInc.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(`interestInput=${input.value}`);
        xhr.onload = () => {
            if (xhr.status === 200) {
                interestsBox.innerHTML += `<div class="bioItem">${input.value}
                <button value="Delete" class="delete " id="deleteInterest">x</button>                            
                </div>`;
                addInterestModal.style.display = "none";
            } else {
                console.log("Error: " + xhr.status);
            }
        };
    });

    for (let button of deleteInterest) {
        button.addEventListener("click", (e) => {
            e.target.parentElement.remove();
        });
    }
    */
    

    /*
document.getElementById("interest").onmouseenter = function() {mouseEnter()};
document.getElementById("interest").onmouseleave = function() {mouseLeave()};


function mouseEnter() {
    document.getElementById("deleteInterest").style.visibility = "visible";
}

function mouseLeave() {
    document.getElementById("deleteInterest").style.visibility = "hidden";
}

    
    document.getElementById("bioItem").addEventListener("mouseenter", mouseEnter);
    document.getElementById("bioItem").addEventListener("mouseleave", mouseLeave);

function mouseEnter() {
    document.getElementById("deleteInterest").style.visibility = "visible";
}

function mouseLeave() {
    document.getElementById("deleteInterest").style.visibility = "hidden";
}

        
    form.addEventListener("submit", (event) => {
        event.preventDefault();
        const newInterestinterestsBox.innerHTML += `<div class="bioItem">${input.value}</div>`;
        addInterestModal.style.display = "none";
    });*/