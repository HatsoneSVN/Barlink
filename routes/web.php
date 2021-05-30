<?php
//clases para el forgot pass
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
//
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ControladorGeneralController;
use App\Http\Controllers\TokenAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Implementacion futura para cambiar contraseña(no implementado por posible incompatibilidad con host)
//Envio de peticion fogotpass
//
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');
//recogjemos datos
//
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');
//verificamos y ejecutamos
//
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) use ($request) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status == Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
*/
//
//rutas para el funcionamiento de barlink despues de autenticarse
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Cuando pulsemos el nombre de alguno de los locales nos mandara al controlador general...

Route::get('/locales/{id}/{offset}/', 'ControladorGeneralController@local')->name('local');

//Cuando pulsemos la opción de añadir opinión nos mandará a opinión...

Route::get('/opinion/{id}/', 'ControladorGeneralController@opinion')->name('opinion');

//Cuando guardemos opnión ...

Route::post('/guardarOP','ControladorGeneralController@guardarOp')->name('guardarOp');

//Al cerrar sesion...

Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Cuando se selecciona alguna de las categorias...

Route::get('/categorias/{categoria}/', 'ControladorGeneralController@categoria')->name('categoria');

//Cuando eliminamos una opinion...

Route::get('/eliminarOp/{id_op}/{id_loc}/', 'ControladorGeneralController@eliminarOp')->name('eliminarOp');