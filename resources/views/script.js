

// set hash
let submitBtn = document.getElementById('submitBtn');

submitBtn.addEventListener("click", () => {
    let inputName = document.getElementById('inputName').value;
    window.location.hash = inputName + id.replace('#', '');
}, false);



// event on hash change 
window.addEventListener("hashchange", hasher, false);
// hash handler 
const hasher = () => {
    if (location.hash === '#faisal') {
        console.log("ramdan karem faisal!");
    } else {
        console.log("hello");
    }
}