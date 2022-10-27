const form_ = document.querySelector("form");
const open_drop = document.querySelector("a[class='open']");
const drop = document.querySelector(".dropdown");

open_drop.addEventListener("click", () => {
    toggleDisplay(drop);
})

function toggleDisplay(element) {
    if(element.classList.contains('not-visible')) {
        element.classList.remove("not-visible");
        element.classList.add("visible"); 
    } else {
        element.classList.remove("visible"); 
        element.classList.add("not-visible"); 
    }
}

form_.addEventListener("submit", (e) => {
    e.preventDefault();
    const inps = [form_.elements];
    inps.forEach((element, index) => {
        for(let i = 0; i < element.length; i++) {
            if(element[i].type != "button" && element[i].type != "submit") {
                console.log(element[i].name, element[i].value);
            }
        }
    });
})