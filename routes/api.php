<?php
use Illuminate\Support\Facades\Route;


Route::apiResource('users','Api\apicontroller');


Route::apiResource('posts','Api\apiPostController');


Route::apiResource('cidades','Api\apiCityController');


Route::apiResource('paises','Api\apiCountryController');


Route::apiResource('lazer','Api\apiHobbyController');


Route::apiResource('likes','Api\apiLikeController');


Route::apiResource('post_comentario','Api\apiPostComentController');


Route::apiResource('post_imagem','Api\apiPostImageController');


Route::apiResource('user_lazer','Api\apiUserHobbyController');


Route::apiResource('user_localizacao','Api\apiUserLocationController');


Route::apiResource('mensagens','Api\apiUserMessageController');


Route::apiResource('relacao','Api\apiUserRelacaoController');


Route::apiResource('seguir','Api\apiUserSeguirController');


Route::apiResource('Grupos','Api\apiGroupController');


