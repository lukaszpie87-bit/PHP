function dodawanie(){
   let a = parseFloat(document.getElementById('pierwsza').value);
    let b = parseFloat(document.getElementById('druga').value);
    if (isNaN(a)||isNaN(b)){
        document.getElementById('odpowiedz').innerHTML = "Wprowadz liczby"
    }   else{
    let wynik = a + b ;
    document.getElementById('odpowiedz').innerHTML = `Wynik to ${wynik}`; 
}
}
function odejmowanie(){
    let a = parseFloat(document.getElementById('pierwsza').value);
    let b = parseFloat(document.getElementById('druga').value);
     if (isNaN(a)||isNaN(b)){
        document.getElementById('odpowiedz').innerHTML = "Wprowadz liczby"
    }   else{
    let wynik = a - b ;
    document.getElementById('odpowiedz').innerHTML = `Wynik to ${wynik}`; 
}
}
function mnozenie(){
    let a = parseFloat(document.getElementById('pierwsza').value);
    let b = parseFloat(document.getElementById('druga').value);
     if (isNaN(a)||isNaN(b)){
        document.getElementById('odpowiedz').innerHTML = "Wprowadz liczby"
    }   else{
    let wynik = a * b ;
    document.getElementById('odpowiedz').innerHTML = `Wynik to ${wynik}`; 
}
}
function dzielenie(){

    let a = parseFloat(document.getElementById('pierwsza').value);
    let b = parseFloat(document.getElementById('druga').value);
     if (isNaN(a)||isNaN(b)){
        document.getElementById('odpowiedz').innerHTML = "Wprowadz liczby"
    }   else{
    let wynik = a / b ;
    if(b == 0){
        document.getElementById('odpowiedz').innerHTML = "Nie dziel przez zero";
    } else{
    document.getElementById('odpowiedz').innerHTML = `Wynik to ${wynik}`; 
}
}}