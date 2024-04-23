const checkbox1 = document.getElementById('checkbox1');
const checkbox2 = document.getElementById('checkbox2');
const checkbox3 = document.getElementById('checkbox3');
const checkbox4 = document.getElementById('checkbox4');
const checkbox5 = document.getElementById('checkbox5');
const checkbox6 = document.getElementById('checkbox6');
const imagem = document.getElementById('imagem');

checkbox1.addEventListener('change', function() {
    if (this.checked) {
        imagem.src = 'img/ia.jpg'; 
        imagem.classList.toggle('surge')
    } else {
        imagem.src = 'img/31ff8574-e55c-428c-bff1-c38e0ad86952.webp'; 
        imagem.classList.toggle('surge')
    }
});

checkbox2.addEventListener('change', function() {
    if (this.checked) {
        imagem.src = 'img/31ff8574-e55c-428c-bff1-c38e0ad86952.webp';
        imagem.classList.toggle('surge')
    } else {
        imagem.src = 'img/icons8-java.gif'; 
        imagem.classList.toggle('surge')
    }
});

checkbox3.addEventListener('change', function() {
    if (this.checked) {
        imagem.src = 'img/bot-python.webp'; 
        imagem.classList.toggle('surge')
    } else {
        imagem.src = 'img/cobra-e-serpente-imagem-animada-0012.gif';
        imagem.classList.toggle('surge')
    }
});
checkbox4.addEventListener('change', function() {
    if (this.checked) {
        imagem.src = 'img/bot-python.webp'; 
        imagem.classList.toggle('surge')
    } else {
        imagem.src = 'img/cobra-e-serpente-imagem-animada-0012.gif';
        imagem.classList.toggle('surge')
    }
});
checkbox5.addEventListener('change', function() {
    if (this.checked) {
        imagem.src = 'img/bot-python.webp'; 
        imagem.classList.toggle('surge')
    } else {
        imagem.src = 'img/cobra-e-serpente-imagem-animada-0012.gif';
        imagem.classList.toggle('surge')
    }
});
checkbox6.addEventListener('change', function() {
    if (this.checked) {
        imagem.src = 'img/bot-python.webp'; 
        imagem.classList.toggle('surge')
    } else {
        imagem.src = 'img/cobra-e-serpente-imagem-animada-0012.gif';
        imagem.classList.toggle('surge')
    }
});