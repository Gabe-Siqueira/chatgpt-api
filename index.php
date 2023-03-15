<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ChatGPT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>ChatGPT</h1>
    <form id="form-pergunta">
		<label for="pergunta">Digite sua pergunta:</label></br>
        <input type="text" id="pergunta" name="pergunta" size="60"></br>
        <input type="submit" value="Enviar">
    </form>
	</br>
    <div id="resposta"></div>
    
    <script>
        $(document).ready(function() {
            $("#form-pergunta").submit(function(event) {
                event.preventDefault(); // evita que o formulário seja enviado via HTTP POST
                var pergunta = $("#pergunta").val();
                $.ajax({
                    url: "chat.php",
                    method: "POST",
                    data: { pergunta: pergunta },
                    success: function(response) {
                        // $("#resposta").html(response);
                        $("#pergunta").val("");
						$('#resposta').append('<strong>' + pergunta + '</strong></br>');
						$('#resposta').append(response + '</br>');
						$('#resposta').append('</br>');
                    }
                });
            });
        });
    </script>
</body>
</html>
