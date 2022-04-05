<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMailer;
use Illuminate\Http\Request;
use App\Jobs\WelcomeMailerJob;
use Illuminate\Support\Facades\Mail;
use PDF;
class WelcomeMailController extends Controller
{
    public function register(Request $req)
    {
        return view("register");
    }

    public function doRegister(Request $req)
    {
         $req->validate(['email' => 'required|email']);
         WelcomeMailerJob::dispatch("Gurinder",$req->email);
         return "Successfully mail send";
    }

    public function pdfDownload()
    {
        // return view("pdf.invoice")->with(["name" => "Nikhil"]);
        $pdf = PDF::loadView('pdf.invoice', [ 'name' => 'Nikhil']);
          return $pdf->download('invoice.pdf');
        // return view("pdf.invoice");
    }
}

// Controller $name = "Gurinder"

// JOB ->  SendMailJob ($name)

// Mailer ($name)  Send Mail

// View -> Welcome $name


// Controller  $image

//  JobClass $image

//  Resize Images ($image) 10 Sec