<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactForm;
use App\Mail\ContactFormMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SenderController extends Controller
{

    protected function message_to_telegram($text)
    {
        $arr_chat = "381762556,845697964,496378528"; 
        if($arr_chat) {

            $arr_chat = explode(",",$arr_chat);
            $ch = curl_init();
            
            for ($i = 0; $i<count($arr_chat); $i++) {
                curl_setopt_array(
                    $ch,
                    array(
                        CURLOPT_URL => 'https://api.telegram.org/bot' . env("TG_TOKEN") . '/sendMessage',
                        CURLOPT_POST => TRUE,
                        CURLOPT_RETURNTRANSFER => TRUE,
                        CURLOPT_TIMEOUT => 10,
                        CURLOPT_POSTFIELDS => array(
                            'chat_id' => trim($arr_chat[$i]),
                            'text' => $text,
                        ),
                    )
                );
                $output = curl_exec($ch);
            }
        }
        
    }

    public function send_contact_form(ContactForm $request) {
        Mail::to("asmi046@gmail.com")->send(new ContactFormMail($request));
        return redirect(route("thanks"));
    }
}
