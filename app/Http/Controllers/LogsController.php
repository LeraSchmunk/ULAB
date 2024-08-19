<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


class LogsController extends Controller
{

    public function getIP()
    {
        date_default_timezone_set('Asia/Yekaterinburg');
        $file = __DIR__.'/good.txt';
        $current = file_get_contents($file);
        $ps = $_SERVER["REMOTE_ADDR"];
        $current .= $ps.' date: '.date("d-m-Y H:i:s").' url: '.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."\n";
        file_put_contents($file, $current);
    }

    public function vision_ip() {
       $file = __DIR__.'/good.txt';
       $text_arr = '';

       $fn = fopen($file, 'r');

       while ($string = fgets($fn)){
           $text_arr .= ';' . $string;
       }

       $new_arr = explode(';', $text_arr);
       $result_arr = [];
       foreach ($new_arr as $item) {
           $arr_exp = explode(' ', $item);
           if (!empty($arr_exp[0])){
               $result_arr[] = [
                 'ip_address' => $arr_exp[0],
                 'visit_date' => $arr_exp[2],
                 'visit_time' => $arr_exp[3]
               ];
           }
       }
       
        return view('vision_visits', compact('result_arr'));
    }

}
