<?php namespace App\Listeners;

use App\Events\ParticipeRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Contracts\Mail\Mailer;

use Log;
use Mail;

class EmailParticipeConfirmation {

	protected $mailer;

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	/**
	 * Handle the event.
	 *
	 * @param  ParticipeRegistered  $event
	 * @return void
	 */
	public function handle(ParticipeRegistered $event)
	{
		Mail::send('emails.participe', ['participe' => $event->participe], function($m) use ($event) {
			//
			$m->from('sebastian@njose-rhcloud.com', 'Sebastian Njose');
			$m->to($event->participe->email, $event->participe->name);
			$m->subject('Participe registration confirmation');
			$m->attach(storage_path('exports').'/'.$event->participe->file);

			Log::info('Email sent to '.$event->participe->name.' <'.$event->participe->email.'> successfully!');
		});
	}

}
