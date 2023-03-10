<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\RedController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\SemaforoController;
use App\Http\Controllers\TipoFormacionController;
use App\Http\Controllers\PeriodoController;



Route::controller(PageController::class)->group(function()
{
    //-----------------------------------
    route::get('/','login')->name('login');
    route::get('/principal','pagina_principal')->name('pagina_principal');
    route::get('/principal/calendario','calendario')->name('calendario');
    route::get('/principal/informes','informes')->name('informes');

});

Route::controller(PeriodoController::class)->group(function()
{
    //-----------------------------------

    route::get('/principal/calendario','index')->name('calendario');

    Route::match(['get','post'],'/principal/calendario/crear','store')->name('calendario.crear');

    Route::match(['get','post'],'/principal/calendario/editar/','edit')->name('calendario.editar');

    Route::match(['get','post'],'/principal/calendario/guardar','store')->name('calendario.guardar');

    Route::match(['get','post'],'/principal/calendario/actualizar/{id}','update')->name('calendario.actualizar');

    Route::match(['get','post'],'/principal/calendario/eliminar/{id}','destroy')->name('calendario.eliminar');


});

/*Ambientes*/
Route::controller(AmbienteController::class)->group(function()
{
    route::get('/principal/ambiente','index')->name('ambientes');

    Route::match(['get','post'],'/principal/ambientes/crear','store')->name('ambientes.crear');

    Route::match(['get','post'],'/principal/ambientes/editar/','edit')->name('ambientes.editar');

    Route::match(['get','post'],'/principal/ambientes/guardar','store')->name('ambientes.guardar');

    Route::match(['get','post'],'/principal/ambientes/actualizar/{nro_ambiente}','update')->name('ambientes.actualizar');

    Route::match(['get','post'],'/principal/ambientes/eliminar/{nro_ambiente}','destroy')->name('ambientes.eliminar');
});

/*Area tematica*/
Route::controller(AreaController::class)->group(function()
{
    route::get('/principal/area','index')->name('areas');

    Route::match(['get','post'],'/principal/redes/crear','create')->name('areas.crear');

    Route::match(['get','post'],'/principal/redes/editar/','edit')->name('areas.editar');

    Route::match(['get','post'],'/principal/redes/guardar','store')->name('areas.guardar');

    Route::match(['get','post'],'/principal/redes/actualizar/{red}','update')->name('areas.actualizar');

    Route::match(['get','post'],'/principal/redes/eliminar/{red}','destroy')->name('areas.eliminar');
});

/*Competencias*/
Route::controller(CompetenciaController::class)->group(function()
{
    route::get('/principal/competencia','index')->name('competencias');

    Route::match(['get','post'],'/principal/competencia/crear','store')->name('competencia.crear');

    Route::match(['get','post'],'/principal/competencia/editar/','edit')->name('competencia.editar');

    Route::match(['get','post'],'/principal/competencia/guardar','store')->name('competencia.guardar');

    Route::match(['get','post'],'/principal/competencia/actualizar/{codigo_com}','update')->name('competencia.actualizar');

    Route::match(['get','post'],'/principal/competencia/eliminar/{codigo_com}','destroy')->name('competencia.eliminar');
});

/*Fichas*/
Route::controller(FichaController::class)->group(function()
{
    Route::get('/principal/fichas','index')->name('fichas');

    Route::match(['get','post'],'/principal/fichas/crear','store')->name('fichas.crear');

    Route::match(['get','post'],'/principal/fichas/editar/','edit')->name('fichas.editar');

    Route::match(['get','post'],'/principal/fichas/guardar','store')->name('fichas.guardar');

    Route::match(['get','post'],'/principal/fichas/actualizar/{nro_ficha}','update')->name('fichas.actualizar');

    Route::match(['get','post'],'/principal/fichas/eliminar/{nro_ficha}','destroy')->name('fichas.eliminar');
});

/*Instructores*/
Route::controller(InstructorController::class)->group(function()
{
    route::get('/principal/instructores','index')->name('instructores');

    Route::match(['get','post'],'/principal/instructores/crear','store')->name('instructores.crear');

    Route::match(['get','post'],'/principal/instructores/editar/','edit')->name('instructores.editar');

    Route::match(['get','post'],'/principal/instructores/guardar','store')->name('instructores.guardar');

    Route::match(['get','post'],'/principal/instructores/actualizar/{instructor}','update')->name('instructores.actualizar');

    Route::match(['get','post'],'/principal/instructores/eliminar/{instructor}','destroy')->name('instructores.eliminar');
});

/*Programa*/
Route::controller(ProgramaController::class)->group(function()
{
    route::get('/principal/programas','index')->name('programas');

    Route::match(['get','post'],'/principal/programas/crear','create')->name('programas.crear');

    Route::match(['get','post'],'/principal/programas/editar/','edit')->name('programas.editar');

    Route::match(['get','post'],'/principal/programas/guardar','store')->name('guardar_programas');

    Route::match(['get','post'],'/principal/programas/actualizar/{programas}','update')->name('programas.actualizar');

    Route::match(['get','post'],'/principal/programas/eliminar/{programas}','destroy')->name('programas.eliminar');
});

/*Red tematica*/
Route::controller(RedController::class)->group(function()
{
    route::get('/principal/redes','index')->name('redes');

    Route::match(['get','post'],'/principal/redes/crear','create')->name('redes.crear');

    Route::match(['get','post'],'/principal/redes/editar/','edit')->name('redes.editar');

    Route::match(['get','post'],'/principal/redes/guardar','store')->name('redes.guardar');

    Route::match(['get','post'],'/principal/redes/actualizar/{red}','update')->name('redes.actualizar');

    Route::match(['get','post'],'/principal/redes/eliminar/{red}','destroy')->name('redes.eliminar');
});


/*Resultados*/
Route::controller(ResultadoController::class)->group(function()
{
    route::get('/principal/resultados','index')->name('resultados');

    Route::match(['get','post'],'/principal/resultados/crear','store')->name('resultados.crear');

    Route::match(['get','post'],'/principal/resultados/editar/','edit')->name('resultados.editar');

    Route::match(['get','post'],'/principal/resultados/guardar','store')->name('resultados.guardar');

    Route::match(['get','post'],'/principal/resultados/actualizar/{codigo_resultado}','update')->name('resultados.actualizar');

    Route::match(['get','post'],'/principal/resultados/eliminar/{codigo_resultado}','destroy')->name('resultados.eliminar');
});

/*Sedes*/
Route::controller(SedeController::class)->group(function()
{
    Route::get('/principal/sedes','index')->name('sedes');

    Route::match(['get', 'post'],'/principal/sedes/crear','store')->name('sedes.crear');

    Route::match(['get','post'],'/principal/sedes/editar/','edit')->name('sedes.editar');

    Route::match(['get','post'],'/principal/sedes/guardar','store')->name('sedes.guardar');

    Route::match(['get','post'],'/principal/sedes/actualizar/{codigo_centro}','update')->name('sedes.actualizar');

    Route::match(['get','post'],'/principal/sedes/eliminar/{codigo_centro}','destroy')->name('sedes.eliminar');

});

/*Semaforo*/
Route::controller(SemaforoController::class)->group(function()
{
    route::get('/principal/semaforos','index')->name('semaforos');

    Route::match(['get','post'],'/principal/semaforos/crear','store')->name('semaforos.crear');

    Route::match(['get','post'],'/principal/semaforos/editar/','edit')->name('semaforos.editar');

    Route::match(['get','post'],'/principal/semaforos/guardar','store')->name('semaforos.guardar');

    Route::match(['get','post'],'/principal/semaforos/actualizar/{nro_ficha}','update')->name('semaforos.actualizar');

    Route::match(['get','post'],'/principal/semaforos/eliminar/{nro_ficha}','destroy')->name('semaforos.eliminar');

});

/*Tipos de formacion*/
Route::controller(TipoFormacionController::class)->group(function()
{
    route::get('/principal/tipoformacion','index')->name('tipos');

    Route::match(['get','post'],'/principal/tipoformacion/crear','store')->name('tipoformacion.crear');

    Route::match(['get','post'],'/principal/tipoformacion/editar/','edit')->name('tipoformacion.editar');

    Route::match(['get','post'],'/principal/tipoformacion/guardar','store')->name('tipoformacion.guardar');

    Route::match(['get','post'],'/principal/tipoformacion/actualizar/{codigo_tipo_form}','update')->name('tipoformacion.actualizar');

    Route::match(['get','post'],'/principal/tipoformacion/eliminar/{codigo_tipo_form}','destroy')->name('tipoformacion.eliminar');


});

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::redirect('dashboard', 'principal/calendario')->name('dashboard');
Route::get('/', function () {
    return view('/auth/login');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
