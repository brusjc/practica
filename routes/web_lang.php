<?php
	
Auth::routes();
Auth::routes(['verify' => true]);  //Para verificación de emails

Route::get('lang/{lang}', function($lang) {
  \Session::put('lang', $lang);
  return \Redirect::back();
})->middleware('web')->name('change_lang');



Route::get('/es/', function(){ return view('paginas.es.home'); })->name('es_home');
Route::get('/va/', function(){ return view('paginas.va.home'); })->name('va_home');


Route::get('/', function(){ return view('paginas.home'); })->name('home');
Route::get('/home', function () { return view('paginas.home'); });
Route::get('/politica-de-cookies', function(){ return view('paginas.LOPD.politica-de-cookies'); })->name('cookies');
Route::get('/politica-de-privacidad', function(){ return view('paginas.LOPD.politica-de-privacidad'); })->name('privacidad');
Route::get('/practicainicio/{pagina}', 'PracticaController@inicioPracticas')->name('InicioPracticas');
Route::get('/practica/{id}', 'PracticaController@practicaXId')->name('PracticaXId');
Route::put('/practica1', 'PracticaController@practica1')->name('Practica1');
Route::put('/practica2', 'PracticaController@practica2')->name('Practica2');
Route::put('/practica3', 'PracticaController@practica3')->name('Practica3');
Route::get('/practicaVuelta/{ejercicio}', 'PracticaController@practicaVuelta')->name('PracticaVuelta');

//Confirmación registro usuario
Route::get('/register/verify/{code}', 'EmailsController@verify');


//***************
//* Vocabulario *
//***************
Route::get('/vocabulario', function(){ return view('paginas.vocabulario.index'); });
Route::get('/el-nom-de-les-lletres', function(){ return view('paginas.vocabulario.el-nom-de-les-lletres'); });
Route::get('/parts-del-dia', function(){ return view('paginas.vocabulario.parts-del-dia'); });
Route::get('/dies-de-la-setmana', function(){ return view('paginas.vocabulario.dies-de-la-setmana'); });
Route::get('/mesos-any', function(){ return view('paginas.vocabulario.mesos-any'); });
Route::get('/les-hores', function(){ return view('paginas.vocabulario.les-hores'); });
Route::get('/les-relacions-convencionals-i-de-parentiu', function(){ return view('paginas.vocabulario.relacions-de-parentiu'); });
Route::get('/avui-qui-cuina', function(){ return view('paginas.vocabulario.avui-qui-cuina'); });
Route::get('/avui-qui-cuina-videos', function(){ return view('paginas.vocabulario.avui-qui-cuina-videos'); });
Route::get('/parem-taula', function(){ return view('paginas.vocabulario.parem-taula'); });
Route::get('/entre-teles', function(){ return view('paginas.vocabulario.entre-teles'); });
Route::get('/ciutat', function(){ return view('paginas.vocabulario.ciutat'); });
Route::get('/casa', function(){ return view('paginas.vocabulario.casa'); });
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
Route::get('/dictat-mitja-junio-2009-mati', function(){ return view('paginas.dictats.dictat200906mm'); });
Route::get('/dictat-mitja-junio-2009-vesprada', function(){ return view('paginas.dictats.dictat200906mv'); });
Route::get('/dictat-mitja-junio-2010-mati', function(){ return view('paginas.dictats.dictat201006mm'); });
Route::get('/dictat-mitja-junio-2010-vesprada', function(){ return view('paginas.dictats.dictat201006mv'); });
Route::get('/dictat-mitja-novembre-2010-mati', function(){ return view('paginas.dictats.dictat201011mm'); });
Route::get('/dictat-mitja-novembre-2011-mati', function(){ return view('paginas.dictats.dictat201111mm'); });
Route::get('/dictat-mitja-novembre-2011-vesprada', function(){ return view('paginas.dictats.dictat201111mv'); });
Route::get('/dictat-superior-junio-2009', function(){ return view('paginas.dictats.dictat200906sm'); });
Route::get('/dictat-superior-junio-2010', function(){ return view('paginas.dictats.dictat201006sm'); });



//********
//* Noms *
//********
Route::get('/noms', function(){ return view('paginas.noms.index'); });


//************
//* Examenes *
//************
//Route::get('/examenes-jqcv', 'PruebaController@pruebasjqcv')->name('examenesjqcv');
//Route::get('/va/examenes-jqcv', 'PruebaController@pruebasjqcv')->name('va_examenesjqcv');

Route::get('/examenes-elemental', 'PruebaController@pruebas_elemental')->name('ExamenesElemental');
Route::get('/examenes-oral', 'PruebaController@pruebas_oral')->name('ExamenesOral');
Route::get('/examenes-mitja', 'PruebaController@pruebas_mitja')->name('ExamenesMitja');
Route::get('/examenes-superior', 'PruebaController@pruebas_superior')->name('ExamenesSuperior');
Route::get('/examenes-a1', function(){ return view('paginas.examenes.examenes-a1'); });
Route::get('/examenes-a2', 'PruebaController@pruebas_a2')->name('ExamenesA2');
Route::get('/examenes-b1', 'PruebaController@pruebas_b1')->name('ExamenesB1');
Route::get('/examenes-b2', 'PruebaController@pruebas_b2')->name('ExamenesB2');
Route::get('/examenes-c1', 'PruebaController@pruebas_c1')->name('ExamenesC1');
Route::get('/examenes-c2', 'PruebaController@pruebas_c2')->name('ExamenesC2');

Route::get('/examen_a2/{codigo}', 'PruebaController@prueba_a2')->name('Examen_A2');
Route::get('/examen-b1/{codigo}', 'PruebaController@prueba_b1')->name('Examen-B1');
Route::get('/examen_b2/{codigo}', 'PruebaController@prueba_b2')->name('Examen_B2');
Route::get('/examen_c1/{codigo}', 'PruebaController@prueba_c1')->name('Examen_C1');
Route::get('/examen_c2/{codigo}', 'PruebaController@prueba_c2')->name('Examen_C2');
Route::get('/examen_elemental/{codigo}', 'PruebaController@prueba_elemental')->name('Examen_Elemental');
Route::get('/examen_oral/{codigo}', 'PruebaController@prueba_oral')->name('Examen_Oral');
Route::get('/examen_mitja/{codigo}', 'PruebaController@prueba_mitja')->name('Examen_Mitja');
Route::get('/examen_superior/{codigo}', 'PruebaController@prueba_superior')->name('Examen_Superior');


//*** ES ***
Route::get('/{idm}/examenes-jqcv', 'PruebaController@idm_pruebasjqcv')->name('idm_examenesjqcv');

//Route::get('/es/examenes-jqcv', 'PruebaController@es_pruebasjqcv')->name('es_examenesjqcv');
Route::get('/es/examenes-a1', function(){ return view('paginas.es.examenes.examenes-a1'); });
Route::get('/es/examenes-a2', 'PruebaController@es_pruebas_a2')->name('es_ExamenesA2');
Route::get('/es/examenes-b1', 'PruebaController@es_pruebas_b1')->name('es_ExamenesB1');
Route::get('/es/examenes-b2', 'PruebaController@es_pruebas_b2')->name('es_ExamenesB2');
Route::get('/es/examenes-c1', 'PruebaController@es_pruebas_c1')->name('es_ExamenesC1');
Route::get('/es/examenes-c2', 'PruebaController@es_pruebas_c2')->name('es_ExamenesC2');
Route::get('/es/examenes-elemental', 'PruebaController@es_pruebas_elemental')->name('es_ExamenesElemental');
Route::get('/es/examenes-oral', 'PruebaController@es_pruebas_oral')->name('es_ExamenesOral');
Route::get('/es/examenes-mitja', 'PruebaController@es_pruebas_mitja')->name('es_ExamenesMitja');
Route::get('/es/examenes-superior', 'PruebaController@es_pruebas_superior')->name('es_ExamenesSuperior');

Route::get('/es/examen-a2/{codigo}', 'PruebaController@es_prueba_a2')->name('es_Examen_A2');
Route::get('/es/examen-b1/{codigo}', 'PruebaController@es_prueba_b1')->name('es_Examen-B1');
Route::get('/es/examen-b2/{codigo}', 'PruebaController@es_prueba_b2')->name('es_Examen_B2');
Route::get('/es/examen-c1/{codigo}', 'PruebaController@es_prueba_c1')->name('es_Examen_C1');
Route::get('/es/examen-c2/{codigo}', 'PruebaController@es_prueba_c2')->name('es_Examen_C2');
Route::get('/es/examen-elemental/{codigo}', 'PruebaController@es_prueba_elemental')->name('es_Examen_Elemental');
Route::get('/es/examen-oral/{codigo}', 'PruebaController@es_prueba_oral')->name('es_Examen_Oral');
Route::get('/es/examen-mitja/{codigo}', 'PruebaController@es_prueba_mitja')->name('es_Examen_Mitja');
Route::get('/es/examen-superior/{codigo}', 'PruebaController@es_prueba_superior')->name('es_Examen_Superior');







//*************
//* Plantilla *
//*************
Route::get('/plantilla', function(){ return view('themes/lte/plantilla'); });

	
//***********************
//* Páginas con usuario *
//***********************
Route::group(['middleware' => 'auth'], function () {

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


	//*** ES ***
	Route::get('/es/exameninicio/{id}', 'ExamenController@es_examenXId')->name('es_ExamenXId');
	Route::get('/es/examen/{subarea}', 'PreguntaController@es_preguntaXSubarea')->name('es_Examen');
	Route::get('/es/examennuevo/{codigo}', 'ExamenController@crear')->name('ExamenCrear')->middleware('verified');




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
	Route::get('/pruebanueva', 'ExamenController@create');
	//Route::get('/enpruebas/{subarea}', 'PreguntaController@showXSubarea');
	//Route::get('/enpruebas', 'PreguntaController@pruebaemail');
	//Route::get('/enpruebas1/{id}', function(){ return view('paginas.dictats.comprovadictat'); });
Route::get('/enpruebas2', function(){ return view('paginas.pruebas.cortina'); });
Route::get('/home2', function(){ return view('paginas.home2'); });

Route::get('/cos-huma', function(){ return view('paginas.vocabulario.cos-huma'); });


