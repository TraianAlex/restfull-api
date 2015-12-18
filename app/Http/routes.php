	<?php

Route::group(array('prefix' => 'api/v1.1'), function()
{
	Route::resource('makers', 'MakerController', ['except' => ['create', 'edit']]);

	Route::resource('vehicles', 'VehicleController', ['only' => ['index']]);

	Route::resource('makers.vehicles', 'MakerVehiclesController', ['except' => ['edit', 'create']]);

	Route::resource('files', 'FileController', ['except' => ['create', 'edit']]);

	Route::post('oauth/access_token', function()
	{
    	return response()->json(Authorizer::issueAccessToken());
	});
});