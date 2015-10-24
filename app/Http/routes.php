	<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Requests\PostCreate;
use App\User;
use App\Post;


Route::get('/', function () {
    return view('welcome');
});

resource('users','UsersController');
resource('posts','PostsController');
resource('persons','PersonController');

get('loginf',function(){
    $user=User::find(1);
   Auth::login($user);
    return redirect('/');
});


resource('classes','ClassControlle');
/*
 * Auth;
 *
 *
 */

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');