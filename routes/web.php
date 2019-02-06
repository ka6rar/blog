<?php
use App\Mail\TestEmail;
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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('post/index' , 'PostController@index')->name('post.index');

Route::get('posts' , 'PostController@index')->name('post.index');


Route::get('post/create' , 'PostController@create')->name('post.create');

Route::post('post/store' , 'PostController@store')->name('post.store');
Route::get('post/delate/{id}' , 'PostController@destroy')->name('post.delate');






Route::get('post/deletesofte' , 'PostController@deletesofte')->name('post.deletesofte');
Route::get('post/restore/{id}' , 'PostController@restore')->name('post.restore');
Route::get('post/hdelete/{id}' , 'PostController@hdelete')->name('post.hdelete');
Route::get('post/edit/{id}' , 'PostController@edit')->name('post.edit');
Route::post('post/update/{id}' , 'PostController@update')->name('post.update');






Route::get('caregory/create' , 'CaregoryController@create')->name('caregory.create');

Route::post('caregory/store' , 'CaregoryController@store')->name('caregory.store');


Route::get('caregory/edit/{id}' , 'CaregoryController@edit')->name('caregory.edit');

Route::get('caregory/delate/{id}' , 'CaregoryController@destroy')->name('caregory.delate');


Route::post('caregory/update/{id}' , 'CaregoryController@update')->name('caregory.update');


Route::get('caregory/index' , 'CaregoryController@index');


//tags
Route::get('tags/index'  ,  'Tagcontroeller@index')->name('tags.index');
Route::get('tags/create' , 'Tagcontroeller@create')->name('tags.create');
Route::post('tags/store' , 'Tagcontroeller@store')->name('tags.store');
Route::get('tags/destroy/{id}' , 'Tagcontroeller@destroy')->name('tags.destroy');
Route::get('tags/edit/{id}' , 'Tagcontroeller@edit')->name('tags.edit');
Route::post('tags/update/{id}' , 'Tagcontroeller@update')->name('tags.update');


//Users
Route::get('users/index'  ,  'UserController@index')->name('users.index');
Route::get('users/create' , 'UserController@create')->name('users.create');
Route::post('users/store' , 'UserController@store')->name('users.store');
Route::get('users/admin/{id}' , 'UserController@admin')->name('users.admin');
Route::get('users/notAdmin/{id}' , 'UserController@notAdmin')->name('users.notAdmin');


//steeing
Route::get('setting' , 'SettingController@index')->name('setting');
Route::post('setting/update' , 'SettingController@update')->name('setting.update');



//front end
Route::get('/' , 'siteUcontroller@index')->name('index');
Route::get('post/{slug}' , 'siteUcontroller@showPost')->name('post.show');
Route::get('category/{id}' , 'siteUcontroller@category')->name('category.category');
Route::get('tags/{id}' , 'siteUcontroller@tags')->name('tags.tags');



//Ssearch
Route::get('/results' , 'siteUcontroller@showPost')->name('post.show');


     Route::get('/results', function () {
         $post = App\Post::where('title', 'like' ,  '%' . request('search') . '%' )->get();
       return view('/results')
        ->with('categories',App\ Category::all())
        ->with('title' ,  'Result : '. request('search'))
     ->with('post'    , $post)
        ->with('tags'    , App\Tag::all())
     ->with('query' , request('search') );





});
Route::get('/testmail', function () {

    $data = ['message' => 'This is a test!'];
    Mail::to('karargibar3@gmail.com')->send(new TestEmail($data));
    return back();
    })->name('testmail');











    Route::get('sendemail', function () {
        $data = array(
            'name' => "Muhammed Essa",
        );

        Mail::send('emails.test', $data, function ($message) {

            $message->from('karar3931@gmail.com', 'Hello Muhammed');

            $message->to('karar3931@gmail.com')
            ->subject('This is test email');

        });

        return "Your email has been sent successfully";

    });


