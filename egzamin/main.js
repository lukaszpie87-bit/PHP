function czerwony(){
    document.getElementById('wynik').style.color = 'red';
    czcionka();
}

function zielony(){
    document.getElementById('wynik').style.color = 'green';
    czcionka();
}

function niebieski(){
    document.getElementById('wynik').style.color = 'blue';
    czcionka();
}


function czcionka(){
    let rozmiar = document.getElementById('rozmiar').value;
    let pochylenie = document.getElementById('prosty').value;
    const wynik = document.getElementById('wynik');
    wynik.style.fontSize = rozmiar + '%';
    
    if(pochylenie == 'italic'){
        wynik.style.fontStyle = 'italic';
    }   else{
        wynik.style.fontStyle = 'normal';
    }
    
   
}

    