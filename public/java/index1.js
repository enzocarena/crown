let redBtn = document.getElementById("remera1.1");
let blueBtn = document.getElementById("remera1");
let blackBtn = document.getElementById("remera1.2");
let imgchange = document.getElementById("imgchange");

redBtn.onclick = function(){

    imgchange.src = "./imagenes/remera1.1.jpg";

}

blueBtn.onclick = function(){

    imgchange.src = "./imagenes/remera1.jpg";
    
}

blackBtn.onclick = function(){

    imgchange.src = "./imagenes/remera1.2.jpg";
    
}