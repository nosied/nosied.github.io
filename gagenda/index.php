<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
		TEMPLATE DEVELOPER: DEISON RIBEIRO CARDOSO 
		CONTACT: CONTATO@DEISONRIBEIRO.COM 
				 OR SOCIAL@VIRALIZA.ONLINE
		LOCATION: IGAPORÃ - BAHIA - BRAZIL
	-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="Deison Ribeiro ">
	<!-- SITE TITLE -->
	<title>Agenda da Prefeitura de Igaporã</title>

	<!-- STYLESHEETS -->
	<link rel="icon" type="image/png" href="http://igapora.ba.gov.br/files/config/brasao.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
	body{
		margin:0 !important;
	}
	.pmi-menu{
		width:100%;
		background-color:#CCC;
	}
	.frame{
		display:flex;
	}
	iframe{
		align-self:center;
		width:calc(100vw - 20px);
		height:calc(100vh - 70px);
		margin:0 auto;
		padding:0;
		border:0;
	}
	.navbar {
		position: relative;
		min-height: 70px !important;
		margin-bottom: 0px !important;
		border: 0px solid transparent !important;
	}
	.navbar-brand {
		float: left;
		height: 60px !important;
		padding: 0px 0px 0px 15px !important;
		font-size: 18px;
		line-height: 20px;
	}
	.navbar-brand img{
		height:100%;
		margin-top:5px !important;
		margin: auto;
		align-self:center;
	}
	@media (min-width:768px){
		.container{
			width:100% !important;
		}
		.navbar{
			border:0px !important;
		}
		.navbar-brand{
			width:200px !important;
			display:flex;
		}
		.navbar-nav>li>a {
			padding-top: 25px !important;
			padding-bottom: 25px !important;
		}
		
	}
@media (max-width:767px){
	.navbar {
		width:100%;
		position: fixed;
		min-height: 60px !important;
		margin-bottom: 0px !important;
		border: 0px solid transparent !important;
	}
	.frame{
		margin-top:60px;
	}
	.navbar-brand {
		float: left;
		height: 40px !important;
		padding: 0px 0px 0px 15px !important;
		font-size: 18px;
		line-height: 20px;
	}
	.navbar-brand img{
		height:100%;
		margin-top:5px;
	}
}
	</style>

</head>
<body data-spy="scroll" data-target="#rock-navigation">
<div class="pmi-menu">
	<div class="container">
	      <!-- Menu -->
	<div class="row">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Menu Prefeitura</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo da Prefeitura de Igaporã"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://igapora.ba.gov.br/">Site Prefeitura</a></li>
              <li><a href="http://igapora.ba.gov.br/noticias/">Notícias</a></li>
              <li><a href="http://igapora.ba.gov.br/ouvidoria/">Ouvidoria</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	</div>
</div>
</div>
<div class="frame">
	<iframe src="https://calendar.google.com/calendar/embed?src=dev.pmigapora%40gmail.com&ctz=America%2FFortaleza" style="border:solid 1px #777"  frameborder="0" scrolling="no"></iframe>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>