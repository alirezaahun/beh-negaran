<?php

namespace App\Channels;

use Illuminate\Notifications\Notification;
use Ghasedak\Laravel\GhasedakFacade;

class SmsChannel{

    public function send($notifiable , Notification $notification){
        // dd($notifiable , $notification->code);

        $receptor = $notifiable->cellphone;
        $type = 1;
        $template = "test";
        $param1 = '123456';

        $response = GhasedakFacade::Verify($receptor, $type, $template, $param1);

        dd($response);
    }

}
