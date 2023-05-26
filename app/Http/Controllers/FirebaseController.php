<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class FirebaseController extends Controller
{
    public static function sendWebNotification($data)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $serverKey = 'AAAARg-zJKY:APA91bGJEIcHE6Qg-i3U98Z6bUkIDzDwviUxw38aWtcgllo31eVZvpLbM9XOk6GE28MfMLx1HHyjkGf-UWbAtnJNIyBESnGT3efyljrFT-0SYwYrbV0b5SRO2BabzU4Oyhyt8gmWjGxc';
        $encodedData = json_encode($data);

        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);

        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }

        curl_close($ch);

        return "Notification Sent Successfully";
    }
}
