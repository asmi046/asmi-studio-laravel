<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactForm;
use App\Mail\ContactFormMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SenderController extends Controller
{

    protected function getMessage($request) {
        $rezstr = "*Имя:* ".$request["name"]."\n\r";
        $rezstr .= "*Телефон:* ".$request["phone"]."\n\r";
        $rezstr .= "---\n\r";
        $rezstr .= "*Имя формы:* ".$request["form_name"]."\n\r";
        $rezstr .= "*Расположение формы:* ".$request["form_rasp"]."\n\r";
        $rezstr .= "*Адрес страницы:* ".$request["form_address"]."\n\r";

        return $rezstr;
    }

    protected function message_to_telegram($text)
    {
        $arr_chat = "381762556"; 
        if($arr_chat) {

            $arr_chat = explode(",",$arr_chat);
            $ch = curl_init();
            
            for ($i = 0; $i<count($arr_chat); $i++) {
                curl_setopt_array(
                    $ch,
                    array(
                        CURLOPT_URL => 'https://api.telegram.org/bot' .  config('app.tg_token') . '/sendMessage',
                        CURLOPT_POST => TRUE,
                        CURLOPT_RETURNTRANSFER => TRUE,
                        CURLOPT_TIMEOUT => 10,
                        CURLOPT_POSTFIELDS => array(
                            'chat_id' => trim($arr_chat[$i]),
                            'text' => $text,
                            "disable_web_page_preview" => "true",
                            "parse_mode" => "Markdown"
                        ),
                    )
                );
                $output = curl_exec($ch);
            }
        }
        
    }

    public function send_contact_form(ContactForm $request) {
        Mail::to("asmi046@gmail.com")->send(new ContactFormMail($request));
        $this->message_to_telegram($this->getMessage($request));
        return redirect(route("thanks"));
    }
}
