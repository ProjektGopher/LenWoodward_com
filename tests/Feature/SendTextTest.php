<?php

namespace Tests\Feature;

use App\Http\Livewire\SendText;
use App\Notifications\MessageReceived;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;
use Livewire\Livewire;
use Tests\TestCase;

class SendTextTest extends TestCase
{
    /** @test */
    public function welcome_page_loads_send_text_component(): void
    {
        $this->get('/')
            ->assertSeeLivewire('send-text')
            ->assertSee('dope');
    }

    /** @test  */
    public function name_is_required(): void
    {
        Livewire::test(SendText::class)
            ->set('name', '')
            ->call('send')
            ->assertHasErrors(['name' => 'required']);
    }

    /** @test  */
    public function company_is_required(): void
    {
        Livewire::test(SendText::class)
            ->set('company', '')
            ->call('send')
            ->assertHasErrors(['company' => 'required']);
    }

    /** @test  */
    public function message_is_required(): void
    {
        Livewire::test(SendText::class)
            ->set('message', '')
            ->call('send')
            ->assertHasErrors(['message' => 'required']);
    }

    /** @test */
    public function it_sends_api_call_when_filled_properly(): void
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
    public function it_fails_silently_if_honeypot_field_is_filled(): void
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
