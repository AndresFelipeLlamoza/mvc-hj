function confirmacion(e){
    if confirm ("¿Está seguro de que desea eliminar este registro?"); {
        return true;
    } else {
        e.preventDefault();
    }
}
let linkdelete = document.querySelectorAll(".table__item__link");
for (var i = 0; i < linkdelete.length; i++) {
    linkdelete[i].addEventListener('click', confirmacion);
}