const blocco = document.querySelector('.blocco');
const ordini = document.querySelector('.ordini');

const tot = document.querySelector('.totale');
let prezzo_totale = 0;

let flag1 = 0;
let flag2 = 'nulla';

let nPiatto1 = 0;
let nPiatto2 = 0;
let nPiatto3 = 0;
let nPiatto4 = 0;
let nPiatto5 = 0;
let nPiatto6 = 0;




document.querySelectorAll('.card_ordine').forEach((e) => {
    e.classList.add('hide');
});

document.querySelectorAll('.tavoli_numerati').forEach(function(e) {
    e.addEventListener('click', function() {
        removeSelection();
        this.classList.add('selected');
        flag1 = this;
        blocco.classList.add('hide');
        ordini.classList.remove('hide');
    })
});
document.querySelectorAll('.infoPrezzi').forEach(function(e) {
    e.addEventListener('click', function() {
        flag2 = this.id;
        // console.log(flag1);
        // console.log(flag2);
        writeReceipe(flag1.innerHTML, flag2);





        console.log(nPiatto1);
console.log(nPiatto2);
console.log(nPiatto3);
console.log(nPiatto4);
console.log(nPiatto5);
console.log(nPiatto6);
console.log('fine');
    })
});

function writeReceipe(nTavolo, nomePiatto) {
    document.querySelector('.resoconto_vuoto').classList.add('hide');
    document.querySelectorAll('.card_ordine').forEach((e) => {
        e.classList.remove('hide');
        
    });
    card_ordine_1 = document.querySelector('.card_ordine_1');
    card_ordine_2 = document.querySelector('.card_ordine_2');
    card_ordine_3 = document.querySelector('.card_ordine_3');
    card_ordine_4 = document.querySelector('.card_ordine_4');
    card_ordine_5 = document.querySelector('.card_ordine_5');
    card_ordine_6 = document.querySelector('.card_ordine_6');
    
    let prezzo = prezzoC(nomePiatto);
    prezzo_totale += prezzo;

    let qPiattoOrdinato = qPiatto(nomePiatto);

    tot.innerHTML = `Totale: ${prezzo_totale} €`;

    if(nTavolo == 1)
    { 
        card_ordine_1.innerHTML += `<div class="dettaglio_ordine">
                <p class="ordine_nome">${nomePiatto}</p>
                <p class="ordine_prezzo">${prezzo}</p>
            </div>
            `;
    }
    else if(nTavolo == '2') 
    {   
        card_ordine_2.innerHTML += 
            `
            <div class="dettaglio_ordine">
                <p class="ordine_nome">${nomePiatto}</p>
                <p class="ordine_prezzo">${prezzo}</p>
            </div>
                `;
    }
    else if(nTavolo == '3') 
        {
            card_ordine_3.innerHTML += 
            `<div class="dettaglio_ordine">
                <p class="ordine_nome">${nomePiatto}</p>
                <p class="ordine_prezzo">${prezzo}</p>
            </div>
                `;
        }
    else if(nTavolo == '4') 
        {
            card_ordine_4.innerHTML += 
            `<div class="dettaglio_ordine">
                <p class="ordine_nome">${nomePiatto}</p>
                <p class="ordine_prezzo">${prezzo}</p>
            </div>
                `;
        }
    else if(nTavolo == '5') 
        {
            card_ordine_5.innerHTML += 
            `<div class="dettaglio_ordine">
                <p class="ordine_nome">${nomePiatto}</p>
                <p class="ordine_prezzo">${prezzo}</p>
            </div>
                `;
        }
    else if(nTavolo == '6') 
        {
            card_ordine_6.innerHTML += 
            `<div class="dettaglio_ordine">
                <p class="ordine_nome">${nomePiatto}</p>
                <p class="ordine_prezzo">${prezzo}</p>
            </div>
                `;
        }

}

function removeSelection() {
    document.querySelector('.tavoli_numerati1').classList.remove('selected');
    document.querySelector('.tavoli_numerati2').classList.remove('selected');
    document.querySelector('.tavoli_numerati3').classList.remove('selected');
    document.querySelector('.tavoli_numerati4').classList.remove('selected');
    document.querySelector('.tavoli_numerati5').classList.remove('selected');
    document.querySelector('.tavoli_numerati6').classList.remove('selected');
}


function prezzoC(nomePiatto) {
    if(nomePiatto == 'Pasta alle cozze')
        return 15;
    
    else if(nomePiatto == 'Lasagna')
        return 18;
    
    else if(nomePiatto == 'Risotto')
        return 11;
    
        else if(nomePiatto == 'Spaghetti')
        return 13;
    
    else if(nomePiatto == 'Pizza Margherita')
        return 8;
    
    else if(nomePiatto == 'Polenta')
        return 17;
    
    else return 20;
}


function qPiatto(nomePiatto) {
    if(nomePiatto == 'Pasta alle cozze')
        return nPiatto1++;
    
    else if(nomePiatto == 'Lasagna')
        return nPiatto2++;
    
    else if(nomePiatto == 'Risotto')
        return nPiatto3++;
    
        else if(nomePiatto == 'Spaghetti')
        return nPiatto4++;
    
    else if(nomePiatto == 'Pizza Margherita')
        return nPiatto5++;
    
    else if(nomePiatto == 'Polenta')
        return nPiatto6++;
    
    else return 405;
}