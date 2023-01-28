
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
    const interestsWrapper = document.getElementById("interestsWrapper");

    interestModalButton.addEventListener("click", () => {
        addInterestModal.style.display = "block";
    });

    closeModal.addEventListener("click", () => {
        addInterestModal.style.display = "none";
    });

    const bioItems = document.querySelectorAll('.bioItem');
    let activeCount = 0;
   
    const errorModal = document.getElementById("errorModal");
    const closeError = document.getElementsByClassName("closeModal")[1];

    const selectedInterestsWrapper = document.getElementById("selectedInterestsWrapper");

    for (let i = 0; i < bioItems.length; i++) {
        bioItems[i].addEventListener('click', function() {
            if (activeCount < 3) {
                if(!this.classList.contains('active')){
                    this.classList.add('active');
                    activeCount++;
                    
                    const interestName = this.textContent.split("×")[0].trim();

                    const interestWrapper = document.createElement("div");
                    interestWrapper.classList.add("interestWrapper");
                    interestWrapper.setAttribute("id", `interestWrapper-${interestName}`);
                    
                    const interestTitle = document.createElement("div");
                    interestTitle.innerHTML = interestName;
                    interestTitle.classList.add("interestTitle");

                    const interestMain = document.createElement("div");
                    interestMain.classList.add("interestMain");

                    const addInterest = document.createElement("button");
                    addInterest.classList.add("addSpecific");
                    addInterest.innerHTML = `+`;
                    /*addInterest.setAttribute("data-interest-name", this.bioItems.interestName);
                    addInterest.setAttribute("data-interest-id", this.bioItems.interestsId);*/

                    interestWrapper.appendChild(interestTitle);
                    interestWrapper.appendChild(addInterest);
                    interestWrapper.appendChild(interestMain);

                    selectedInterestsWrapper.appendChild(interestWrapper);

                    const addSpecificInterest = document.querySelector(".addSpecificInterest");

                    selectedInterestsWrapper.addEventListener("click", function(event) {
                        if (event.target.classList.contains("addSpecific")) {
                            let interestWrapper = event.target.parentNode.parentNode.parentNode;
                            let interestName = interestWrapper.querySelector(".interestName").value;
                            let interestsId = interestWrapper.querySelector(".interestsId").value;
                            addSpecificInterest.setAttribute("data-interest-name", interestName);
                            addSpecificInterest.setAttribute("data-interest-id", interestsId);
                            addSpecificInterest.style.display = "block";
                        } 
                    });
                    
                    addSpecificInterest.addEventListener("click", function(event) {
                    if (event.target.classList.contains("closeModal")) {
                        addSpecificInterest.style.display = "none";
                    }
                    });
                }else{
                    this.classList.remove('active');
                    activeCount--;
                    const interestName = this.textContent.split("×")[0].trim();
                    const interestWrapperId = `interestWrapper-${interestName}`;
                    const interestWrapperToRemove = document.getElementById(interestWrapperId);
                    selectedInterestsWrapper.removeChild(interestWrapperToRemove);
                }
            } else {
                if(!this.classList.contains('active')){
                    errorModal.style.display = "block";
                }else{
                    this.classList.remove('active');
                    activeCount--;
                    const interestName = this.textContent.split("×")[0].trim();
                    const interestWrapperId = `interestWrapper-${interestName}`;
                    const interestWrapperToRemove = document.getElementById(interestWrapperId);
                    selectedInterestsWrapper.removeChild(interestWrapperToRemove);
                }
            }
        });
    }

closeError.onclick = function() {
  errorModal.style.display = "none";
}

