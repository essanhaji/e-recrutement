<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show()
    {
        $candidates = DB::table('candidates')->Where('deleted_at', null)->get();
        $cvs = DB::table('cvs')
        ->Where('deleted_at', null)
        ->Where('active', 'true')
        ->orderBy('updated_at', 'desc')
        ->limit(5)->get();

        $recruiters = DB::table('recruiters')->Where('deleted_at', null)->get();
        $jobs = DB::table('jobs')->Where('deleted_at', null)->Where('active', 'true')->orderBy('updated_at', 'desc')->limit(5)->get();

        $num_comptabilité = DB::table('jobs')
            ->select('categorie')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'Comptabilité')
            ->get();

        $num_bancaire = DB::table('jobs')
            ->select('categorie')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'Bancaire')
            ->get();

        $num_designart = DB::table('jobs')
            ->select('categorie')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'Design & Art')
            ->get();

        $num_assurance = DB::table('jobs')
            ->select('categorie')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'Assurance')
            ->get();

        $num_développement = DB::table('jobs')
            ->select('categorie')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'Développement')
            ->get();

        $num_medicine = DB::table('jobs')
            ->select('categorie')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'Medicine')
            ->get();

        $num_marketing = DB::table('jobs')
            ->select('categorie')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'Marketing')
            ->get();

        $num_management = DB::table('jobs')
            ->select('categorie')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('categorie', 'Management')
            ->get();

        return view('index', ['jobs' => $jobs,
            'recruiters' => $recruiters,
            'cvs' => $cvs,
            'candidates' => $candidates,
            'num_comptabilité' => $num_comptabilité,
            'num_bancaire' => $num_bancaire,
            'num_designart' => $num_designart,
            'num_assurance' => $num_assurance,
            'num_développement' => $num_développement,
            'num_medicine' => $num_medicine,
            'num_management' => $num_management,
            'num_marketing' => $num_marketing,
        ]);
    }



}
