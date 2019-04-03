<?php
// Routes

// If route is at /pages/(id#), then return that id number by checking with controller.php for definition of 'get_user'
$app->get('/pages[/{id}]', function ($request, $response, $args) {

    if (isset($args['id'])) {

    	$user_object = get_user($args['id']); 
    	if ($user_object) {
    		$args['user'] = $user_object;
    	} else {
    		$args['message'] = "That is not a valid user";
    	}
    } else {
    	$args['message'] = "You did not enter an ID";
    }

    return $this->view->fetch('page.twig', $args);
});


// If route is at root then display the home.twig file
$app->get('/', function ($request, $response) {

    // Render index view
    return $this->view->fetch('home.twig');
});

// If route is at about then diplay about.twig file
$app->get('/about', function ($request, $response) {

    // Render index view
    return $this->view->fetch('about.twig');
});

// If route is at form then redirect to form.php
$app->get('/form', function ($request, $response) {
    return $response->withRedirect('/form.php');
});

// If route is at submit then redirect to form.php
$app->get('/submit', function ($request, $response) {
    return $response->withRedirect('/form.php');
});

// If route is at list then redirect to list.php
$app->get('/list', function ($request, $response) {
    return $response->withRedirect('/list.php');
});

// If route is at formhelp then redirect to formhelp.twig
$app->get('/formhelp', function ($request, $response) {
    return $this->view->fetch('formhelp.twig');
});

// If route is at users then display user
$app->get('/user[/{name}]', function ($request, $response, $args) {

    if (isset($args['name'])) {

        $user_object = get_name($args['name']); 
        if ($user_object) {
            $args['user'] = $user_object;
        } else {
            $args['message'] = "That is not a valid user";
        }
    } else {
        $args['message'] = "You did not enter an ID";
    }

    return $this->view->fetch('page.twig', $args);
});
