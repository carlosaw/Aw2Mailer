<?php
 
namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
 
class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $qualquerNome)
    {
        //
        $this->user = $qualquerNome;
        //dd($name);
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //

        return $this->view('Mail.registerMail', [
            'nome' => $this->user->name
        ])->attach(__DIR__.'/../../public/boneco.png', [
            'as' => '404.png'
        ]);
        // attach('C:\projetosLaravel\Aw2Mailer\public\boneco.png');
    }
}