<?php

namespace App\Http\Controllers;

use App\File;
use App\Postule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostuleController extends Controller
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

    public function candidateAddPostule(Request $request)
    {
        if (Auth::user()->type == 'candidat') {
            $candidates = array();
            $candidates = DB::table('candidates')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $allPostules = DB::table('postules')
                    ->where('postule', $request->input('postule'))
                    ->where('user_id', Auth::user()->id)
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                if (count($allPostules) == 0) {
                    $postule = new Postule();
                    $file = new File();

                    $postule->user_id = Auth::user()->id;
                    $postule->postule = $request->input('postule');
                    $postule->message = $request->input('message');
                    $postule->type = 'page';
                    $postule->attachment = Auth::user()->id;

                    if ($request->hasFile('cv_file')) {
                        $file->user_id = Auth::user()->id;
                        $file->cv_file = $request->cv_file->store('cv_file');
                        $file->save();
                        $postule->type = 'file';
                        $postule->attachment = $file->id;
                    }

                    $postule->save();
                } else {
                    $postule = new Postule();
                    $file = new File();

                    $postule = Postule::find($allPostules[0]->id);
                    $postule->user_id = Auth::user()->id;
                    $postule->postule = $request->input('postule');
                    $postule->message = $request->input('message');
                    $postule->type = 'page';
                    $postule->attachment = Auth::user()->id;

                    if ($request->hasFile('cv_file')) {
                        $file->user_id = Auth::user()->id;
                        $file->cv_file = $request->cv_file->store('cv_file');
                        $file->save();
                        $postule->type = "file";
                        $postule->attachment = $file->id;
                    }

                    $postule->save();
                }
                return redirect('job-page/' . $request->input('postule'));
            }
        } else {
            return view('404');
        }
    }

    public function candidateShowPostule()
    {
        if (Auth::user()->type == 'candidat') {
            $candidates = array();
            $candidates = DB::table('candidates')
                ->Where('deleted_at', null)
                ->get();

            if (count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {
                $postules = array();
                $postules = DB::table('postules')
                    ->where('user_id', Auth::user()->id)
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                $jobs = array();
                $jobs = DB::table('jobs')
                    ->Where('deleted_at', null)
                    ->Where('active', 'true')
                    ->orderBy('updated_at', 'asc')
                    ->get();

                $recruiters = array();
                $recruiters = DB::table('recruiters')
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                $files = array();
                $files = DB::table('files')
                    ->where('user_id', Auth::user()->id)
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                $messages = array();
                $messages = DB::table('messages')
                    ->where('active', 'true')
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                return view('candidate.candidate-postule', [
                    'postules' => $postules,
                    'jobs' => $jobs,
                    'recruiters' => $recruiters,
                    'files' => $files,
                    'messages' => $messages,
                ]);
            }
        } else {
            return view('404');
        }
    }

    public function recruiterShowPostule()
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
                $postules = array();
                $postules = DB::table('postules')
                    ->Where('deleted_at', null)
                    ->Where('active', 'true')
                    ->orderBy('updated_at', 'asc')
                    ->get();

                $jobs = array();
                $jobs = DB::table('jobs')
                    ->where('user_id', Auth::user()->id)
                    ->Where('deleted_at', null)
                    ->Where('active', 'true')
                    ->orderBy('updated_at', 'asc')
                    ->get();

                $candidates = array();
                $candidates = DB::table('candidates')
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                $files = array();
                $files = DB::table('files')
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                $messages = array();
                $messages = DB::table('messages')
                    ->Where('type', 'recruteur')
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                return view('recruiter.company-postule', [
                    'postules' => $postules,
                    'jobs' => $jobs,
                    'candidates' => $candidates,
                    'files' => $files,
                    'messages' => $messages,
                ]);
            }
        } else {
            return view('404');
        }
    }

    ////// yyyyadak f   i   h 
    public function showFile($file)
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
                return view('recruiter.company-file', ['file' => $file]);
            }
        } else {
            return view('404');
        }
    }

    public function recruiterDeletePostule($id, Request $request)
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

                $allPostules = DB::table('postules')
                    ->where('id', $id)
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                if (count($allPostules) == 0) {
                    return view('recruiter.company-404');
                } else {
                    $postule = new Postule();
                    $postule = Postule::find($id);
                    $postule->active = 'false';
                    $postule->save();
                    return redirect('recruiter/company-postule/');
                }
            }
        } else {
            return view('404');
        }
    }

    public function candidateDeletePostule($id)
    {
        if (Auth::user()->type == 'candidat') {
            $candidates = array();
            $candidates = DB::table('candidates')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $allPostules = DB::table('postules')
                    ->where('id', $id)
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                if (count($allPostules) == 0) {
                    return view('candidate.candidate-404');
                } else {
                    $postule = new Postule();
                    $postule = Postule::find($id);
                    $postule->delete();
                    return redirect('candidate/candidate-postulations');
                }
            }
        } else {
            return view('404');
        }
    }

    public function recruiterPdfPostule($id)
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

                $file = File::find($id);
                // send the file to the browser
                $path = storage_path('app/public/' . $file->cv_file);
                return response()->file($path);

            }
        } else {
            return view('404');
        }
    }

    public function candidatePdfPostule($id)
    {
        if (Auth::user()->type == "candidat") {
            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $file = File::find($id);
                // send the file to the browser
                $path = storage_path('app/public/' . $file->cv_file);
                return response()->file($path);
            }
        } else {
            return view("404");
        }
    }
}
