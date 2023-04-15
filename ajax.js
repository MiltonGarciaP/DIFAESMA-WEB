$(document).ready(function() {
    // Escucha el evento submit del formulario
    $("#contact-form").submit(function(event) {
      // Previene el comportamiento predeterminado del formulario
      event.preventDefault();
      // Obtiene los datos del formulario
      var name = $("#name").val();
      var email = $("#email").val();
      var message = $("#message").val();
      // Envía los datos mediante AJAX
      $.ajax({
        type: "POST",
        url: "sendemail.php",
        data: {name: name, email: email, message: message},
        success: function(response) {
          // Muestra la respuesta del servidor
          $("#response").html(response);
          // Limpia los campos del formulario
          $("#name").val("");
          $("#email").val("");
          $("#message").val("");
        }
      });
    });
  });
  