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

function sendData(values) {
    fetch("/php/insert-data.php", {
        method: 'POST',
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(values)
    })
    .then(res => {
        return res.json();
    })
    .then(data => {
        alert(data);
    })
    .catch(err => {
        alert(err);
    })
}

form_.addEventListener("submit", (e) => {
    e.preventDefault();
    const object_ = {};
    const inps = [form_.elements];
    inps.forEach((element) => {
        for(let i = 0; i < element.length; i++) {
            if(element[i].type != "button" && element[i].type != "submit") {
                object_[element[i].name] = element[i].value;
            }
        }
    });
    sendData(object_);
})