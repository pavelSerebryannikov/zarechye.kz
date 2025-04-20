<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Кэш очищен.";
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', [\App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/locale/{locale}', [\App\Http\Controllers\PagesController::class,'setLocale']);
Route::get('/{slug?}', [\App\Http\Controllers\PagesController::class,'page'])->name('page');
Route::get('/akcii/{promotion}', [\App\Http\Controllers\PagesController::class, 'promotion'])->name('promotion');
Route::get('/prozhivanie/{appartament}', [\App\Http\Controllers\PagesController::class, 'appartament'])->name('appartament');
Route::get('/aktivnosti/{publication}', [\App\Http\Controllers\PagesController::class, 'publication'])->name('publication');

Route::post('/application', function(Request $request) {
    $name = $request->get('name');
    $phone = $request->get('phone');
    $mmess = $request->get('mmess');
    $ldate = new DateTime('now');

    $to = "sales@zarechye.kz";
    $subject = "Заявка с сайта Заречье";
    $sendfrom   = "no-reply@zarechye.kz";
    $sendfrrrom = 'Заречье';
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrrrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $message = "$subject<br> <b>Имя:</b> $name <br> <b>Телефон:</b> $phone <br> <b> Сообщение:</b> $mmess";
    $send = mail ($to, $subject, $message, $headers);
    
    if ($send)
    {
        \DB::table('applications')->insert([
            'name' => $name,
            'phone' => $phone,
            'mmess' => $mmess,
            'created_at' => $ldate,
        ]);
        return redirect('/');
    } else {
        dd('error');
    }
});