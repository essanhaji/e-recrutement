<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Cv;
use App\Educations;
use App\Experience;
use App\Skill;
use App\Language;
use App\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


class CvController extends Controller
{

    public function index($id)
    {
        $cv = new Cv();
        $cv = DB::table('cvs')
            ->where('user_id', $id)
            ->Where('deleted_at', null)
            ->first();
        $candidate = new Candidate();
        $candidate = DB::table('candidates')
            ->where('user_id', $id)
            ->Where('deleted_at', null)
            ->first();
        $skills = new Skill();
        $skills = DB::table('skills')
            ->where('user_id', $id)
            ->Where('deleted_at', null)
            ->get();
        $etudes = new Educations();
        $etudes = DB::table('educations')
            ->where('user_id', $id)
            ->Where('deleted_at', null)
            ->get();
        $experiences = new Experience();
        $experiences = DB::table('experiences')
            ->where('user_id', $id)
            ->Where('deleted_at', null)
            ->get();
        $languages = new Language();
        $languages = DB::table('languages')
            ->where('user_id', $id)
            ->Where('deleted_at', null)
            ->get();
        $favorite = new Favorite();
        if (Route::has('login')) {
            if (Auth::check()) {
                if (Auth::user()->type == 'recruteur') {
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

        return view('candidate-profile',
            [
                'cv' => $cv,
                'candidate' => $candidate,
                'skills' => $skills,
                'etudes' => $etudes,
                'experiences' => $experiences,
                'languages' => $languages,
                'favorite' => $favorite
            ]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

}
