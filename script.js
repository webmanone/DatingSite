

/* Scrolls through the interests for the myProfile test page, no longer in use
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
*/
    //declares elements of the website as variables
    const interestModalButton = document.getElementById("interestModalButton");
    const addInterestModal = document.getElementById("addInterestModal");
    const closeModal = document.getElementById("closeModal");
    const form = document.getElementById("interestsModalForm");
    const input = document.getElementById("interestsInput");
    const interestSubmit = document.getElementById("interestSubmit");
    const interestsBox = document.getElementById("interestsBox");
    const interestsWrapper = document.getElementById("interestsWrapper");
    const errorModal = document.getElementById("errorModal");
    const closeError = document.getElementsByClassName("closeModal")[2];
    const selectedInterestsWrapper = document.getElementById("selectedInterestsWrapper");

    //displays a modal that allows the user to add an interest category to the div
    interestModalButton.addEventListener("click", () => {
        addInterestModal.style.display = "block";
    });
    //closes the modal
    closeModal.addEventListener("click", () => {
        addInterestModal.style.display = "none";
    });

    //selects all interest categories as "bioItems" and sets how many are currently activated, starting at 0
    const bioItems = document.querySelectorAll('.bioItem');
    let activeCount = 0;

    //for loop that cycles through all the interest categories and adds an event listener to each one. If the number of active categories is 3 or less, it runs a function when clicke
    
    for (let i = 0; i < bioItems.length; i++) {
        bioItems[i].addEventListener('click', function() {
            if (activeCount < 3) {
                if(!this.classList.contains('active')){
                    this.classList.add('active');
                    activeCount++;

                    //gets the category name from the selected category and removes the html and text from the delete button
                    const interestName = this.textContent.split("×")[0].trim();

                    /*Declares variables which store the name and id of the interest category that has been selected by the user.               
                    ?-- This works but should I use an array to store the values? The values will be overwritten when a new category is selected.
                    Edit: realised that it doesn't matter which add button is clicked, the specific interest will be saved to the last category selected.
                    Fix: will need to store them in an array, pop and push when selected and deselected, and then make sure each add button has the relevant array reference--?  */
                    let selectedInterestName = bioItems[i].querySelector(".interestName").value;
                    let selectedInterestsId = bioItems[i].querySelector(".interestsId").value;

                    /*adds html to the webpage, these elements combined make a div that will contain the specific interests related to the category, including an add button that will
                    allow the user to add specific interests.
                    ?-- A way to make this more efficient could be having 3 divs already in the html, but show different information (and change from hidden to visible) when each div is 
                    clicked instead of dynamically creating divs --?*/
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
                    addInterest.setAttribute("value", selectedInterestsId);
                    addInterest.setAttribute("name", selectedInterestName);
                    interestWrapper.appendChild(interestTitle);
                    interestWrapper.appendChild(addInterest);
                    interestWrapper.appendChild(interestMain);
                    selectedInterestsWrapper.appendChild(interestWrapper);

                    //this declares a modal that is already in the html that allows the user to add a specific interest to the categories
                    const addSpecificInterest = document.querySelector(".addSpecificInterest");
                    

                    //declares the hidden inputs from the modal that will store the name and id of the category selected by the user
                    let formInterestName = document.getElementById("interestName");
                    let formInterestId = document.getElementById("interestsId");
                    /*assigns the name and id of the selected category to the hidden inputs of the modal so that when the modal is submitted, 
                    the php code can place the created specific interest in the correct category*/
                    formInterestName.value = selectedInterestName;
                    formInterestId.value = selectedInterestsId;

                    //saves selected interest categories in the local storage
                    /*
                    let selectedCategories = JSON.parse(localStorage.getItem('selectedCategories')) || [];
                    selectedCategories.push({
                        selectedInterestName,
                        selectedInterestsId
                    });
                    localStorage.setItem('selectedCategories', JSON.stringify(selectedCategories));
*/

                    //ajax request that retrieves the specific interests for each category and creates the div that the specific item will be shown in (within the big category div)
                    
                    $.ajax({
                        type: "GET",
                        url: "http://localhost/datingSite/includes/showSpecificInc.php",
                        data: {interestsId: selectedInterestsId},
                        success: function(data) {
                            console.log(data);
                            const parsedData = JSON.parse(data);
                            for (let i=0; i < parsedData.length; i++){
                                const specificDiv = document.createElement("div");
                                specificDiv.innerText = parsedData[i]['itemsName'];
                                specificDiv.classList.add("specificDiv");
                                interestMain.appendChild(specificDiv);

                                const specificDelete = document.createElement("button");
                                specificDelete.innerHTML = "&times";
                                specificDelete.classList.add("specificDelete");
                                specificDiv.appendChild(specificDelete);

                                const specificDeleteValue = document.createElement("INPUT");
                                specificDeleteValue.setAttribute("type", "hidden");
                                specificDeleteValue.setAttribute("value", parsedData[i]['itemsId']);
                                specificDiv.appendChild(specificDeleteValue);

                                selectedInterestsWrapper.addEventListener("click", function(event) {
                                    if (event.target.classList.contains("specificDelete")){
                                        //ajax request that sends delete request to the server
                                        const specificDeleteValue = event.target.nextElementSibling.value;
                                        const specificDiv = event.target.parentElement;
                                        console.log(specificDeleteValue);
                                        console.log(specificDiv);
                                        $.ajax({
                                            url: "http://localhost/datingSite/includes/deleteSpecificInc.php",
                                            type: "DELETE",
                                            //needs to be edited
                                            data: JSON.stringify({itemsId: specificDeleteValue}),
                                            contentType: "application/json",
                                            success: function(data) {
                                                console.log(data);
                                                const parsedData = JSON.parse(data);
                                                if (parsedData.status === "success") {
                                                    $(specificDiv).remove();
                                                }
                                            },
                                            error: function(err) {
                                                console.log(err);
                                            }
                                        });
                                    }
                                });
                            }
                        },
                        error: function(err) {
                            console.log(err);
                        }
                    });
/*
                    //displays the modal that allows the user to add a specific interest to the category
                    selectedInterestsWrapper.addEventListener("click", function(event) {
                        if (event.target.classList.contains("addSpecific")) {
                          addSpecificInterest.style.display = "block";
                          var addId = event.target.value;
                          var addName = event.target.name;
                          console.log(addId);
                          console.log(addName);
                      
                          $("#addSpecificForm").submit(function(e) {
                            e.preventDefault();
                            var interestsId = addId;
                            //var userId = $("input[name='userId']").val();
                            var itemsTitle = addName;
                            var itemsName = $("input[name='specificInterest']").val();
                            console.log(interestsId);
                            console.log(itemsTitle);
                            console.log(itemsName);
                            $.ajax({
                                type: "POST",
                                url: "http://localhost/datingSite/includes/addSpecificInc.php",
                                data: {
                                    interestsId: interestsId,
                                    //userId: userId,
                                    itemsTitle: itemsTitle,
                                    itemsName: itemsName
                                },
                                success: function(data) {
                                    console.log(data);
                                    addSpecificInterest.style.display = "none";
                                }
                            });
                            return false;
                        });
                        
                        }
                      });
                      */
                        //adding an event listener for the delete buttons on the specific interests dynamically added to the site
                       /* else if (event.target.classList.contains("specificDelete")){
                            //ajax request that sends delete request to the server
                            $.ajax({
                                type: "DELETE",
                                url: "http://localhost/datingSite/includes/deleteSpecificInc.php",
                                //needs to be edited
                                data: {itemsId: specificDeleteValue.value},
                                success: function(data) {
                                    console.log(data);
                                    const parsedData = JSON.parse(data);
                                },
                                error: function(err) {
                                    console.log(err);
                                }
                            });
                        }*/
                    
                    //
                    addSpecificInterest.addEventListener("click", function(event) {
                        if (event.target.classList.contains("closeModal")) {
                            addSpecificInterest.style.display = "none";
                        } });


                    //write code here to keep selected items in cache and have them stay up when the specific interest is added, or find a way to stop the page from refreshing

            
                    
                //end of the first if statement. Pretty massive. condition is if(!this.classList.contains('active')) Feel like most of it doesn't need to be in here.
                }else{ //when an active category is clicked, it becomes deselected
                    this.classList.remove('active');
                    activeCount--;
                    const interestName = this.textContent.split("×")[0].trim();
                    const interestWrapperId = `interestWrapper-${interestName}`;
                    const interestWrapperToRemove = document.getElementById(interestWrapperId);
                    selectedInterestsWrapper.removeChild(interestWrapperToRemove);

                    //removes the selected interest from local storage by filtering out the item and saving the updated array
                    /*
                    let selectedInterestsId = bioItems[i].querySelector('.interestsId').value;
                    let selectedCategories = JSON.parse(localStorage.getItem('selectedCategories')) || [];
                    selectedCategories = selectedCategories.filter(selectedCategories => selectedCategories.selectedInterestsId !== selectedInterestsId);
                    localStorage.setItem('selectedCategories', JSON.stringify(selectedCategories));
                    */
                }
                //end of the active count else, this is if more than 3 divs are clicked
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

const specificForm = document.getElementById("addSpecificForm");
//displays the modal that allows the user to add a specific interest to the category
                    selectedInterestsWrapper.addEventListener("click", function(event) {
                        if (event.target.classList.contains("addSpecific")) {
                          addSpecificInterest.style.display = "block";
                          let addId = event.target.value;
                          let addName = event.target.name;
                          console.log(addId);
                          console.log(addName);
                      
                          $("#addSpecificForm").submit(function(e) {
                            e.preventDefault();
                            let interestsId = addId;
                            //var userId = $("input[name='userId']").val();
                            let itemsTitle = addName;
                            let itemsName = $("input[name='specificInterest']").val();
                            console.log(interestsId);
                            console.log(itemsTitle);
                            console.log(itemsName);
                            $.ajax({
                                type: "POST",
                                url: "http://localhost/datingSite/includes/addSpecificInc.php",
                                data: {
                                    interestsId: interestsId,
                                    //userId: userId,
                                    itemsTitle: itemsTitle,
                                    itemsName: itemsName
                                },
                                success: function(data) {
                                    console.log(data);
                                    addSpecificInterest.style.display = "none";
                                    specificForm.reset();
                                    interestsId = undefined;
                                    itemsTitle = undefined;
                                    itemsName = undefined;
                                    addId = undefined;
                                    addName = undefined;
                                }
                            });
                            return false;
                        });
                        
                        }
                      });
/*

                      const specificForm = document.getElementById("addSpecificForm");


                      //displays the modal that allows the user to add a specific interest to the category
                                          selectedInterestsWrapper.addEventListener("click", function(event){
                                              
                                          if (event.target.classList.contains("addSpecific")){
                                          let addButtons = event.target;
                      
                                          Array.from(addButtons).forEach(element => {
                                          element.addEventListener('click', () => {
                      
                                                addSpecificInterest.style.display = "block";
                                                let addId = element.value;
                                                let addName = element.name;
                                                console.log(addId);
                                                console.log(addName);
                                            
                                                $("#addSpecificForm").submit(function(e) {
                                                  e.preventDefault();
                                                  let interestsId = addId;
                                                  //var userId = $("input[name='userId']").val();
                                                  let itemsTitle = addName;
                                                  let itemsName = $("input[name='specificInterest']").val();
                                                  console.log(interestsId);
                                                  console.log(itemsTitle);
                                                  console.log(itemsName);
                                                  $.ajax({
                                                      type: "POST",
                                                      url: "http://localhost/datingSite/includes/addSpecificInc.php",
                                                      data: {
                                                          interestsId: interestsId,
                                                          //userId: userId,
                                                          itemsTitle: itemsTitle,
                                                          itemsName: itemsName
                                                      },
                                                      success: function(data) {
                                                          console.log(data);
                                                          addSpecificInterest.style.display = "none";
                                                          specificForm.reset();
                                                      }
                                                  });
                                                  return false;
                                              });
                                              
                                           
                                          });
                                      });
                                          }
                                  });
                                  */

//loads the selected categories from local storage
/*
window.addEventListener('load', function() {
    let selectedCategories = JSON.parse(localStorage.getItem('selectedCategories')) || [];
    selectedCategories.forEach(function(selectedCategory) {
      let bioItem = document.querySelector(`[value="${selectedCategory.selectedInterestsId}"]`);
      if (bioItem) {
        bioItem.classList.add('active');
        activeCount++;
      }
    });
  });
*/
//closes the error modal
closeError.onclick = function() {
  errorModal.style.display = "none";
}

