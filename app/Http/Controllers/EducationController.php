<?php

namespace App\Http\Controllers;

use App\Educations;
use App\User;
use App\Candidate;
use App\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
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
            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $etudes = DB::table('educations')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->orderBy('start_date', 'asc')->get();
                return $etudes;

            }
        } else {
            return view("404");
        }
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        if (Auth::user()->type == "candidat") {
            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $etude = new Educations();
                $etude->user_id = Auth::user()->id;
                $etude->start_date = $request->input('start_date');
                $etude->end_date = $request->input('end_date');
                $etude->diploma = $request->input('diploma');
                $etude->department = $request->input('department');
                $etude->university = $request->input('university');
                $etude->description = $request->input('description');
                $etude->save();
                return (response()->json(['etat' => true, 'id' => $etude->id]));

            }
        } else {
            return view("404");
        }
    }

    public function edit()
    {

    }

    public function update(Request $request)
    {
        if (Auth::user()->type == "candidat") {
            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $etude = new Educations();
                $etude = Educations::find($request->input('id'));
                $etude->user_id = Auth::user()->id;
                $etude->start_date = $request->input('start_date');
                $etude->end_date = $request->input('end_date');
                $etude->diploma = $request->input('diploma');
                $etude->department = $request->input('department');
                $etude->university = $request->input('university');
                $etude->description = $request->input('description');
                $etude->save();
                return (response()->json(['etat' => true, 'id' => $etude->id]));

            }
        } else {
            return view("404");
        }

    }

    public function destroy($id)
    {
        if (Auth::user()->type == "candidat") {
            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $etude = Educations::find($id);
                $etude->delete();
                return (response()->json(['etat' => true]));

            }
        } else {
            return view("404");
        }
    }
}
