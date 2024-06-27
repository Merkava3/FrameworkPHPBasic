import  {UrlUserLogout,UrlUserType} from "./utils.js";

async function verificarAcceso() {
    fetch(UrlUserType)
        .then(response => response.json())
        .then(text => {
            
            if(text.tipo_usuario !== "Estudiante"){                
                window.location.href = 'dashboard_tutor.html';
            }
             
            console.log(window.location.href);
            
            
        })
        .catch(error => console.error('Error al verificar el acceso:', error));
}

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
