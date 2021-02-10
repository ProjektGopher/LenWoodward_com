<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Notification;
use App\Notifications\MessageReceived;
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
        if($this->from != '') return;

        $this->validate();
        $message = "Hi Len, this is $this->name from $this->company, and $this->message";
        Notification::route('nexmo', '16049922418')
            ->notify(new MessageReceived($message));
    }

    public function render()
    {
        return view('livewire.send-text');
    }
}
