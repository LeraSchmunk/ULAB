<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    // public function send()
    // {
    //     $objDemo = new \stdClass();
    //     $objDemo->demo_one = 'Demo One Value';
    //     $objDemo->demo_two = 'Demo Two Value';
    //     $objDemo->sender = 'SenderUserName';
    //     $objDemo->receiver = 'ReceiverUserName';
    //     Mail::to("lerashmunk1995@yandex.ru")->send(new DemoEmail($objDemo));
    // }
    public function send(Request $request)
    {
        $details=[
          'name' => $request->name,
          'company' => $request->company,
          'phone' => $request->phone,
          'email'=>$request->email

        ];

        Mail::to("lerashmunk1995@yandex.ru")->send(new ContactMail($details));
    }
}