let xhr = new XMLHttpRequest();

function buscaCep()
{
let cep = document.getElementById('cep').value;

    let requisicao = `http://localhost:8000/`;
    xhr.open('GET', url );

    xhr.onreadystatechange = () => {
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
                console.log(JSON.parse(xhr.responseText));
            }
        }
    };

    xhr.send();


    let url = `https://viacep.com.br/ws/${cep}/json`;
    xhr.open('GET', url );

    xhr.onreadystatechange = () => {
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
                console.log(JSON.parse(xhr.responseText));
            }
        }
    };

    xhr.send();

}


