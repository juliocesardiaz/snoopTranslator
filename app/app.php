<?php
	
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/SnoopTranslator.php";
	
	$app = new Silex\Application();
	
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	$app->get("/", function() use ($app) {
		return $app['twig']->render('form.html.twig');
	});
	
	$app->get("/view_translate", function() use ($app){
		$translator = new SnoopTranslator;
		$translatedPhrase = $translator->translate($_GET['phrase']);
		return $app['twig']->render('snoop_translate.html.twig', array('result' => $translatedPhrase));
	
		});
		
	return $app;
	
?>