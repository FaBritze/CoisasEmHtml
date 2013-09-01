<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/estilo.css" rel="stylesheet"  />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		setInterval(altera_titulo, 1000);
	});
	
	function altera_titulo(){
		var data = new Date();
		document.title = data.toLocaleTimeString() + " " + data.toLocaleDateString();
	}
	
</script>
</head>

<body>

<div class="conteudo">
	<div class="cabecalho">
    	<h1>Fabricio Eduardo Reche</h1>
    </div>
    <div class="menu">
        <ul class="lista">
            <?php
				$path="./";
				$diretorio=dir($path);
				
				$diretorios_ignorados = array("corrigindo_bug...","index.php", ".", "..", "bin", "css", "js", "aspnet_client");
				
				while ($arquivo = $diretorio->read()){
					if(!array_search($arquivo, $diretorios_ignorados)){
						echo "<li><a href='".$arquivo."'>".$arquivo."</a></li>";
					}
				}
				$diretorio->close();
            ?> 
        </ul>
    </div>
</div>

</body>
</html>