<?php

namespace App\Http\Livewire;

use App\Notifications\MessageReceived;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class SendText extends Component
{
    public $name;

    public $company;

    public $message;

    public $from; // honeypot field

    protected $rules = [
        'name' => 'required',
        'company' => 'required',
        'message' => 'required',
    ];

    public function send()
    {
        // Fail silently if honeypot field is not empty
        if ($this->from != '') {
            return;
        }

        $this->validate();
        $message = "Hi Len, this is $this->name from $this->company, and $this->message";
        // TODO: Use Twilio for this. Or Vonage. We don't really care. But that is for another day.
        // Notification::route('nexmo', '16049922418')
        //     ->notify(new MessageReceived($message));

        $this->name = '';
        $this->company = '';
        $this->message = '';
        $this->from = '';
    }

    public function render()
    {
        return view('livewire.send-text');
    }
}
