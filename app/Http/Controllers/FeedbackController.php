<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Mail\FeedbackEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class FeedbackController extends Controller {

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function showFeedback(){
        // $feedback = Feedback::select('SELECT nama_sender, email_sender, phone_sender, pesan, DATE(created_at);')->get();
        $feedback = Feedback::all();
        return view('admin.feedback.feedback-home', ['feedback' => $feedback]);
    }

    public function showById($id){
        $feedback = Feedback::where('id', $id)->first();
        return view('admin.feedback.feedback-detail', ['fb' => $feedback]);
    }

    public function sendFeedback(FeedbackRequest $request){
        $validated = $request->validated();
        return response()->json(['feedback' => $validated]);
    }

    public function sendEmail($id){
        $user = Feedback::where('id', $id)->first();

        $mail = [
            'nama_sender' => $user->nama_sender,
        ];

        Mail::to($user->email_sender)->queue(new FeedbackEmail($mail));

        return redirect()->route('home.feed')->with('success', 'Email succesfully to send');

    }

    public function inputFeedback(Request $respon) {

        $trace = new Feedback();
        $trace->nama_sender = $respon->input('nama_sender');
        $trace->email_sender = $respon->input('email_sender');
        $trace->phone_sender = $respon->input('phone_sender');
        $trace->pesan = $respon->input('pesan');
        $trace->rating = $respon->input('rating');
        $trace->save();
        return redirect('index')->with('message', 'Pesan berhasil ditambahkan');
        return redirect('index') ;
    }
}
