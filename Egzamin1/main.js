function zamowienie() {
    let wynik = document.getElementById('script');
    let plikinput = document.getElementById('plikObraz');
    let kopie = document.getElementById('kopie').value;
    let rodzaj = document.querySelector('input[name="rodzaj"]:checked').value;

    let cena_jednostkowa = (rodzaj === "błyszczący") ? 1.5 : 2;
    let cena = kopie * cena_jednostkowa;

    let obraz = document.createElement("img");
    obraz.src = URL.createObjectURL(plikinput.files[0]);
    obraz.width = 100;
    obraz.alt = "obraz do sprzedaży";

    let pKopie = document.createElement("p");
    pKopie.innerHTML = "Liczba kopii: " + kopie;

    let pCena = document.createElement("p");
    pCena.innerHTML = "Cena: " + cena + " zł";

    wynik.appendChild(obraz);
    wynik.appendChild(pKopie);
    wynik.appendChild(pCena);
}
