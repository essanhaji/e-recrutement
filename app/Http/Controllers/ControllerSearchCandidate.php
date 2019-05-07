<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerSearchCandidate extends Controller
{
    public function allCvs()
    {
        $etude = '';
        $experience = '';
        $motClée = '';

        $candidates = DB::table('candidates')
            ->Where('deleted_at', null)
            ->get();

        $cvs = DB::table('cvs')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('find-candidate', [
            'cvs' => $cvs,
            'candidates' => $candidates,
            'etude' => $etude,
            'experience' => $experience,
            'motClée' => $motClée,
        ]);
    }

    public function searchCvs(Request $request)
    {
        $etude = $request->input('etude');
        $experience = $request->input('experience');
        $motClée = $request->input('motClée');

        $candidates = DB::table('candidates')
            ->Where('deleted_at', null)
            ->get();

        $cvs = DB::table('cvs')
            ->Where('deleted_at', null)
            ->Where('active', 'true')
            ->Where('etude', $etude)
            ->Where('experience', $experience)
            ->Where('title', 'like', '%' . $motClée . '%')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('find-candidate', [
            'cvs' => $cvs,
            'candidates' => $candidates,
            'etude' => $etude,
            'experience' => $experience,
            'motClée' => $motClée,
        ]);
    }
}
