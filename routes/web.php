<?php

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
//Frontend
//Route::get('/send_email', array('uses' => 'Frontend\HomeController@sendEmailReminder'));
Route::group([
    'namespace' => 'Frontend',
    'as' => 'Frontend::'
], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('verify-email', ['as' => 'confirm', 'uses' => 'HomeController@vefiryEmail']);
    Route::get('register', [
        'as' => 'register',
        'uses' => 'HomeController@register'
    ]);

    Route::post('register', [
        'as' => 'postRegister',
        'uses' => 'HomeController@postRegister'
    ]);
    Route::get('contact-us', [
        'as' => 'contactUs',
        'uses' => 'HomeController@contactUs'
    ]);
    Route::post('contact-us', [
        'as' => 'postContactUs',
        'uses' => 'HomeController@postContactUs'
    ]);




    Route::get('about', 'HomeController@about');
    Route::get('hanoi-forum', 'HomeController@hanoi');
    Route::get('hanoi-forum-2018', 'HomeController@hanoiForum2018');


    Route::get('important-dates', 'HomeController@importantDates');
    Route::get('forum-program', 'HomeController@forumProgram');
    Route::get('keynote-speakers', 'HomeController@keynoteSpeakers');


    Route::get('program', 'HomeController@program');
    Route::get('publication', 'HomeController@publication');
//    Route::get('organizers', 'HomeController@organizers');
    Route::get('steering-committee', 'HomeController@steeringCommittee');
    Route::get('organizing-committee', 'HomeController@OrganizingCommittee');
    Route::get('academic-committee', 'HomeController@academicCommittee');
    Route::get('sponsors', 'HomeController@sponsor');

    Route::get('news', 'HomeController@news');

    //panel
    Route::get('climate-change-evidence-and-security', 'HomeController@climateChangeEvidenceAndSecurity');
    Route::get('humans-impact-climate', 'HomeController@humanImpactClimate');
    Route::get('climate-change-response', 'HomeController@climateChangeResponse');
    Route::get('policy-and-governance-of-climate-change-response-and-sustainability', 'HomeController@policyAndGovernance');
    Route::get('science-technology-and-education-for-climate-change-response-and-sustainability', 'HomeController@scienceTechnology');
    Route::get('post/{slug}-{id}', 'HomeController@detailPost')
        ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);

});


//END FRONTEND


Route::get('/admin/login', [
    'as' => 'admin.login',
    'uses' => 'Backend\AuthController@getLogin'
]);
Route::get('/admin/logout', [
    'as' => 'admin.logout',
    'uses' => 'Backend\AuthController@logout'
]);
Route::post('/admin/login', 'Backend\AuthController@postLogin');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Backend',
    'middleware' => 'auth.backend',
    'as' => 'Backend::'
], function () {
    Route::get('/', [
        'as' => 'admin',
        'uses' => 'AdminController@index'
    ]);
    Route::group([
        'prefix' => 'contact-us',
        'as' => 'contact@'
    ], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'ContactUsController@index']);
        Route::get('/datatables', ['as' => 'datatables', 'uses' => 'ContactUsController@datatables']);

    });

    Route::group([
        'prefix'  => '',
        'as' => 'admin@'
    ],function () {
        Route::get('/', ['as' => 'index', 'uses' => 'AdminController@index']);
        Route::get('/datatables', ['as' => 'datatables', 'uses' => 'AdminController@datatables']);
        Route::get('/add', ['as' => 'add', 'uses' => 'AdminController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'AdminController@store']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'AdminController@update']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'AdminController@edit']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'AdminController@delete']);
    });


    Route::group([
        'prefix' => 'posts',
        'as' => 'post@'
    ], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'PostController@index']);
        Route::get('/datatables', ['as' => 'datatables', 'uses' => 'PostController@datatables']);
        Route::get('/add', ['as' => 'add', 'uses' => 'PostController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'PostController@store']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'PostController@update']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'PostController@edit']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'PostController@delete']);
    });
    Route::group([
        'prefix' => 'participants',
        'as' => 'participants@'
    ],function () {
        Route::get('/', ['as' => 'index', 'uses' => 'ParticipantController@index']);
        Route::get('/datatables', ['as' => 'datatables', 'uses' => 'ParticipantController@datatables']);
    });

    Route::group([
        'prefix'  => 'reviewer',
        'as' => 'reviewer@'
    ],function () {
        Route::get('/', ['as' => 'index', 'uses' => 'ReviewerController@index']);
        Route::get('/datatables', ['as' => 'datatables', 'uses' => 'ReviewerController@datatables']);
        Route::get('/add', ['as' => 'add', 'uses' => 'ReviewerController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'ReviewerController@store']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'ReviewerController@update']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'ReviewerController@edit']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'ReviewerController@delete']);
    });
});
