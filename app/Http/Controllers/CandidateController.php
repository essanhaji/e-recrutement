<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Cv;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
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

    public function index()
    {
        if (Auth::user()->type == "candidat") {
            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $cv = new Cv();
                $cv = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->first();
                $candidate = new Candidate();
                $candidate = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->first();
                $skills = DB::table('skills')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
                return view('candidate.candidate-profile', [
                    'cv' => $cv,
                    'candidate' => $candidate,
                ]);

            }
        } else {
            return view("404");
        }
    }

    public function create()
    {
        if (Auth::user()->type == "candidat") {
            $cv = array();
            $candidates = array();

            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {
                $cv = new Cv();
                $cv = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->first();

                $candidate = new Candidate();
                $candidate = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->first();

                return view('candidate.candidate-profile-edit', ['cv' => $cv, 'candidate' => $candidate]);
            }
        } else {
            return view("404");
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()->type == "candidat") {
            $candidate = new Candidate();
            $cv = new Cv();

            $candidate->user_id = Auth::user()->id;
            $candidate->first_name = $request->input('first_name');
            $candidate->last_name = $request->input('last_name');
            $candidate->civility = $request->input('civility');
            $candidate->birthdate = $request->input('birthdate');
            $candidate->picture = $request->picture->store('picture');
            $cv->user_id = Auth::user()->id;
            $cv->title = $request->input('title');
            $cv->experience = $request->input('experience');
            $cv->etude = $request->input('etude');
            $cv->address = $request->input('address');
            $cv->email = $request->input('email');
            $cv->phone_number = $request->input('phone_number');
            $cv->facebook = $request->input('facebook');
            $cv->insagram = $request->input('insagram');
            $cv->twitter = $request->input('twitter');
            $cv->google_plus = $request->input('google_plus');
            $cv->linkedin = $request->input('linkedin');
            $cv->salary = $request->input('salary');
            $cv->age = $request->input('age');
            $cv->active = $request->input('active');
            $cv->about_me = $request->input('about_me');

            $candidate->save();
            $cv->save();

            return redirect('/candidate/candidate-profile');
        } else {
            return view("404");
        }
    }

    public function edit()
    {
        if (Auth::user()->type == "candidat") {
            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $cv = new Cv();
                $cv = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->first();

                $candidate = new Candidate();
                $candidate = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->first();

                return view('candidate.candidate-profile-edit', ['cv' => $cv, 'candidate' => $candidate]);
            }
        } else {
            return view("404");
        }
    }

    public function update(Request $request)
    {
        if (Auth::user()->type == "candidat") {
            $candidate = Candidate::find($request->input('id_candidate'));

            $candidate->user_id = Auth::user()->id;
            $candidate->first_name = $request->input('first_name');
            $candidate->last_name = $request->input('last_name');
            $candidate->civility = $request->input('civility');
            $candidate->birthdate = $request->input('birthdate');
            if ($request->hasFile('picture')) {
                Storage::delete($candidate->picture);
                $candidate->picture = $request->picture->store('picture');
            }
            $candidate->save();

            $cv = Cv::find($request->input('id_cv'));
            $cv->user_id = Auth::user()->id;
            $cv->title = $request->input('title');
            $cv->experience = $request->input('experience');
            $cv->etude = $request->input('etude');
            $cv->address = $request->input('address');
            $cv->email = $request->input('email');
            $cv->phone_number = $request->input('phone_number');
            $cv->facebook = $request->input('facebook');
            $cv->insagram = $request->input('insagram');
            $cv->twitter = $request->input('twitter');
            $cv->google_plus = $request->input('google_plus');
            $cv->linkedin = $request->input('linkedin');
            $cv->salary = $request->input('salary');
            $cv->age = $request->input('age');
            $cv->active = $request->input('active');
            if ($request->input('active') == null) {
                $cv->active = 'false';
            }
            $cv->about_me = $request->input('about_me');
            $cv->save();

            return redirect('/candidate/candidate-profile');
        } else {
            return view("404");
        }
    }

    public function destroy()
    {

    }

    public function active($id)
    {
        if (Auth::user()->type == "candidat") {
            $candidates = array();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

            if (count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {
                $cvs = DB::table('cvs')->where('id', $id)->Where('deleted_at', null)->get();
                if (count($cvs) > 0) {
                    $cv = Cv::find($id);
                    return $cv->active;
                } else {
                    //return view('candidate.candidate-404');
                }
            }
        } else {
            return view("404");
        }
    }

    public function desactive($id, $action)
    {
        if (Auth::user()->type == "candidat") {
            $candidates = array();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

            if (count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {
                $cv = new Cv();
                $cv = Cv::find($id);
                $cv->active = $action;
                $cv->save();

                return (response()->json(['etat' => true, 'id' => $cv->id, 'active' => $action]));
            }
        } else {
            return view("404");
        }
    }

}
