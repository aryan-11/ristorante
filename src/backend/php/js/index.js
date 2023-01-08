const blocco = document.querySelector('.blocco');
const ordini = document.querySelector('.ordini');
// const container_piatto_singolo = document.querySelectorAll('.container_piatto_singolo');

let flag1 = 0;
let flag2 = 'nulla';

document.querySelectorAll('.card_ordine').forEach((e) => {
    e.classList.add('hide');
});

document.querySelectorAll('.tavoli_numerati').forEach(function(e) {
    e.addEventListener('click', function() {
        removeSelection();
        this.classList.add('selected');
        flag1 = this.innerHTML;
        // if(this.innerHTML == '1') 
        // {
        //     console.log('1 va');
        // }
        writeReceipe(this.innerHTML);
        blocco.classList.add('hide');
        ordini.classList.remove('hide');
    })
});
document.querySelectorAll('.infoPrezzi').forEach(function(e) {
    e.addEventListener('click', function() {
        flag2 = this.id;
        console.log(flag2);
    })
});

// document.querySelectorAll('.infoPrezzi').forEach((e) => {
//     e.addEventListener('click', () => {
//         console.log(this.innerHTML);
//         flag2 = this.id;
//         console.log(flag2);
//         console.log(flag1);
//     })
// })

function writeReceipe(nTavolo) {
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
    
    // console.log(nTavolo);    
    // if(nTavolo == 1)
    // { 
    //     card_ordine_1.innerHTML += `<p class="nome_tavolo">- Tavolo 1</p>`;
    // }
    // else if(nTavolo == '2') 
    // {   card_ordine_2.innerHTML += `<p class="nome_tavolo">- Tavolo 2</p>`;}
    // else if(nTavolo == '3') 
    //     {card_ordine_3.innerHTML += `<p class="nome_tavolo">- Tavolo 3</p>`;}
    // else if(nTavolo == '4') 
    //     {card_ordine_4.innerHTML += `<p class="nome_tavolo">- Tavolo 4</p>`;}
    // else if(nTavolo == '5') 
    //     {card_ordine_5.innerHTML += `<p class="nome_tavolo">- Tavolo 5</p>`;}
    // else if(nTavolo == '6') 
    //     {card_ordine_6.innerHTML += `<p class="nome_tavolo">- Tavolo 6</p>`;}
}

function removeSelection() {
    document.querySelector('.tavoli_numerati1').classList.remove('selected');
    document.querySelector('.tavoli_numerati2').classList.remove('selected');
    document.querySelector('.tavoli_numerati3').classList.remove('selected');
    document.querySelector('.tavoli_numerati4').classList.remove('selected');
    document.querySelector('.tavoli_numerati5').classList.remove('selected');
    document.querySelector('.tavoli_numerati6').classList.remove('selected');
}
