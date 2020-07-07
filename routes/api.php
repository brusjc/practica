<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//**********
//* Grados *
//**********
Route::get('/gradosShow', 'GradoController@show')->name('GradoShow');


//***********
//* Pruebas *
//***********
//Route::get('/examenelemental', 'PruebaController@elementalapi')->name('examenelementalApi');
Route::get('/pruebasxgrado/{grado}', 'PruebaController@showXGrado')->name('PruebasShowXGrado');
Route::get('/pruebasShowXCodigo/{codigo}', 'PruebaController@showXCodigo')->name('PruebasShowXCodigo');
Route::get('/pruebasShowXId/{id}', 'PruebaController@showXId')->name('PruebasShowXId');
Route::get('/pruebasShow', 'PruebaController@show')->name('PruebasShow');

Route::get('/examenoral', 'PruebaController@oralapi')->name('examenoral');
Route::get('/examenmitja', 'PruebaController@mitjaapi')->name('examenmitja');
Route::get('/examensuperior', 'PruebaController@superiorapi')->name('examensuperior');


//************
//* Examenes *
//************
Route::get('/examenStore/{prueba}', 'ExamenController@store')->name('ExamenStore');
Route::get('/examenUpdateTotal/{total}/{id}', 'ExamenController@updateTotal')->name('ExamenUpdateTotal');
Route::get('/examenUpdateContestadas/{examen}', 'ExamenController@update')->name('ExamenUpdateContestadasTotal');

Route::get('/examenXPrueba/{prueba}', 'ExamenController@showXPrueba')->name('ExamenXPrueba');
Route::get('/examenesShowXCodigo/{codigo}', 'ExamenController@showXCodigo')->name('showXCodigo');
Route::get('/examenXId/{id}', 'ExamenController@showXId')->name('ExamenShowXId');
Route::get('/examenupdate/{resultado}/{id}', 'ResultadoController@update')->name('ResultadoUpdate');


//*********
//* Temas *
//*********
Route::get('/temaapi/{prueba}', 'TemaController@temasxpruebaapi')->name('TemasxPruebaApi');
Route::get('/temasmasterapi/{prueba}', 'TemaController@temasmasterapi')->name('TemasMasterApi');


//************
//* Subtemas *
//************
Route::get('/subtemaXArea/{area}', 'SubtemaController@showXArea')->name('SubtemaXArea');
Route::get('/subtemas/{id}', 'SubtemaController@showXId')->name('SubtemaXId');


//****************
//* Temanombres *
//****************
Route::get('/temanombreapi/{tema}', 'TemanombreController@show');
Route::get('/temanombrexidapi/{id}', 'TemanombreController@temanombrexidapi');


//*********
//* Areas *
//*********
Route::get('/areaNuevoApi/{examen}/{tema}/{nombre}/{porcentaje}', 'AreaController@store')->name('AreaNuevoApi');
Route::get('/areaUpdateTotal/{total}/{area}', 'AreaController@updateTotal')->name('AreaUpdateTotal');
Route::get('/areaShow/{area}', 'AreaController@show')->name('AreaShow');
Route::get('/areasXExamen/{id}', 'AreaController@showXExamen')->name('AreaShowXExamen');
Route::get('/areaupdate/{area}', 'AreaController@update')->name('AreaUpdate');


//************
//* Subareas *
//************
Route::get('/subareaNuevoApi/{area_id}/{subtema_id}/{nombre_id}/{total}/{contestadas}/{orden}/{nota}', 'SubareaController@store')->name('SubareaStore');
Route::get('/subareasxareaapi/{area}', 'SubareaController@showXArea')->name('SubareaShowXArea');
Route::get('/subareaShow/{subarea}', 'SubareaController@show')->name('SubareaShow');
Route::get('/subareaUpdateTotal/{total}/{subarea}', 'SubareaController@updateTotal')->name('SubareaUpdateTotal');
Route::get('/subareaUpdateContestada/{subarea}', 'SubareaController@updateContestada')->name('SubareaUpdateContestada');
Route::get('/subareaUpdate/{subarea}', 'SubareaController@update')->name('SubareaUpdate');

//*************
//* Preguntas *
//*************
Route::get('/preguntasShowXSubarea/{subarea}', 'PreguntaController@showXSubarea')->name('PreguntaShowXSubarea');
Route::get('/preguntasShow/{subatema}', 'PreguntaController@show')->name('PreguntasShow');
Route::get('/preguntaXId/{id}', 'PreguntaController@showXId')->name('PreguntaXId');


//**************
//* Resultados *
//**************
Route::get('/resultadoNuevoApi/{subarea}/{pregunta}', 'ResultadoController@store')->name('ResultadoStore');
Route::get('/resultadoNuevo/{subtema}/{pregunta}', 'ResultadoController@store');
Route::get('/resultadoShowApi/{subarea}', 'ResultadoController@showXSubarea')->name('ResultadoShowXSubarea');
Route::get('/resultadoxpregunta/{subarea}/{pregunta}', 'ResultadoController@showXPregunta')->name('ResultadoXPregunta');
Route::get('/resultadoSinResponder/{subarea}', 'ResultadoController@showSinResponder')->name('ResultadoSinResponder');
Route::get('/resultadoXId/{id}', 'ResultadoController@showXId')->name('ResultadoXId');
Route::get('/resultadoUpdateContestada/{$resultado}', 'ResultadoController@updateContestada')->name('ResultadoUpdateContestada');





//**************
//* Enunciados *
//**************
Route::get('/enunciadoxpreguntaApi/{id}', 'EnunciadoController@show');



//**********
//* Master *
//**********
Route::get('/pruebasmasterapi', 'PruebaController@pruebasmasterapi');


//********
//* Test *
//********

Route::get('/examenesXGrado/{grado}', 'ExamenController@examenesXGradoApi')->name('examenesXGrado');




Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes



});  //Cierre del middleware
