<?php
	
Auth::routes();
Auth::routes(['verify' => true]);  //Para verificación de email

Route::get('lang/{lang}', function($lang) {
  \Session::put('lang', $lang);
  return \Redirect::back();
})->middleware('web')->name('change_lang');

Route::get('/', function(){ return view('paginas.home'); })->name('home');
Route::get('/politica_de_cookies', function(){ return view('paginas.LOPD.politica_de_cookies'); })->name('cookies');
Route::get('/politica_de_privacidad', function(){ return view('paginas.LOPD.politica_de_privacidad'); })->name('privacidad');
//Route::get('/', function () { return view('paginas.home'); })->name('home');
Route::get('/home', function () { return view('paginas.prueba'); });
Route::get('/practicainicio/{pagina}', 'PracticaController@inicioPracticas')->name('InicioPracticas');
Route::get('/practica/{id}', 'PracticaController@practicaXId')->name('PracticaXId');
Route::put('/practica2/{id}', 'PracticaController@practica2')->name('Practica2');
Route::get('/practicaVuelta/{ejercicio}', 'PracticaController@practicaVuelta')->name('PracticaVuelta');

//Confirmación registro usuario
Route::get('/register/verify/{code}', 'EmailsController@verify');


//***************
//* Vocabulario *
//***************
Route::get('/vocabulario', function(){ return view('paginas.vocabulario.index'); });
//Route::get('/vocabulario', 'VocabularioController@vocabulario');
Route::get('/el-nom-de-les-lletres', function(){ return view('paginas.vocabulario.el-nom-de-les-lletres'); });
Route::get('/parts-del-dia', function(){ return view('paginas.vocabulario.parts-del-dia'); });
Route::get('/dies-de-la-setmana', function(){ return view('paginas.vocabulario.dies-de-la-setmana'); });
Route::get('/mesos-any', function(){ return view('paginas.vocabulario.mesos-any'); });
Route::get('/les-hores', function(){ return view('paginas.vocabulario.les-hores'); });
Route::get('/les-relacions-convencionals-i-de-parentiu', function(){ return view('paginas.vocabulario.les-relacions-convencionals-i-de-parentiu'); });
Route::get('/cos-huma', function(){ return view('paginas.vocabulario.cos-huma'); });
Route::get('/avui-qui-cuina', function(){ return view('paginas.vocabulario.avui-qui-cuina'); });
Route::get('/avui-qui-cuina-videos', function(){ return view('paginas.vocabulario.avui-qui-cuina-videos'); });
Route::get('/parem-taula', function(){ return view('paginas.vocabulario.parem-taula'); });
Route::get('/entre-teles', function(){ return view('paginas.vocabulario.entre-teles'); });
Route::get('/ciutat', function(){ return view('paginas.vocabulario.ciutat'); });
Route::get('/hogar', function(){ return view('paginas.vocabulario.hogar'); });
Route::get('/numeros', function(){ return view('paginas.vocabulario.numeros'); });


//**************
//* Ortografía *
//**************
Route::get('/ortografia', function(){ return view('paginas.ortografia.index'); });
Route::get('/vocalisme', function(){ return view('paginas.ortografia.vocalisme'); });
Route::get('/byv', function(){ return view('paginas.ortografia.byv'); });
Route::get('/acentuacion', function(){ return view('paginas.ortografia.acentuacion'); });
Route::get('/eio', function(){ return view('paginas.ortografia.eio'); });
Route::get('/dieresis', function(){ return view('paginas.ortografia.dieresis'); });
Route::get('/diftong', function(){ return view('paginas.ortografia.diftong'); });
Route::get('/diacritic', function(){ return view('paginas.ortografia.diacritic'); });
Route::get('/apostrof', function(){ return view('paginas.ortografia.apostrof'); });
Route::get('/contraccio', function(){ return view('paginas.ortografia.contraccio'); });


//***********
//* Dictats *
//***********
Route::get('/dictats', function(){ return view('paginas.dictats.index'); });
Route::put('/comprovadictat', 'DictatController@comprovaDictat');
Route::get('/dictat200906mm', function(){ return view('paginas.dictats.dictat200906mm'); });
Route::get('/dictat200906mv', function(){ return view('paginas.dictats.dictat200906mv'); });


//********
//* Noms *
//********
Route::get('/noms', function(){ return view('paginas.noms.index'); });


//************
//* Examenes *
//************
Route::get('/examenes-jqcv', 'PruebaController@pruebasjqcv')->name('examenesjqcv');

Route::get('/examenelemental', 'PruebaController@pruebaselemental')->name('ExamenElemental');
Route::get('/examenoral', 'PruebaController@pruebasoral')->name('ExamenOral');
Route::get('/examenmitja', 'PruebaController@pruebasmitja')->name('ExamenMitja');
Route::get('/examensuperior', 'PruebaController@pruebassuperior')->name('ExamenSuperior');
Route::get('/examena1', function(){ return view('paginas.examenes.examena1'); });
Route::get('/examena2', 'PruebaController@pruebasa2')->name('ExamenA2');
Route::get('/examenb1', 'PruebaController@pruebasb1')->name('ExamenB1');
Route::get('/examenb2', 'PruebaController@pruebasb2')->name('ExamenB2');
Route::get('/examenc1', 'PruebaController@pruebasc1')->name('ExamenC1');
Route::get('/examenc2', 'PruebaController@pruebasc2')->name('ExamenC2');

Route::get('/examen_elemental/{codigo}', 'PruebaController@prueba_elemental')->name('Examen_Elemental');
Route::get('/examen_oral/{codigo}', 'PruebaController@prueba_oral')->name('Examen_Oral');
Route::get('/examen_mitja/{codigo}', 'PruebaController@prueba_mitja')->name('Examen_Mitja');
Route::get('/examen_superior/{codigo}', 'PruebaController@prueba_superior')->name('Examen_Superior');
Route::get('/examen_a2/{codigo}', 'PruebaController@prueba_a2')->name('Examen_A2');
Route::get('/examen_b1/{codigo}', 'PruebaController@prueba_b1')->name('Examen_B1');
Route::get('/examen_b2/{codigo}', 'PruebaController@prueba_b2')->name('Examen_B2');
Route::get('/examen_c1/{codigo}', 'PruebaController@prueba_c1')->name('Examen_C1');
Route::get('/examen_c2/{codigo}', 'PruebaController@prueba_c2')->name('Examen_C2');





//*************
//* Plantilla *
//*************
Route::get('/plantilla', function(){ return view('themes/lte/plantilla'); });

	
//***********************
//* Páginas con usuario *
//***********************
Route::group(['middleware' => 'auth'], function () {

	//***********
	//* Pruebas *
	//***********
	Route::get('/pruebanueva', 'ExamenController@create');


	//************
	//* Examenes *
	//************

	Route::get('/examennuevo/{codigo}', 'ExamenController@crear')->name('ExamenCrear')->middleware('verified');
	Route::get('/examenes/{prueba}', 'ExamenController@show');
	Route::get('/exameninicio/{id}', 'ExamenController@examenXId')->name('ExamenXId');
	Route::get('/examen/{subarea}', 'PreguntaController@preguntaXSubarea')->name('Examen');
	Route::get('/examenz/{subarea}', 'PreguntaController@preguntaXSubareaz')->name('Examenz');
	Route::put('/examen2/{id}', 'ResultadoController@examen2')->name('ResultadoExamen2');
	Route::put('/examenz2/{id}', 'ResultadoController@examenz2')->name('ResultadoExamenz2');
	Route::get('/examensubareas/{prueba}', 'SubareaTemaController@showXExamen')->name('ShowXExamen');


	//**********
	//* Master *
	//**********
	Route::get('/pruebasmaster', 'PruebaController@pruebasmaster')->name('PruebasMaster');
	Route::get('/temasmaster/{prueba}', 'TemaController@temasmaster')->name('TemasMaster');
	Route::get('/masterExamen/{id}', 'ExamenController@examenMasterXId')->name('MasterExamen');
	Route::get('/masterPreguntas/{subtema}', 'PreguntaController@preguntasXSubtema')->name('MasterPreguntas');
	Route::get('/masterVerificador/{subtema}', 'PreguntaController@verificadorXSubtema')->name('MasterVerificador');
	Route::put('/masterVerificador2/{subtema}', 'PreguntaController@verificador2')->name('MasterVerificador2');


	//***************
	//* Comentarios *
	//***************
	Route::middleware(['auth'])->group(function() {
	Route::get('/posts', 'PostController@posts')->name('posts');
	Route::get('/post/{id}', 'PostController@postXId')->name('postXId');
	Route::post('/nuevocomentario/{post}', 'PostcommentController@store')->name('postNuevo');


	Route::get('/comentarios', 'ComentarioController@comentarios')->name('comentarios');
	Route::get('/comentario0', function(){ return view('paginas.comentarios.comentario0'); });
	Route::post('/comentario1', 'ComentarioController@comentario1')->name('comentario1');

});


	//***********
	//* Pruebas *
	//***********
	//Route::get('/enpruebas/{subarea}', 'PreguntaController@showXSubarea');
	//Route::get('/enpruebas', 'PreguntaController@pruebaemail');
	//Route::get('/enpruebas1/{id}', function(){ return view('paginas.dictats.comprovadictat'); });


});


