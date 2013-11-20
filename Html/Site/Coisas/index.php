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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27759677-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
  window.___gcfg = {lang: 'pt-BR'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</head>

<body>

<div class="conteudo">
	<div class="cabecalho">
    	<h1>Fabricio Eduardo Reche</h1>
		<div class="g-plusone" data-size="tall" data-annotation="inline"></div>
    </div>
    <div class="menu">
        <ul class="lista">
            <?php
				$path="./";
				$diretorio=dir($path);
				
				$diretorios_ignorados = array("esse_primeiro_nao_pega_e_bugado","index.php", ".", "..", "bin", "css", "js", "aspnet_client", "robots.txt", "googledb6da38fc1fc7278.html");
				
				while ($arquivo = $diretorio->read()){
					if(!array_search($arquivo, $diretorios_ignorados)){
						echo "<li><a href='".$arquivo."'>".$arquivo."</a></li>\n";
					}
				}
				$diretorio->close();
            ?> 
        </ul>
    </div>
</div>

</body>
</html>