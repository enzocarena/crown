// Cerrar el menú si se hace clic fuera de él
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName('dropdown-content')
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i]
      if (openDropdown.style.display === 'block') {
        openDropdown.style.display = 'none'
      }
    }
  }
}
