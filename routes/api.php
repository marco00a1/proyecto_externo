<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/tarea',[TareaController::class,'getTareas']); // probado
Route::get('/tarea/{id}',[TareaController::class,'getTareaID']); // probado
Route::post('/tarea/insert',[TareaController::class,'InsertTarea']); // probado
Route::put('/tarea/update/{id}',[TareaController::class,'UpdateTarea']); // probado
Route::delete('/tarea/delete/{id}',[TareaController::class,'DeleteTarea']); // 
