let redBtn = document.getElementById('reme1')
let blueBtn = document.getElementById('reme2')
let blackBtn = document.getElementById('reme3')
let imgchange = document.getElementById('imgchange')

redBtn.onclick = function () {
  imgchange.src = './imagenes/remera1.jpg'
}

blueBtn.onclick = function () {
  imgchange.src = './imagenes/remera1.1.jpg'
}

blackBtn.onclick = function () {
  imgchange.src = './imagenes/remera1.2.jpg'
}
