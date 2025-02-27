const nombre = document.getElementById('nombre')
const telefono = document.getElementById('telefono')
const domicilio = document.getElementById('domicilio')
const correo = document.getElementById('correo')
//const comentarios = document.getElementById('comentarios')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (nombre.value === '' || nombre.value == null){//Si el nombre tiene espacio vacio o en blanco ingresado 
        messages.push('Un nombre es requerido')
    }
    if (telefono.value.length >10){
        messages.push('Telefono solo es de 10 digitos')
    }

    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(' , ')
    }
    
    
})



function confirmalerta()
{
if(confirm("Mensaje de confirmación.\r¿Estas de acuerdo con sus datos ingresados?"))
{
alert("Muy bien, sus datos han sido registrados.");

}//fin del if
else
{
alert("La action se ha cancelado.");
return false;
}//fin del else
}//fin de la funcion