<?php

namespace App\Http\Controllers;

use App\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
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

    public function index_candidate()
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

                $all_candidates = array();
                $all_candidates = DB::table('candidates')
                    ->where('user_id', Auth::user()->id)
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                if (count($all_candidates) == 0) {
                    return view('candidate.candidate-profile-creat');
                } else {

                    $favorites = array();
                    $favorites = DB::table('favorites')
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

                    return view('candidate.candidate-favorites', [
                        'favorites' => $favorites,
                        'jobs' => $jobs,
                        'recruiters' => $recruiters,
                    ]);
                }
            }
        } else {
            return view('404');
        }
    }

    public function addFavoriteToCondidate($id)
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

                $allFavorites = DB::table('favorites')
                    ->where('favorite', $id)
                    ->where('user_id', Auth::user()->id)
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                if (count($allFavorites) == 0) {
                    $favorite = new Favorite();
                    $favorite->user_id = Auth::user()->id;
                    $favorite->favorite = $id;
                    $favorite->save();
                } else {
                    $favorite = new Favorite();
                    $favorite = Favorite::find($allFavorites[0]->id);
                    $favorite->user_id = Auth::user()->id;
                    $favorite->favorite = $id;
                    $favorite->save();
                }
                return redirect('job-page/' . $id);
            }
        } else {
            return view('404');
        }
    }

    public function deleteFavoriteToCondidate($id)
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

                $favorite = Favorite::find($id);
                if ($favorite->id == $id) {
                    $favorite->delete();
                    return redirect('candidate/candidate-favorites');
                }
            }
        } else {
            return view('404');
        }
    }

    public function index_recruiter()
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
                $candidates = array();
                $candidates = DB::table('candidates')
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();
                $cvs = array();
                $cvs = DB::table('cvs')
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                $favorites = array();
                $favorites = DB::table('favorites')
                    ->where('user_id', Auth::user()->id)
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                return view('recruiter.company-favorites', [
                    'favorites' => $favorites,
                    'candidates' => $candidates,
                    'cvs' => $cvs,
                ]);
            }
        } else {
            return view('404');
        }
    }

    public function addFavoriteToRecruter($id)
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

                $allFavorites = DB::table('favorites')
                    ->where('favorite', $id)
                    ->where('user_id', Auth::user()->id)
                    ->Where('deleted_at', null)
                    ->orderBy('updated_at', 'asc')
                    ->get();

                if (count($allFavorites) == 0) {
                    $favorite = new Favorite();
                    $favorite->user_id = Auth::user()->id;
                    $favorite->favorite = $id;
                    $favorite->save();
                } else {
                    $favorite = new Favorite();
                    $favorite = Favorite::find($allFavorites[0]->id);
                    $favorite->user_id = Auth::user()->id;
                    $favorite->favorite = $id;
                    $favorite->save();
                }
                return redirect('candidate-profile/' . $id);
            }
        } else {
            return view('404');
        }
    }

    public function deleteFavoriteToRecruiter($id)
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

                $favorite = Favorite::find($id);
                if ($favorite->id == $id) {
                    $favorite->delete();
                    return redirect('recruiter/company-favorites');
              }
            }
        } else {
            return view('404');
        }
    }
}
