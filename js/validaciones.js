document.addEventListener("DOMContentLoaded", function() {
    var documentoInput = document.getElementById("documento");
    var documentoError = document.getElementById("documentoError");

    function validarDocumento() {
        var documentoValor = documentoInput.value.trim();
        
      
        if (/^\d+$/.test(documentoValor) && documentoValor.length >= 8 && documentoValor.length <= 13) {
        
            documentoInput.setCustomValidity("");
            documentoInput.style.borderColor = "";
            documentoError.textContent = "";
        } else {
      
            documentoInput.setCustomValidity("El documento debe contener solo números y tener entre 8 y 13 dígitos.");
            documentoInput.style.borderColor = "red";
            documentoError.textContent = "El documento debe contener solo números y tener entre 8 y 13 dígitos.";
        }
    }

    documentoInput.addEventListener("input", validarDocumento);

    documentoInput.addEventListener("blur", validarDocumento);

 
    var formulario = documentoInput.closest("form");
    formulario.addEventListener("submit", function() {
        validarDocumento();
    });
});

 
document.addEventListener("DOMContentLoaded", function() {
    var nombreInput = document.getElementById("nombre");
    var nombreError = document.getElementById("nombreError");

    function validarNombre() {
        var nombreValor = nombreInput.value.trim();
        
      
        if (/^[a-zA-Z\s]+$/.test(nombreValor)) {
         
            nombreInput.setCustomValidity("");
            nombreInput.style.borderColor = "";
            nombreError.textContent = "";
        } else {
         
            nombreInput.setCustomValidity("El nombre debe contener solo letras y espacios.");
            nombreInput.style.borderColor = "red";
            nombreError.textContent = "El nombre debe contener solo letras y espacios.";
        }
    }

    nombreInput.addEventListener("input", validarNombre);

    nombreInput.addEventListener("blur", validarNombre);

    var formulario = nombreInput.closest("form");
    formulario.addEventListener("submit", function() {
        validarNombre();
    });
});

// validaciones del telefono 
document.addEventListener("DOMContentLoaded", function() {
    var telefonoInput = document.getElementById("telefono");
    var telefonoError = document.getElementById("telefonoError");

    function validarTelefono() {
        var telefonoValor = telefonoInput.value.trim();
        
        
        if (/^\d{10}$/.test(telefonoValor)) {
          
            telefonoInput.setCustomValidity("");
            telefonoInput.style.borderColor = "";
            telefonoError.textContent = "";
        } else {
            
            telefonoInput.setCustomValidity("El teléfono debe contener solo 11 números.");
            telefonoInput.style.borderColor = "red";
            telefonoError.textContent = "El teléfono debe contener solo 11 números.";
        }
    }

    telefonoInput.addEventListener("input", validarTelefono);

    telefonoInput.addEventListener("blur", validarTelefono);

    var formulario = telefonoInput.closest("form");
    formulario.addEventListener("submit", function() {
        validarTelefono();
    });
});

// email verificacion 
document.addEventListener("DOMContentLoaded", function() {
    var emailInput = document.getElementById("email");
    var emailError = document.getElementById("emailError");

    function validarEmail() {
        var emailValor = emailInput.value.trim();
        
        
        if (emailValor.includes('@')) {
          
            emailInput.setCustomValidity("");
            emailInput.style.borderColor = "";
            emailError.textContent = "";
        } else {
         
            emailInput.setCustomValidity("El correo electrónico debe contener el carácter '@'.");
            emailInput.style.borderColor = "red";
            emailError.textContent = "El correo electrónico debe contener el carácter '@'.";
        }
    }

    emailInput.addEventListener("input", validarEmail);

    emailInput.addEventListener("blur", validarEmail);

    var formulario = emailInput.closest("form");
    formulario.addEventListener("submit", function() {
        validarEmail();
    });
});



// validacion de fecha 
document.addEventListener("DOMContentLoaded", function() {
    var fechaInput = document.getElementById("fecha");

   
    var fechaActual = new Date();
   
    var fechaMinima = fechaActual.toISOString().split('T')[0];
    
    var fechaMaxima = new Date(fechaActual);
    fechaMaxima.setMonth(fechaMaxima.getMonth() + 1);
    fechaMaxima = fechaMaxima.toISOString().split('T')[0];

   
    fechaInput.setAttribute("min", fechaMinima);
    fechaInput.setAttribute("max", fechaMaxima);
});
