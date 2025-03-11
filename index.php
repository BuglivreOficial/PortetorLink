<?php
    session_start();
    if (isset($_GET['token'])) {
        $_SESSION['urls'] = $_GET['token'];
    }else{
        $_SESSION['urls'] = '0';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aguarde enquanto liberamos o link para download...</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif!important;
        }
        .container {
            width: 700px;
            margin:  auto;
            border: 1px solid #9c9c9c;
            padding:  2px;
            text-align:  center;
            background-color:  #fff;
        }

        .hed-go {
            height: 97px;
            width:  100%;
            background-image: url('public/img/topo.jpg');
            background-size: 100%;
            margin-bottom:  50px;
            background-repeat:  no-repeat;
        }

        .footer-go {
            height: 97px;
            width: 100%;
            background-image: url(public/img/rodape.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            margin-top:  50px;
        }

        body {
            margin:  0;
            background-color: #f3f3f3;
            font-family: sans-serif;
            color: #333;
        }

        button.download-btn {
            height: 50px;
            background-image:  url('public/img/download.gif');
            background-size:  100% 100%;
            padding:  0;
            border:  0;
            width: 150px;
            cursor:  pointer;
            outline:  none;
        }
    </style>
<script src="jquery.js"></script>
<script type="text/javascript">
    	// Função responsável por atualizar as frases
        function atualizar()
        {       
            $.get("query.php", function( data ) {
                $('#open').html(data);
            });
        }

        // Definindo intervalo que a função será chamada
        setInterval("atualizar()", 15000);

    
</script>
</head>
<body>

	<div class="container">
		<div class="conf">
			<div class="hed-go"></div>
            <div class="anuncios">
                    
                <!-- cole os codigos dos anuncios aqui! -->
                 <img src="public/img/a2.jpg" width="300px" style="max-width: 100%;">
                 <img src="public/img/a2.jpg" width="300px" style="max-width: 100%;">
                 <br>
                 <br>
                <!-- cole os codigos dos anuncios aqui! -->

            </div>

			<div class="openlink" id="open">
                <p>Carregando...</p>
				<img src="public/img/carregando.gif" alt="">			
			</div>
			
			<div class="footer-go"></div>
		</div>
	</div>
	
</body>
</html>