<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessgeController extends Controller
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

    public function envoyerMessageRecruiter(Request $request)
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
                $message = new Message();
                $message->user_id = Auth::user()->id;
                $message->job_id = $request->input('job_id');
                $message->postule_id = $request->input('postule_id');
                $message->message = $request->input('message');
                $message->type = 'recruteur';
                $message->save();
                return redirect()->back();
            }
        } else {
            return view('404');
        }
    }


    public function deleteMessageRecruiter($id)
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
                $message = Message::find($id);
                $message->delete();
                return redirect()->back();
            }
        } else {
            return view('404');
        }
    }



    public function deleteMessageCandidate($id)
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
                $message = Message::find($id);
                $message->delete();
                return redirect()->back();
            }
        } else {
            return view('404');
        }
    }
}
