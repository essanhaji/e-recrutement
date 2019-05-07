<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Job;
use App\Recruiter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class CompanyPageController extends Controller
{

    public function showCompanyPage($user_id)
    {
        $recruiters = array();
        $recruiters = DB::table('recruiters')->where('user_id', $user_id)->Where('deleted_at', null)->get();

        if (count($recruiters) == 0) {
            return view('404');
        } else {
            $recruiter = new Recruiter();
            $recruiters = DB::table('recruiters')
                ->where('user_id', $user_id)
                ->Where('deleted_at', null)
                ->get();

            $recruiter = $recruiters[0];
            $jobs = DB::table('jobs')
                ->where('user_id', $user_id)
                ->Where('deleted_at', null)
                ->Where('active', 'true')
                ->get();

            return view('company-page', [
                'jobs' => $jobs,
                'var' => $recruiter]);
        }

    }

    public function showJobPage($id)
    {
        $job = new Job();
        $job = Job::find($id);

        if ($job->user_id != null && $job->active == "true") {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', $job->user_id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('404');
            } else {
                $recruiters = DB::table('recruiters')
                    ->where('user_id', $job->user_id)
                    ->Where('deleted_at', null)
                    ->get();

                $all_jobs = DB::table('jobs')
                    ->where('user_id', $job->user_id)
                    ->Where('deleted_at', null)
                    ->Where('active', 'true')
                    ->get();

                if (count($all_jobs) == 0) {
                    return view('404');
                } else {
                    $recruiter = $recruiters[0];
                    $favorite = new Favorite();
                    if (Route::has('login')) {
                        if (Auth::check()) {
                            if (Auth::user()->type == 'candidat') {
                                $favorites = DB::table('favorites')
                                    ->where('user_id', Auth::user()->id)
                                    ->Where('deleted_at', null)
                                    ->where('favorite', $id)
                                    ->get();
                                if (count($favorites) > 0) {
                                    $favorite = $favorites[0];
                                }
                            }
                        }
                    }

                    return view('job-page', [
                        'job' => $job,
                        'recruiter' => $recruiter,
                        'all_jobs' => $all_jobs,
                        'favorite' => $favorite,
                    ]);
                }
            }
        } else {
            return view('404');

        }
    }
}
