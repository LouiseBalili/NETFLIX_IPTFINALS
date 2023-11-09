<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class TestEnrollmentController extends Controller
{
    public function sendNotification()
    {
        $data = [
            'body' => 'You received a new test notification',
            'actionText' => 'You are allowed to enroll',
            'url' => url('/'),
            'endingText' => 'You have 14 days to enroll'
        ];

        $user = User::first();

        Notification::send($user, new TestEnrollment($data));
    }
}
