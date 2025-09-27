// Handle tab switching
const tablinks = document.getElementsByClassName("tab-links");
const tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname, element) {
  for (let tablink of tablinks) {
    tablink.classList.remove("active-link");
  }
  for (let tabcontent of tabcontents) {
    tabcontent.classList.remove("active-tabs");
  }
  element.classList.add("active-link");
  document.getElementById(tabname).classList.add("active-tabs");
}

// Handle side menu
const sidemenu = document.getElementById("side-menu");

function openmenu() {
  sidemenu.style.right = "0";
}

function closemenu() {
  sidemenu.style.right = "-250px";
}
