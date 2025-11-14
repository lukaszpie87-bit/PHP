function wykonane(clickedButton){
    let element  = clickedButton.parentElement;
    element.style.textDecoration = "line-through";
}

function dodaj(){
    let zadanie = document.getElementById('zadanie');
    let lista = document.querySelector('ul');
    let new_zadanie = document.createElement("li");
    new_zadanie.innerHTML = `${zadanie.value}<button onclick='wykonane(this)'>Wykonane</button>`;
    lista.appendChild(new_zadanie);
}