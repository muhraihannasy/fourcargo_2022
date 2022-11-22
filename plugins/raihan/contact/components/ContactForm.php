<?php

namespace Raihan\Contact\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Contact Form By Raihan'
        ];
    }

    function onSend()
    {

        $vars = [
            'name' => Input('nama'),
            'email' => Input('email'),
            'phone' => Input('phone'),
            'message' => Input('message'),
            'submit' => Input('submit'),
        ];

        if (isset($vars['submit'])) {
            Mail::send('raihan.contact.views.mail.message', $vars, function ($message) {

                $message->to('muhraihannasy@gmail.com', 'Admin Person');
                $message->subject('This is a reminder');
            });
            $this->page['result'] = 'ada';
            var_dump("Hello");
        } else {
            $this->page['result'] = 'gada';
            var_dump("Hello");
        }
    }
}
