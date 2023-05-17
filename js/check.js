const formbtn = document.querySelector(".btn");
const form = document.querySelector(".form");
const suc = document.querySelector('.suc');

formbtn.addEventListener('click', (event)=>{
    suc.style.display = "block";
    event.preventDefault();

    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.onload = function() {
        document.querySelector(".sucText").innerHTML = this.responseText;
      }
    xhr.open("GET", '../index.html')
    xhr.open("post", '../php/ruru.php');
    xhr.send(formData)
})
