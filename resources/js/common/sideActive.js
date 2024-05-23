var sideActive = document.querySelector("#sideActive").value;
console.log(sideActive);
function mainSideActive(element) {
  let el = document.querySelector(element);
  el.classList.add("activeNav");
}

switch (sideActive) {
  case "Dashboard":
    mainSideActive("#dashboardActive");
    break;
}
