let rotativas = document.getElementById("rotativas");

const frases =  [
'Airly — Smart care, real life.',

'Airly. Health, simplified.',

'Your safety, powered by Airly.',

'Airly. Where care meets tech.',

'Airly. Precision in every breath.'
]


let indice = 0;

function trocarFrase(){
    rotativas.style.opacity = 0;
    setTimeout(() => {
    rotativas.textContent = frases[indice];
    rotativas.style.opacity = 1;
    indice = (indice + 1) % frases.length;
}, 600);
}

trocarFrase();
setInterval(trocarFrase, 3000);



