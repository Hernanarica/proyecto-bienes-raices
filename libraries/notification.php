<?php

use App\Session\Session;

/**
 * Show login notification
 * @param string $status
 * @param string $message
 */
function showNotificationLogin(string $status, string $message)
{
   Session::set('status-notification', [
       'status'  => $status,
       'message' => $message
   ]);
}