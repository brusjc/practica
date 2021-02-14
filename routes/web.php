<?php

    
Auth::routes();
//Auth::routes(['verify' => true]);  //Para verificación de emails

//Confirmación registro usuario
Route::get('/register/verify/{id}/{code}', 'EmailsController@verify');

//Cambio de idioma
Route::get('lang/{lang}', function($lang) {
  \Session::put('lang', $lang);
  return \Redirect::back();
})->middleware('web')->name('change_lang');

Route::get('/{idm}/tabla-ejercicios/{id}', 'VocabularioController@tabla');


Route::get('/', 'HomeController@home2')->name('Home2');
Route::get('/{idm}/', 'HomeController@home')->name('Home3');
Route::get('/{idm}/home', 'HomeController@home')->name('Home');
Route::get('/{idm}/politica-de-cookies', 'HomeController@cookies')->name('cookies');
Route::get('/{idm}/politica-de-privacidad', 'HomeController@privacidad')->name('privacidad');


Route::get('/practicainicio/{pagina}', 'PracticaController@inicioPracticas')->name('InicioPracticas');
Route::get('/practica/{id}', 'PracticaController@practicaXId')->name('PracticaXId');
Route::put('/practica1', 'PracticaController@practica1')->name('Practica1');
Route::put('/practica2', 'PracticaController@practica2')->name('Practica2');
Route::put('/practica3', 'PracticaController@practica3')->name('Practica3');
Route::get('/practicaVuelta/{ejercicio}', 'PracticaController@practicaVuelta')->name('PracticaVuelta');


//***************
//* Vocabulario *
//***************
Route::get('/{idm}/vocabulario', 'VocabularioController@vocabulario')->name('Vocabulario');
Route::get('/{idm}/el-nom-de-les-lletres', 'VocabularioController@lletres')->name('Lletres');
Route::get('/{idm}/parts-del-dia', 'VocabularioController@partsDia')->name('PartsDia');
Route::get('/{idm}/dies-de-la-setmana', 'VocabularioController@diesSetmana')->name('DiesSetmana');
Route::get('/{idm}/les-hores', 'VocabularioController@hores')->name('Hores');
Route::get('/{idm}/numeros', 'VocabularioController@numeros')->name('Numeros');
Route::get('/{idm}/cos-huma', 'VocabularioController@cosHuma')->name('CosHuma');
Route::get('/{idm}/avui-qui-cuina', 'VocabularioController@cuina')->name('Cuina');
Route::get('/{idm}/parem-taula', 'VocabularioController@taula')->name('Taula');
Route::get('/{idm}/ciutat', 'VocabularioController@ciutat')->name('Ciutat');
Route::get('/{idm}/entre-teles', 'VocabularioController@teles')->name('Teles');
Route::get('/{idm}/hogar', 'VocabularioController@casa')->name('casa');
Route::get('/{idm}/relacions-de-parentiu', 'VocabularioController@parentiu')->name('parentiu');
Route::get('/{idm}/mesos-any', 'VocabularioController@mesos')->name('Mesos');


//**************
//* Ortografía *
//**************
Route::get('/{idm}/ortografia', 'OrtografiaController@ortografia')->name('Ortografia');
Route::get('/{idm}/vocalisme', 'OrtografiaController@vocalisme')->name('Vocalisme');
Route::get('/{idm}/byv', 'OrtografiaController@byv')->name('byv');
Route::get('/{idm}/acentuacion', 'OrtografiaController@acentuacion')->name('Acentuacion');
Route::get('/{idm}/eio', 'OrtografiaController@eio')->name('eio');
Route::get('/{idm}/dieresis', 'OrtografiaController@dieresis')->name('dieresis');
Route::get('/{idm}/diptong', 'OrtografiaController@diptong')->name('diptong');
Route::get('/{idm}/diacritic', 'OrtografiaController@diacritic')->name('diacritic');
Route::get('/{idm}/apostrof', 'OrtografiaController@apostrof')->name('apostrof');
Route::get('/{idm}/contraccio', 'OrtografiaController@contraccio')->name('contraccio');


//***********
//* Dictats *
//***********
Route::get('/{idm}/dictats', 'DictatController@dictats')->name('dictats');
Route::get('/{idm}/dictat-mitja-junio-2009-mati', 'DictatController@dictat200906mm')->name('dictat200906mm');
Route::get('/{idm}/dictat-mitja-junio-2009-vesprada', 'DictatController@dictat200906mv')->name('dictat200906mv');
Route::get('/{idm}/dictat-mitja-junio-2010-mati', 'DictatController@dictat201006mm')->name('dictat201006mm');
Route::get('/{idm}/dictat-mitja-junio-2010-vesprada', 'DictatController@dictat201006mv')->name('dictat201006mv');
Route::get('/{idm}/dictat-mitja-novembre-2010-mati', 'DictatController@dictat201011mm')->name('dictat201011mm');
Route::get('/{idm}/dictat-mitja-novembre-2011-mati', 'DictatController@dictat201111mm')->name('dictat201111mm');
Route::get('/{idm}/dictat-mitja-novembre-2011-vesprada', 'DictatController@dictat201111mv')->name('dictat201111mv');
Route::get('/{idm}/dictat-superior-junio-2009-mati', 'DictatController@dictat200906sm')->name('dictat200906sm');
Route::get('/{idm}/dictat-superior-junio-2010-mati', 'DictatController@dictat201006sm')->name('dictat201006sm');
Route::put('/comprovadictat', 'DictatController@comprovaDictat');



//********
//* Noms *
//********
Route::get('/{idm}/noms', 'NomController@noms')->name('noms');
Route::get('/noms', function(){ return view('paginas.noms.index'); });


//************
//* Examenes *
//************
Route::get('/{idm}/examenes-jqcv', 'PruebaController@pruebasjqcv')->name('examenes-jqcv');
Route::get('/{idm}/examenes-a1', 'PruebaController@pruebas_a1')->name('ExamenesA1');
Route::get('/{idm}/examenes-a2', 'PruebaController@pruebas_a2')->name('ExamenesA2');
Route::get('/{idm}/examenes-b1', 'PruebaController@pruebas_b1')->name('ExamenesB1');
Route::get('/{idm}/examenes-b2', 'PruebaController@pruebas_b2')->name('ExamenesB2');
Route::get('/{idm}/examenes-c1', 'PruebaController@pruebas_c1')->name('ExamenesC1');
Route::get('/{idm}/examenes-c2', 'PruebaController@pruebas_c2')->name('ExamenesC2');
Route::get('/{idm}/examenes-elemental', 'PruebaController@pruebas_elemental')->name('ExamenesElemental');
Route::get('/{idm}/examenes-oral', 'PruebaController@pruebas_oral')->name('ExamenesOral');
Route::get('/{idm}/examenes-mitja', 'PruebaController@pruebas_mitja')->name('ExamenesMitja');
Route::get('/{idm}/examenes-superior', 'PruebaController@pruebas_superior')->name('ExamenesSuperior');

Route::get('/{idm}/examen-a2/{codigo}', 'PruebaController@prueba_a2')->name('Examen_A2');
Route::get('/{idm}/examen-b1/{codigo}', 'PruebaController@prueba_b1')->name('Examen-B1');
Route::get('/{idm}/examen-b2/{codigo}', 'PruebaController@prueba_b2')->name('Examen_B2');
Route::get('/{idm}/examen-c1/{codigo}', 'PruebaController@prueba_c1')->name('Examen_C1');
Route::get('/{idm}/examen-c2/{codigo}', 'PruebaController@prueba_c2')->name('Examen_C2');
Route::get('/{idm}/examen-elemental/{codigo}', 'PruebaController@prueba_elemental')->name('Examen_Elemental');
Route::get('/{idm}/examen-oral/{codigo}', 'PruebaController@prueba_oral')->name('Examen_Oral');
Route::get('/{idm}/examen-mitja/{codigo}', 'PruebaController@prueba_mitja')->name('Examen_Mitja');
Route::get('/{idm}/examen-superior/{codigo}', 'PruebaController@prueba_superior')->name('Examen_Superior');



//************************
//* Examenes con usuario *
//************************
Route::get('/examennuevo/{codigo}', 'ExamenController@crear')->name('ExamenCrear');
Route::get('/exameninicio/{id}', 'ExamenController@examenXId')->name('ExamenXId');
Route::get('/examen/{id}/{subarea}', 'PreguntaController@preguntaXSubarea')->name('Examen');
Route::get('/examenz/{id}/{subarea}', 'PreguntaController@preguntaXSubareaz')->name('Examenz');
Route::put('/examen2/{id}', 'ResultadoController@examen2')->name('ResultadoExamen2');
Route::put('/examenz2/{id}', 'ResultadoController@examenz2')->name('ResultadoExamenz2');


//***********************
//* Páginas con usuario *
//***********************
Route::group(['middleware' => 'auth'], function()
{

    //************
    //* Examenes *
    //************
    Route::get('/examenes/{prueba}', 'ExamenController@show');
    Route::get('/examensubareas/{prueba}', 'SubareaTemaController@showXExamen')->name('ShowXExamen');



    //**********
    //* Master *
    //**********
    Route::get('/pruebasmaster', 'PruebaController@pruebasmaster')->name('PruebasMaster');
    Route::get('/es/master', 'PruebaController@pruebasmaster')->name('Master');
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
//Route::get('/pruebanueva', 'ExamenController@create');
//Route::get('/enpruebas/{subarea}', 'PreguntaController@showXSubarea');
//Route::get('/enpruebas', 'PreguntaController@pruebaemail');
//Route::get('/enpruebas1/{id}', function(){ return view('paginas.dictats.comprovadictat'); });
//Route::get('/enpruebas2', function(){ return view('paginas.pruebas.cortina'); });
//Route::get('/cos-huma', function(){ return view('paginas.vocabulario.cos-huma'); });
//Route::get('/{idm}/prueba', 'OrtografiaController@prueba');




//*************
//* Plantilla *
//*************
Route::get('/plantilla', function(){ return view('themes/lte/plantilla'); });


