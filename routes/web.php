<?php
use Illuminate\Support\Facades\Route;  //Para rutas a view directaamente
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NomController;
use App\Http\Controllers\VocabularioController;
use App\Http\Controllers\OrtografiaController;
use App\Http\Controllers\DictatController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\ResultadoController;


Route::get('/', [HomeController::class, 'home2'])->name('Home2');
Route::get('/home', [HomeController::class, 'home2'])->name('Home2');
Route::get('/{idm}', [HomeController::class, 'home'])->name('Home3');
Route::get('/{idm}/home', [HomeController::class, 'home'])->name('Home');
Route::get('/{idm}/politica-de-cookies', [HomeController::class, 'cookies'])->name('cookies');
Route::get('/{idm}/politica-de-privacidad', [HomeController::class, 'privacidad'])->name('privacidad');



/*

Route::get('/{idm}/tabla-ejercicios/{id}', [VocabularioController::class, 'tabla']);




Route::get('/practicainicio/{pagina}', 'PracticaController@inicioPracticas')->name('InicioPracticas');
Route::get('/practica/{id}', 'PracticaController@practicaXId')->name('PracticaXId');
Route::put('/practica1', 'PracticaController@practica1')->name('Practica1');
Route::put('/practica2', 'PracticaController@practica2')->name('Practica2');
Route::put('/practica3', 'PracticaController@practica3')->name('Practica3');
Route::get('/practicaVuelta/{ejercicio}', 'PracticaController@practicaVuelta')->name('PracticaVuelta');

*/
//***************
//* Vocabulario *
//***************
Route::get('/{idm}/vocabulario', [VocabularioController::class, 'vocabulario'])->name('Vocabulario');
Route::get('/{idm}/el-nom-de-les-lletres', [VocabularioController::class, 'lletres'])->name('Lletres');
Route::get('/{idm}/parts-del-dia', [VocabularioController::class, 'partsDia'])->name('PartsDia');
Route::get('/{idm}/dies-de-la-setmana', [VocabularioController::class, 'diesSetmana'])->name('DiesSetmana');
Route::get('/{idm}/les-hores', [VocabularioController::class, 'hores'])->name('Hores');
Route::get('/{idm}/numeros', [VocabularioController::class, 'numeros'])->name('Numeros');
Route::get('/{idm}/cos-huma', [VocabularioController::class, 'cosHuma'])->name('CosHuma');
Route::get('/{idm}/avui-qui-cuina', [VocabularioController::class, 'cuina'])->name('Cuina');
Route::get('/{idm}/parem-taula', [VocabularioController::class, 'taula'])->name('Taula');
Route::get('/{idm}/ciutat', [VocabularioController::class, 'ciutat'])->name('Ciutat');
Route::get('/{idm}/entre-teles', [VocabularioController::class, 'teles'])->name('Teles');
Route::get('/{idm}/hogar', [VocabularioController::class, 'casa'])->name('casa');
Route::get('/{idm}/relacions-de-parentiu', [VocabularioController::class, 'parentiu'])->name('parentiu');
Route::get('/{idm}/mesos-any', [VocabularioController::class, 'mesos'])->name('Mesos');


//**************
//* Ortografía *
//**************
Route::get('/{idm}/ortografia', [OrtografiaController::class, 'ortografia'])->name('Ortografia');
Route::get('/{idm}/vocalisme', [OrtografiaController::class, 'vocalisme'])->name('Vocalisme');
Route::get('/{idm}/byv', [OrtografiaController::class, 'byv'])->name('byv');
Route::get('/{idm}/acentuacion', [OrtografiaController::class, 'acentuacion'])->name('Acentuacion');
Route::get('/{idm}/eio', [OrtografiaController::class, 'eio'])->name('eio');
Route::get('/{idm}/dieresis', [OrtografiaController::class, 'dieresis'])->name('dieresis');
Route::get('/{idm}/diptong', [OrtografiaController::class, 'diptong'])->name('diptong');
Route::get('/{idm}/diacritic', [OrtografiaController::class, 'diacritic'])->name('diacritic');
Route::get('/{idm}/apostrof', [OrtografiaController::class, 'apostrof'])->name('apostrof');
Route::get('/{idm}/contraccio', [OrtografiaController::class, 'contraccio'])->name('contraccio');


//***********
//* Dictats *
//***********
Route::get('/{idm}/dictats', [DictatController::class, 'dictats'])->name('dictats');
Route::get('/{idm}/dictat-mitja-junio-2009-mati', [DictatController::class, 'dictat200906mm'])->name('dictat200906mm');
Route::get('/{idm}/dictat-mitja-junio-2009-vesprada', [DictatController::class, 'dictat200906mv'])->name('dictat200906mv');
Route::get('/{idm}/dictat-mitja-junio-2010-mati', [DictatController::class, 'dictat201006mm'])->name('dictat201006mm');
Route::get('/{idm}/dictat-mitja-junio-2010-vesprada', [DictatController::class, 'dictat201006mv'])->name('dictat201006mv');
Route::get('/{idm}/dictat-mitja-novembre-2010-mati', [DictatController::class, 'dictat201011mm'])->name('dictat201011mm');
Route::get('/{idm}/dictat-mitja-novembre-2011-mati', [DictatController::class, 'dictat201111mm'])->name('dictat201111mm');
Route::get('/{idm}/dictat-mitja-novembre-2011-vesprada', [DictatController::class, 'dictat201111mv'])->name('dictat201111mv');
Route::get('/{idm}/dictat-superior-junio-2009-mati', [DictatController::class, 'dictat200906sm'])->name('dictat200906sm');
Route::get('/{idm}/dictat-superior-junio-2010-mati', [DictatController::class, 'dictat201006sm'])->name('dictat201006sm');
Route::post('/comprovadictat', [DictatController::class, 'comprovaDictat'])->name('comprovaDictat');


//********
//* Noms *
//********
Route::get('/{idm}/noms', [NomController::class, 'noms'])->name('noms');
Route::get('/noms', function(){ return view('paginas.noms.index'); });


//************
//* Examenes *
//************
Route::get('/{idm}/examenes-jqcv', [PruebaController::class, 'pruebasjqcv'])->name('examenes-jqcv');
Route::get('/{idm}/examenes-a1', [PruebaController::class, 'pruebas_a1'])->name('ExamenesA1');
Route::get('/{idm}/examenes-a2', [PruebaController::class, 'pruebas_a2'])->name('ExamenesA2');
Route::get('/{idm}/examenes-b1', [PruebaController::class, 'pruebas_b1'])->name('ExamenesB1');
Route::get('/{idm}/examenes-b2', [PruebaController::class, 'pruebas_b2'])->name('ExamenesB2');
Route::get('/{idm}/examenes-c1', [PruebaController::class, 'pruebas_c1'])->name('ExamenesC1');
Route::get('/{idm}/examenes-c2', [PruebaController::class, 'pruebas_c2'])->name('ExamenesC2');
Route::get('/{idm}/examenes-elemental', [PruebaController::class, 'pruebas_elemental'])->name('ExamenesElemental');
Route::get('/{idm}/examenes-oral', [PruebaController::class, 'pruebas_oral'])->name('ExamenesOral');
Route::get('/{idm}/examenes-mitja', [PruebaController::class, 'pruebas_mitja'])->name('ExamenesMitja');
Route::get('/{idm}/examenes-superior', [PruebaController::class, 'pruebas_superior'])->name('ExamenesSuperior');

Route::get('/{idm}/examen-a2/{codigo}', [PruebaController::class, 'prueba_a2'])->name('Examen_A2');
Route::get('/{idm}/examen-b1/{codigo}', [PruebaController::class, 'prueba_b1'])->name('Examen-B1');
Route::get('/{idm}/examen-b2/{codigo}', [PruebaController::class, 'prueba_b2'])->name('Examen_B2');
Route::get('/{idm}/examen-c1/{codigo}', [PruebaController::class, 'prueba_c1'])->name('Examen_C1');
Route::get('/{idm}/examen-c2/{codigo}', [PruebaController::class, 'prueba_c2'])->name('Examen_C2');
Route::get('/{idm}/examen-elemental/{codigo}', [PruebaController::class, 'prueba_elemental'])->name('Examen_Elemental');
Route::get('/{idm}/examen-oral/{codigo}', [PruebaController::class, 'prueba_oral'])->name('Examen_Oral');
Route::get('/{idm}/examen-mitja/{codigo}', [PruebaController::class, 'prueba_mitja'])->name('Examen_Mitja');
Route::get('/{idm}/examen-superior/{codigo}', [PruebaController::class, 'prueba_superior'])->name('Examen_Superior');



//************************
//* Examenes con usuario *
//************************
Route::get('/examennuevo/{codigo}', [ExamenController::class, 'crear'])->name('ExamenCrear');
Route::get('/exameninicio/{id}', [ExamenController::class, 'examenXId'])->name('ExamenXId');
Route::get('/examen/{id}/{subarea}', [PreguntaController::class, 'preguntaXSubarea'])->name('Examen');
Route::get('/examenz/{id}/{subarea}', [PreguntaController::class, 'preguntaXSubareaz'])->name('Examenz');
Route::put('/examen2/{id}', [ResultadoController::class, 'examen2'])->name('ResultadoExamen2');
Route::put('/examenz2/{id}', [ResultadoController::class, 'examenz2'])->name('ResultadoExamenz2');


//***********************
//* Páginas con usuario *
//***********************
/*
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
//Route::get('/enpruebas2', function(){ return view('paginas.pruebas.cortina'); });
//Route::get('/cos-huma', function(){ return view('paginas.vocabulario.cos-huma'); });

*/






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
