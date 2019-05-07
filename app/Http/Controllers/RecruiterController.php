<?php

namespace App\Http\Controllers;

use App\Recruiter;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RecruiterController extends Controller
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
        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {

                $recruiter = new Recruiter();
                $recruiters = DB::table('recruiters')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
                $recruiter = $recruiters[0];
                $jobs = DB::table('jobs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

                return view('recruiter.company-page', ['jobs' => $jobs, 'recruiter' => $recruiter]);

            }
        } else {
            return view('404');
        }

    }

    public function create()
    {
        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

            if (count($recruiters) == 0) {
                return view('recruiter.company-profile-create');
            } else {
                $profile = array();
                $profile = DB::table('recruiters')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
                $recruiter = $profile[0];
                return view('recruiter.company-profile-edit', ['recruiter' => $recruiter]);
            }

        } else {
            return view('404');
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()->type == 'recruteur') {
            $recruiters = array();
            $recruiters = DB::table('recruiters')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

            if (count($recruiters) == 0) {
                $recruiteur = new Recruiter();

                $recruiteur->user_id = Auth::user()->id;
                $recruiteur->name_entreprise = $request->input('name_entreprise');
                $recruiteur->logo = $request->logo->store('logo');
                $recruiteur->description_entreprise = $request->input('description_entreprise');
                $recruiteur->speciality = $request->input('speciality');
                $recruiteur->address = $request->input('address');
                $recruiteur->email = $request->input('email');
                $recruiteur->website = $request->input('website');
                $recruiteur->phone_number = $request->input('phone_number');
                $recruiteur->facebook = $request->input('facebook');
                $recruiteur->insagram = $request->input('insagram');
                $recruiteur->twitter = $request->input('twitter');
                $recruiteur->google_plus = $request->input('google_plus');
                $recruiteur->linkedin = $request->input('linkedin');

                $recruiteur->save();
                return redirect('/recruiter/company-page');
            } else {
                $profile = array();
                $profile = DB::table('recruiters')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
                $recruiter = $profile[0];
                return view('recruiter.company-profile-edit', ['recruiter' => $recruiter]);
            }

        } else {
            return view('404');
        }
    }

    public function edit()
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

                $profile = array();
                $profile = DB::table('recruiters')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
                $recruiter = $profile[0];
                return view('recruiter.company-profile-edit', ['recruiter' => $recruiter]);

            }
        } else {
            return view('404');
        }

    }

    public function update(Request $request)
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

                $recruiter = new Recruiter();
                $recruiter = Recruiter::find($request->input('id'));
                $recruiter->name_entreprise = $request->input('name_entreprise');
                
                if ($request->hasFile('logo')) {
                    Storage::delete($recruiter->logo);
                    $recruiter->logo = $request->logo->store('logo');
                }
                $recruiter->description_entreprise = $request->input('description_entreprise');
                $recruiter->speciality = $request->input('speciality');
                $recruiter->address = $request->input('address');
                $recruiter->email = $request->input('email');
                $recruiter->website = $request->input('website');
                $recruiter->phone_number = $request->input('phone_number');
                $recruiter->facebook = $request->input('facebook');
                $recruiter->insagram = $request->input('insagram');
                $recruiter->twitter = $request->input('twitter');
                $recruiter->google_plus = $request->input('google_plus');
                $recruiter->linkedin = $request->input('linkedin');

                $recruiter->save();
                return redirect('/recruiter/company-page');

            }
        } else {
            return view('404');
        }
    }

}
