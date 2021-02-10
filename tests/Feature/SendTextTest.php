<?php

namespace Tests\Feature;

use Livewire\Livewire;
use App\Http\Livewire\SendText;
use App\Notifications\MessageReceived;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\AnonymousNotifiable;
use Tests\TestCase;

class SendTextTest extends TestCase
{

    /** @test */
    public function welcome_page_loads_send_text_component()
    {
        $this->get('/')
            ->assertSeeLivewire('send-text')
            ->assertSee('dope');
    }

    /** @test  */
    function name_is_required()
    {
        Livewire::test(SendText::class)
            ->set('name', '')
            ->call('send')
            ->assertHasErrors(['name' => 'required']);
    }

    /** @test  */
    function company_is_required()
    {
        Livewire::test(SendText::class)
            ->set('company', '')
            ->call('send')
            ->assertHasErrors(['company' => 'required']);
    }

    /** @test  */
    function message_is_required()
    {
        Livewire::test(SendText::class)
            ->set('message', '')
            ->call('send')
            ->assertHasErrors(['message' => 'required']);
    }

    /** @test */
    public function it_sends_api_call_when_filled_properly()
    {
        Notification::fake();

        Livewire::test(SendText::class)
            ->set('name', 'The Doctor')
            ->set('company', 'Galifrey')
            ->set('message', 'Grab your coat!')
            ->call('send')
            ->assertHasNoErrors(['name', 'company', 'message']);

        Notification::assertSentTo(
            new AnonymousNotifiable,
            MessageReceived::class
);

    }
    
    /** @test */
    public function it_fails_silently_if_honeypot_field_is_filled()
    {
        Notification::fake();

        Livewire::test(SendText::class)
            ->set('name', 'The Doctor')
            ->set('company', 'Galifrey')
            ->set('message', 'Grab your coat!')
            ->set('from', 'random string')
            ->call('send')
            ->assertHasNoErrors(['name', 'company', 'message', 'from']);

        Notification::assertNothingSent();
    }

}
