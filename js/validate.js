const form = document.getElementById('form');
const name = document.getElementById('name');
const number = document.getElementById('number');
const email = document.getElementById('email');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkinputs();
})

function checkinputs(){
    const nameValue = name.value.trim();
    const numberValue = number.value.trim();
    const emailValue = email.value.trim(); 

    if(nameValue === ""){
        settErrorFor(name, "Name cannot be empty");
    }else{
        setSuccessFor(name)
    }
}

function settErrorFor(input, message){
    const formControl = getSelection('box').parentElement;
    const small = formControl.querySelector("small");

    small.innerText(message);

    formControl.className = "form-control error";
}

function setSuccessFor(input, message){
    
}

