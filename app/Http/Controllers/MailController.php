<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

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

        Mail::raw('Привет', function($message)
        {
            $message->from(env('MAIL_USERNAME', ''), 'Vasya Pupkin');
            $message->to('obukhov081189@gmail.com');
        });
//	 $to = "obukhov081189@gmail.com";
//         $subject = "Заявка на демо-доступ от {$request->name}";
//         $message = "Имя: " . $request->name . "<br/> Должность: " . $request->company . "<br/> Телефон: " . $request->phone;
//         $is_sent = mail($to, $subject, $message);
//
//        echo json_encode($is_sent);
    }
}