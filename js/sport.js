
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



//  Start Navbar
var navbarTogglerBtn = document.querySelector(".navbar-toggler"),
      navbarTogglerIcon = document.querySelector(".navbar-toggler-icon");

      navbarTogglerIcon.onclick = () => {
	// navbarTogglerBtn.classList.toggle("change");

      }
//  End Navbar









/*
! Blog Carousel Area
*/
    $(document).ready(function() {


    /*
    ! Owl Carousel Library Area
    */
        const responsive = {
            0: {
                items: 1
            },
            320: {
                items: 1
            },
            560: {
                items: 2
            },
            960: {
                items: 3
            }
        }


        $('.owl-carousel').owlCarousel({
            loop: true,
            autoplay: false,
            autoplayTimeout: 3000,
            dots: false,
            nav: true,
            navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
            responsive: responsive
        });




        // Click To Scroll-Top
        $('.move-up span').click(function () {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        })


        /*
        ! Aos Library Area
        */
        AOS.init();

    });


    // START FOOTER SECTION
const getYear = document.getElementById("getYear");
const getFullYear = new Date().getUTCFullYear();
getYear.textContent = getFullYear;
// END FOOTER SECTION