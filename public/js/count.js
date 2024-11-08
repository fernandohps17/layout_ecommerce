let contador = 0;

document.getElementById('sumarBtn').addEventListener('click', function() {
    contador += 1;
    document.getElementById('resultado').innerText = contador;
});

document.getElementById('restarBtn').addEventListener('click', function() {
    if (contador >= 1) {
        contador -= 1;
        document.getElementById('resultado').innerText = contador;
    } else {
        contador -= 0;
        document.getElementById('resultado').innerText = contador;
    }
});