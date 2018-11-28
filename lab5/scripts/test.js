document.getElementById('get-btn').addEventListener('click',getAjax);

function getAjax(){
    const xhr = new XMLHttpRequest();
    console.log(xhr);
    xhr.onload = ()=>{
        if(xhr.status === 200){
            document.getElementById('oferta').textContent = xhr.responseText;
        }
    }
    xhr.open('GET','text.txt',true);
    xhr.send();
}