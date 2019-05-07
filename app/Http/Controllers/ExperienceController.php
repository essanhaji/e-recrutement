<?php

namespace App\Http\Controllers;

use App\Experience;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExperienceController extends Controller
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

                $experiences = DB::table('experiences')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->orderBy('start_date', 'asc')->get();
                return $experiences;

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

                $experience = new Experience();
                $experience->user_id = Auth::user()->id;
                $experience->start_date = $request->input('start_date');
                $experience->end_date = $request->input('end_date');
                $experience->title = $request->input('title');
                $experience->speciality = $request->input('speciality');
                $experience->description = $request->input('description');
                $experience->save();
                return (response()->json(['etat' => true, 'id' => $experience->id]));

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

                $experience = new Experience();
                $experience = Experience::find($request->input('id'));
                $experience->user_id = Auth::user()->id;
                $experience->start_date = $request->input('start_date');
                $experience->end_date = $request->input('end_date');
                $experience->title = $request->input('title');
                $experience->speciality = $request->input('speciality');
                $experience->description = $request->input('description');
                $experience->save();
                return (response()->json(['etat' => true, 'id' => $experience->id]));

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

                $experience = Experience::find($id);
                $experience->delete();
                return (response()->json(['etat' => true]));

            }
        } else {
            return view("404");
        }
    }
}
