<?php

namespace App\Http\Controllers;

use App\Skill;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
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

                $skills = DB::table('skills')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->orderBy('level', 'desc')->get();
                return $skills;

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

                $skill = new Skill();
                $skill->user_id = Auth::user()->id;
                $skill->level = $request->input('level');
                $skill->name = $request->input('name');
                $skill->save();
                return (response()->json(['etat' => true, 'id' => $skill->id]));

            }
        } else {
            return view("404");
        }
    }

    public function reload()
    {
        if (Auth::user()->type == "candidat") {
            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                return redirect('/candidate/candidate-profile');

            }
        } else {
            return view("404");
        }
    }

    public function update(Request $request)
    {
        if (Auth::user()->type == "candidat") {
            $cvs = DB::table('cvs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            $candidates = DB::table('candidates')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
            if (count($cvs) == 0 || count($candidates) == 0) {
                return view('candidate.candidate-profile-creat');
            } else {

                $skill = Skill::find($request->input('id'));
                $skill->level = $request->input('level');
                $skill->name = $request->input('name');
                $skill->save();
                return (response()->json(['etat' => true, 'id' => $skill->id]));

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

                $skill = Skill::find($id);
                $skill->delete();
                return (response()->json(['etat' => true]));

            }
        } else {
            return view("404");
        }
    }
}
