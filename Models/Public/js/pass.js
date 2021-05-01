
     function verificarPassword() {
          var inputName = document.querySelector("#name").value;
          if (inputName.length >= 8) {
               console.log("Muy bien"); // Puedes colocar un alert() o nada.
	  }
	  else {
	       alert("Debes escribir mas de 8 caracteres");
	  }
     }
