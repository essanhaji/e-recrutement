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

// Route::get('/', function () {
//     return view('welcome');
// });






Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/register', function () {
    return view('register');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//<--------------------- start recuiteur ------------------------>
Route::get('recruiter/company-page', 'RecruiterController@index');//
Route::get('recruiter/company-profile-create', 'RecruiterController@create');//
Route::post('recruiter/company-profile-insert', 'RecruiterController@store');//
Route::get('recruiter/company-profile-edit', 'RecruiterController@edit');//
Route::put('recruiter/company-profile-update', 'RecruiterController@update');//
//<--------------------- end recuiteur ------------------------>



//<--------------------- start job ------------------------>
Route::get('recruiter/company-home', 'JobController@index');//
Route::get('recruiter/company-job-page-active/{id}', 'JobController@active');//
Route::post('recruiter/company-job-page-desactive/{id}/{action}', 'JobController@desactive');//
Route::get('recruiter/company-job-page/{id}', 'JobController@showJob');//
Route::get('recruiter/company-post-job', 'JobController@create');//
Route::post('recruiter/company-save-job', 'JobController@store');//
Route::get('recruiter/company-job-edit/{id}', 'JobController@edit');//
Route::put('recruiter/company-job-update/{id}', 'JobController@update');//  
Route::delete('recruiter/company-job-delete/{id}', 'JobController@destroy');// 
//<--------------------- end job ------------------------>



//<--------------------- start candidate ------------------------>
Route::get('candidate/candidate-profile', 'CandidateController@index'); //
Route::get('candidate/candidate-profile-active/{id}', 'CandidateController@active');//
Route::post('candidate/candidate-profile-desactive/{id}/{action}', 'CandidateController@desactive');//
Route::get('candidate/candidate-profile-creat', 'CandidateController@create'); //
Route::post('candidate/candidate-profile-save', 'CandidateController@store'); //
Route::get('candidate/candidate-profile-edit', 'CandidateController@edit'); //
Route::put('candidate/candidate-profile-update', 'CandidateController@update'); //
//<--------------------- end candidate ------------------------>



//<--------------------- start favorites/recruiter ------------------------>
Route::get('recruiter/company-favorites', 'FavoriteController@index_recruiter');
Route::get('favorites/cv/{id}', 'FavoriteController@addFavoriteToRecruter');
Route::get('recruiter/company-favorites/{id}', 'FavoriteController@deleteFavoriteToRecruiter');
//<--------------------- end favorites/recruiter ------------------------>



//<--------------------- start favorites/candidate ------------------------>
Route::get('candidate/candidate-favorites', 'FavoriteController@index_candidate');
Route::get('favorites/job/{id}', 'FavoriteController@addFavoriteToCondidate');
Route::get('candidate/favorites/{id}', 'FavoriteController@deleteFavoriteToCondidate');
//<--------------------- end favorites/candidate ------------------------>



//<--------------------- start home ------------------------>
Route::get('', 'HomeController@show');
//<--------------------- end home ------------------------>



//<--------------------- start search-jobs ------------------------>
Route::get('search-jobs', 'ControllerSearchJobs@allJobs');
Route::get('search-jobs/{categorie}', 'ControllerSearchJobs@categorieJobs');
Route::post('search-jobs/searchHome', 'ControllerSearchJobs@searchHome');
//<--------------------- end search-jobs ------------------------>



//<--------------------- start search-jobs ------------------------>
Route::get('find-candidate', 'ControllerSearchCandidate@allCvs');
Route::post('find-candidate/searchCvs', 'ControllerSearchCandidate@searchCvs');
//<--------------------- end search-jobs ------------------------>



//<--------------------- start company & job page ------------------------>
Route::get('company-page/{user_id}', 'CompanyPageController@showCompanyPage');
Route::get('job-page/{id}', 'CompanyPageController@showJobPage');
//<--------------------- end company & job page ------------------------>



//<--------------------- start Postule ------------------------>
Route::post('candidate/AddPostule', 'PostuleController@candidateAddPostule');
Route::get('candidate/candidate-postulations', 'PostuleController@candidateShowPostule');
Route::get('candidate/candidate-postulations/{id}', 'PostuleController@candidateDeletePostule');
Route::get('recruiter/company-postule', 'PostuleController@recruiterShowPostule');
Route::post('recruiter/company-postule/{id}', 'PostuleController@recruiterDeletePostule');
Route::get('recruiter/company-postule/cv_file/{file}', 'PostuleController@showFile');
Route::get('recruiter/company-postule/pdf/{id}', 'PostuleController@recruiterPdfPostule');
Route::get('candidate/candidate-postule/pdf/{id}', 'PostuleController@candidatePdfPostule');
//<--------------------- end Postule ------------------------>



//<--------------------- start skills ------------------------>
Route::post('candidate/candidate-profile', 'SkillController@reload');
Route::get('candidate/candidate-profile/getSkills', 'SkillController@index');
Route::post('candidate/candidate-profile/addSkills', 'SkillController@store');
Route::put('candidate/candidate-profile/updateSkills', 'SkillController@update');
Route::delete('candidate/candidate-profile/deleteSkills/{id}', 'SkillController@destroy');
//<--------------------- end skills ------------------------>



//<--------------------- start etude ------------------------>
Route::get('candidate/candidate-profile/getEtude', 'EducationController@index');
Route::post('candidate/candidate-profile/addEtude', 'EducationController@store');
Route::put('candidate/candidate-profile/updateEtudes', 'EducationController@update');
Route::delete('candidate/candidate-profile/deleteEtudes/{id}', 'EducationController@destroy');
//<--------------------- end etude ------------------------>



//<--------------------- start experiences ------------------------>
Route::get('candidate/candidate-profile/getExperience', 'ExperienceController@index');
Route::post('candidate/candidate-profile/addExperience', 'ExperienceController@store');
Route::put('candidate/candidate-profile/updateExperience', 'ExperienceController@update');
Route::delete('candidate/candidate-profile/deleteExperience/{id}', 'ExperienceController@destroy');
//<--------------------- end experiences ------------------------>



//<--------------------- start Languages ------------------------>
Route::get('candidate/candidate-profile/getLanguages', 'LanguageController@index');
Route::post('candidate/candidate-profile/AddLanguage', 'LanguageController@store');
Route::put('candidate/candidate-profile/updateLanguage', 'LanguageController@update');
Route::delete('candidate/candidate-profile/deleteLanguage/{id}', 'LanguageController@destroy');
//<--------------------- end Languages ------------------------>



//<--------------------- start cv ------------------------>
Route::get('candidate-profile/{id}', 'CvController@index');
//<--------------------- end cv ------------------------>



//<--------------------- start message/recruiter ------------------------>
Route::post('recruiter/company-postule/message/stor', 'MessgeController@envoyerMessageRecruiter');
Route::get('recruiter/company-messages/{id}', 'MessgeController@deleteMessageRecruiter');
Route::get('candidate/candidate-messages/{id}', 'MessgeController@deleteMessageCandidate');
//<--------------------- end message/recruiter ------------------------>




//Route::get('recruiter/company-job-page/{id}', 'JobController@showJob'); //
//Route::get('candidate/candidate-profile-creat', 'CandidateController@create'); //
//Route::post('candidate/candidate-profile-save', 'CandidateController@store'); //
//Route::get('recruiter/company-job-edit/{id}', 'JobController@edit'); //
//Route::put('recruiter/company-job-update/{id}', 'JobController@update'); //
//Route::delete('recruiter/company-job-delete/{id}', 'JobController@destroy'); //
//<--------------------- end candidate ------------------------>
// Route::get('/pdf', 'PostuleController@pdfStream')->name('pdfStream');
