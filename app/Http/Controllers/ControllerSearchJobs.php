<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerSearchJobs extends Controller
{

    public function allJobs()
    {
        $jobs = array();
        $recruiters = array();
        $categorie = '';
        $motClée = '';
        $city = '';

        $recruiters = DB::table('recruiters')->Where('deleted_at', null)->get();
        $jobs = DB::table('jobs')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('search-jobs', [
            'jobs' => $jobs,
            'recruiters' => $recruiters,
            'categorie' => $categorie,
            'motClée' => $motClée,
            'city' => $city,
        ]);
    }

    public function categorieJobs($categorie)
    {
        $jobs = array();
        $recruiters = array();
        $categorie = $categorie;
        $motClée = '';
        $city = '';

        $recruiters = DB::table('recruiters')->Where('deleted_at', null)->get();
        $jobs = DB::table('jobs')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'like', '%' . $categorie . '%')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('search-jobs', [
            'jobs' => $jobs,
            'recruiters' => $recruiters,
            'categorie' => $categorie,
            'motClée' => $motClée,
            'city' => $city,
        ]);

    }

    public function searchHome(Request $request)
    {
        $jobs = array();
        $recruiters = array();
        $categorie = $request->input('categories');
        $motClée = $request->input('motClée');
        $city = $request->input('city');

        $recruiters = DB::table('recruiters')->Where('deleted_at', null)->get();
        $jobs = DB::table('jobs')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'like', '%' . $categorie . '%')
            ->Where('city', 'like', '%' . $city . '%')
            ->Where('title', 'like', '%' . $motClée . '%')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('search-jobs', [
            'jobs' => $jobs,
            'recruiters' => $recruiters,
            'categorie' => $categorie,
            'motClée' => $motClée,
            'city' => $city,
        ]);

    }
}
