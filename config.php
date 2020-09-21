<?php
	$http = 'http://';
	$urllocal = '/neuro_rdLab';
	$title = 'RD Lab';

	#Retorna a página
	$URL = str_replace($urllocal, '', $_SERVER['REQUEST_URI']);
	$geturl = explode('/', $URL);
	$params = count($geturl);
	$pagina = explode('?', $geturl[1]);
	$pagina = reset($pagina);
	$fileSys = 'index.php';

	#Identifica se é home ou inner page
	$classOnBody = 'p-inner';
	
	switch ($pagina) {
		case '' :
		case 'home' :
			$file = 'page_home.php';
			$title_page = $title;
			$classOnBody = 'p-home';
			break;
			
		case 'componentslist':
			$file = 'page_components.php';
			$title_page = 'Components - '.$title;
			break;
		
		case 'institucional':
			$file = 'page_institucional.php';
			$title_page = 'Institucional - '.$title;
			break;
		
		case 'carreiras':
			$file = 'page_carreiras.php';
			$title_page = 'Carreiras - '.$title;
			break;

		case 'analises':
			$file = 'page_analises.php';
			$title_page = 'Análises - '.$title;
			break;

		case 'certificacoes':
			$file = 'page_certificacoes.php';
			$title_page = 'Certificações - '.$title;
			break;
		
		case 'contato':
			$file = 'page_contato.php';
			$title_page = 'Contato - '.$title;
			break;

		case 'solicitar-analise':
			$file = 'page_solicitarAnalise.php';
			$title_page = 'Solicitação de Análise - '.$title;
			break;
		
		case 'lgpd':
			$file = 'page_lgpd.php';
			$title_page = 'LGPD - '.$title;
			break;
		
		default :
			header("HTTP/1.0 404 Not Found");
			$file = 'erro404.php';
			$title_page = 'Página não encontrada - '.$title;
			break;
	}

#Monta a base url
	$url_site = $http . $_SERVER['SERVER_NAME'] . $urllocal;
	$base_page = '<base href="' . $url_site . '/" />';
	include($fileSys);
?>