<?php

namespace App\Http\Controllers;

use App\Language;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
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

                $languages = DB::table('languages')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->orderBy('level', 'desc')->get();
                return $languages;

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

                $language = new Language();
                $language->user_id = Auth::user()->id;
                $language->level = $request->input('level');
                $language->language_name = $request->input('language_name');
                $language->save();
                return (response()->json(['etat' => true, 'id' => $language->id]));

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

                $language = Language::find($request->input('id'));
                $language->level = $request->input('level');
                $language->language_name = $request->input('language_name');
                $language->save();
                return (response()->json(['etat' => true, 'id' => $language->id]));

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

                $language = Language::find($id);

                $language->delete();
                return (response()->json(['etat' => true]));

            }
        } else {
            return view("404");
        }

    }
}
