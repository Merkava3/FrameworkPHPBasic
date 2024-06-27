import  {UrlUserLogout,UrlUserType} from "./utils.js";


function verificarAcceso(url) {
    fetch(UrlUserType)
        .then(response => response.json())
        .then(text => {
            console.log(text.tipo_usuario)
            if(text.tipo_usuario !== "Tutor"){ 
                alert("no puedes entrar aca");            
                window.location.href = 'dashboard_estudiante.html'; 
                
            }
             
            console.log(window.location.href);
            
            
        })
        .catch(error => console.error('Error al verificar el acceso:', error));
}

// Llamar a la función con la URL del dashboard correspondiente
verificarAcceso(window.location.href);


document.getElementById('logout-link').addEventListener('click', function(e) {
    e.preventDefault();
    fetch(UrlUserLogout)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = 'index.html';
            } else {
                console.error('Error al cerrar sesión:', data.message);
            }
        })
        .catch(error => console.error('Error al cerrar sesión:', error));
});

fetch('session_check.php')
    .then(response => response.json())
    .then(data => {
        
        if (!data.loggedin) {          
            window.location.href = 'index.html';
        }
    });
