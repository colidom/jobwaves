<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $notifications = auth()->user()->unreadNotifications;

        // Limpiar notificaciones
        $notifications = auth()->user()->unreadNotifications;

        return view('notifications.index', [
            'notifications' => $notifications
        ]);
    }
}
