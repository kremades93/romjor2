// Jordi 10/7/2020 aquesta funció mira si el usuari no ha entrat res dins de la capça per posar el nom
function checkform() {
    if (document.getElementsByName("user")[0].value === "")
    {
        alert("Your name is not suitable");
        return false;
    }
}