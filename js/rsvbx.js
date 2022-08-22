const openrsv = document.getElementById("oprsvbx");
const formr = document.getElementById("boxrsv");
const closersv = document.getElementById("cancelrsv");

openrsv.addEventListener('click', () => {
    formr.classList.add('showrsvbx');
})
closersv.addEventListener('click', () => {
    formr.classList.remove('showrsvbx');
})