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
        $notifications = $this->getNotifications();
        $notificationsHistory = $this->getNotificationsHistory();

        // Limpiar notificaciones
        $this->getNotifications()->markAsRead();

        return view('notifications.index', [
            'notifications' => $notifications,
            'notificationsHistory' => $notificationsHistory
        ]);
    }

    /**
     * Get the notifications for the authenticated user.
     */
    private function getNotifications()
    {
        return auth()->user()->unreadNotifications;
    }

    /**
     * Get the notifications history for the authenticated user.
     */
    private function getNotificationsHistory()
    {
        return auth()->user()->readNotifications;
    }
}
