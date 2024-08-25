<?php
require '../vendor/autoload.php';

use Google\Client;
use Google\Service\Calendar;
use Google\Service\Meet;

// Client konfigürasyonu (client ID, client secret, vb.)
$client = new Client();
$client->setApplicationName('toplanti');
$client->setClientId('387324047864-muucgen50v4dggcb30jhmf5d4brjr0nm.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost');
$client->setScopes([Calendar::CALENDAR_READWRITE, Meet::MEET_ADMIN]);

// Kullanıcı oturum açma (OAuth 2.0 akışı)
if (!$client->getAccessToken()) {
    // Kullanıcıyı oturum açma sayfasına yönlendir
}

// Calendar servisi oluştur
$service = new Calendar($client);

// Yeni bir etkinlik oluştur
$event = new Calendar_Event();
$event->setSummary('My Meet');
$event->setStart(new Google_Service_Calendar_EventDateTime(['dateTime' => '2024-07-26T17:00:00+03:00']));
$event->setEnd(new Google_Service_Calendar_EventDateTime(['dateTime' => '2024-07-26T18:00:00+03:00']));

// Etkinliği takvime ekle
$calendarId = 'primary';
$event = $service->events->insert($calendarId, $event);

// Meet bağlantısı oluştur (Meet API kullanarak)
// ...

// Oluşturulan Meet bağlantısını döndür
echo $meetLink;

?>
