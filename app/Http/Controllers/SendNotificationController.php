<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\sendNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class SendNotificationController extends Controller
{
    public function sendNotification()
    {
        $data = [
            'body' => 'We recently failed to validate your payment information we hold on record for your account.
                        Therefore we need a brief validation process in order to verify your billing and payment details.
                        This process will take a couple of minutes
                        and will allow us to maintain our high standard of account security.',
            'actionText' => 'www.netflix.com/verification',
            'url' => url('/'),
            'endingText' => 'Netflix Support Team'
        ];

        $user = User::first();

        Notification::send($user, new sendNotification($data));
    }
}
