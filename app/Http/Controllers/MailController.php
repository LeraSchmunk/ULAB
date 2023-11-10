<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactMail;

use App\Http\Controllers\Controller;

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
        $details = [
            'email'=> $request->email,
            'name' => $request->name,
            'company' => $request->company,
            'number' => $request->number,
        ];

        Mail::to('limsyst@yandex.ru')->locale('ru')->send(new ContactMail($details));
    }
}
