var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname) {
  for(tablink of tablinks){
    tablink.classList.remove("active-link");
  }
  for(tabcontent of tabcontents){
    tabcontent.classList.remove("active-tabs");
  }
  event.currentTarget.classList.add("active-link");
  document.getElementById(tabname).classList.add("active-tabs");
}


var sidemenu = document.getElementById("side-menu");

function openmenu(){
    sidemenu.style.right = "0";
}

function closemenu(){
    sidemenu.style.right = "-250px";
}
