<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showJob($id)
    {
        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {

                $recruiters = DB::table('recruiters')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

                $jobs = DB::table('jobs')->where('id', $id)->Where('deleted_at', null)->get();

                $all_jobs = DB::table('jobs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

                if (count($jobs) == 0 || count($all_jobs) == 0) {
                    return view('recruiter.company-404');
                } else {
                    $job = $jobs[0];
                    $recruiter = $recruiters[0];
                    return view('recruiter.company-job-page', ['job' => $job, 'recruiter' => $recruiter, 'all_jobs' => $all_jobs]);
                }

            }
        } else {
            return view('404');
        }

    }

    public function index()
    {
        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {

                $recruiter = DB::table('recruiters')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
                $jobs = DB::table('jobs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

                return view('recruiter.company-home', ['jobs' => $jobs, 'recruiter' => $recruiter]);

            }
        } else {
            return view('404');
        }

    }

    public function create()
    {
        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {
                return view('recruiter.company-post-job');
            }

        } else {
            return view('404');
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {

                $job = new Job();

                $job->user_id = Auth::user()->id;
                $job->title = $request->input('title');
                $job->number_post = $request->input('number_post');
                $job->city = $request->input('city');
                $job->type_contract = $request->input('type_contract');
                $job->experience = $request->input('experience');
                $job->salary_min = $request->input('salary_min');
                $job->salary_max = $request->input('salary_max');
                $job->categorie = $request->input('categorie');
                $job->description_post = $request->input('description_post');
                $job->key_requirement = $request->input('key_requirement');
                $job->our_offer = $request->input('our_offer');
                $job->end_date = $request->input('end_date');
                $job->active = $request->input('active');
                if ($request->input('active') == null) {
                    $job->active = 'false';
                }
                $job->save();

                return redirect('/recruiter/company-home');

            }
        } else {
            return view('404');
        }
    }

    public function edit($id)
    {
        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {

                $jobs = DB::table('jobs')->where('id', $id)->Where('deleted_at', null)->get();

                if (count($jobs) == 0) {
                    return view('recruiter.company-404');
                } else {
                    $job = $jobs[0];
                    return view('recruiter.company-edit-job', ['job' => $job]);
                }

            }
        } else {
            return view('404');
        }
    }

    public function update($id, Request $request)
    {

        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {

                $job = new Job();
                $job = Job::find($request->input('id'));

                $job->user_id = Auth::user()->id;
                $job->title = $request->input('title');
                $job->number_post = $request->input('number_post');
                $job->city = $request->input('city');
                $job->type_contract = $request->input('type_contract');
                $job->experience = $request->input('experience');
                $job->salary_min = $request->input('salary_min');
                $job->salary_max = $request->input('salary_max');
                $job->categorie = $request->input('categorie');
                $job->description_post = $request->input('description_post');
                $job->key_requirement = $request->input('key_requirement');
                $job->our_offer = $request->input('our_offer');
                $job->end_date = $request->input('end_date');
                $job->active = $request->input('active');
                if ($request->input('active') == null) {
                    $job->active = 'false';
                }
                $job->save();

                return redirect('recruiter/company-job-page/' . $request->input('id'));

            }
        } else {
            return view('404');
        }
    }

    public function destroy($id, Request $request)
    {

        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {

                $jobs = DB::table('jobs')->where('id', $id)->Where('deleted_at', null)->get();
                if (count($jobs) > 0) {
                    $job = Job::find($id);
                    $job->delete();
                } else {
                    return view('recruiter.company-404');
                }
                return redirect('/recruiter/company-home');

            }
        } else {
            return view('404');
        }
    }

    public function active($id)
    {

        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {

                $jobs = DB::table('jobs')->where('id', $id)->Where('deleted_at', null)->get();
                if (count($jobs) > 0) {
                    $job = Job::find($id);
                    return $job->active;
                } else {
                    return view('recruiter.company-404');
                }

            }
        } else {
            return view('404');
        }
    }

    public function desactive($id, $action)
    {

        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {

                $job = new Job();
                $job = Job::find($id);
                $job->active = $action;
                $job->save();

                return (response()->json(['etat' => true, 'id' => $job->id, 'active' => $action]));

            }
        } else {
            return view('404');
        }
    }

}
