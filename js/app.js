/*
 ! Back To Top Area
 */

 $(document).ready(function(){

	// Start Back To Top
        $(".btn-backtotops").hide();
        $(window).scroll(function(){
                getscrollTopZero = $(this).scrollTop();
                console.log(getscrollTopZero);

                if(getscrollTopZero >= 370) {
                        $(".btn-backtotops").fadeIn(1000);

                }else {
                        $(".btn-backtotops").fadeOut(1000);

                }
        });

        // End Back To Top

 });





/*
! Search Box Area
*/

let searchDatas = [
        "Foootball",
        "Golf",
        "Boxing",
        "Volleyball",
        "Gym",
        "Doctor",
        "University",
        "Library",
        "Book",
        "Apple",
        "Mie",
        "Samsaung",
        "Oppo",
        "Huawai",
        "Lenovo",
        "Asus",
        "Acer",
        "Macbook",
        "Galaxcy ipad",
        "Airpod",
        "Medicine",
        "Gaming Computer",
        "Tennis",
        "Bicycle",
        "Mouse",
        "Printer",
    ];





    // getting all required elements
const        searchWrapper = document.querySelector(".search-input"),
                inputBox = searchWrapper.querySelector("input"),
                suggBox = searchWrapper.querySelector(".autocom-box"),
                icon = searchWrapper.querySelector(".icon"),
                linkTag = searchWrapper.querySelector("a");

        let webLink;

// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){
        icon.onclick = ()=>{
            webLink = `https://www.google.com/search?q=${userData}`;
            linkTag.setAttribute("href", webLink);
            linkTag.click();
        }
        emptyArray = searchDatas.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered characters
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = `<li>${data}</li>`;
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = ()=>{
        webLink = `https://www.google.com/search?q=${selectData}`;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = `<li>${userValue}</li>`;
    }else{
      listData = list.join('');
    }
    suggBox.innerHTML = listData;
}






// START HEADER SECTION

//  Start Navbar
var navbarTogglerBtn = document.querySelector(".navbar-toggler"),
      navbarTogglerIcon = document.querySelector(".navbar-toggler-icon");

      navbarTogglerIcon.onclick = () => {
	// navbarTogglerBtn.classList.toggle("change");

      }
//  End Navbar



        //  Start banner
        const  myslide = document.querySelectorAll('.myslide'),
	          dot = document.querySelectorAll('.dot');

	let counter = 1;

	slidefun(counter);

	let timer = setInterval(autoSlide, 6000);


function autoSlide() {
	counter += 1;
	slidefun(counter);
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 6000);
}

function slidefun(n) {

	let i;
	for(i = 0;i < myslide.length; i++){
		myslide[i].style.display = "none";
	}
	for(i = 0; i < dot.length; i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	}
	if(n > myslide.length){
	   counter = 1;
	   }
	if(n < 1){
	   counter = myslide.length;
	   }
	myslide[counter - 1].style.display = "block";
	dot[counter - 1].className += " active";
}
        //  End banner
// END HEADER SECTION


// START FOOTER SECTION
const getYear = document.getElementById("getYear");
const getFullYear = new Date().getUTCFullYear();
getYear.textContent = getFullYear;
// END FOOTER SECTION




