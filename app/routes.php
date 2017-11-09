<?php

$app->get('/{age}', function ($request, $response) {
	d($request);
	d($response);
    $name = $request->getAttribute('age');
    $response->getBody()->write("Hello, $name");

    return $response;
});