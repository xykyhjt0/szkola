<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Błąd wysyłania formularza.");
}

$firstName = htmlspecialchars(trim($_POST['first_name'] ?? ''));
$lastName  = htmlspecialchars(trim($_POST['last_name'] ?? ''));
$email     = htmlspecialchars(trim($_POST['email'] ?? ''));
$phone     = htmlspecialchars(trim($_POST['phone'] ?? ''));
$school    = htmlspecialchars(trim($_POST['school'] ?? ''));
$direction = htmlspecialchars(trim($_POST['direction'] ?? ''));
$class     = htmlspecialchars(trim($_POST['class'] ?? ''));
$year      = htmlspecialchars(trim($_POST['year'] ?? ''));
$message   = htmlspecialchars(trim($_POST['message'] ?? '—'));

if (!$firstName || !$lastName || !$email || !$phone || !$school || !$direction) {
    exit("Nie wypełniono wszystkich wymaganych pól.");
}

$to = "oplp5270@gmail.com";
$subject = "Nowe zgłoszenie rekrutacyjne – $firstName $lastName";

$body = "
<h2>Nowe zgłoszenie rekrutacyjne</h2>

<b>Imię i nazwisko:</b> $firstName $lastName <br>
<b>Email:</b> $email <br>
<b>Telefon:</b> $phone <br>
<b>Szkoła:</b> $school <br>
<b>Kierunek:</b> $direction <br>
<b>Klasa:</b> $class <br>
<b>Rok szkolny:</b> $year <br><br>

<b>Wiadomość:</b><br>
" . nl2br($message);

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Rekrutacja <support@coffeeland.online>\r\n";
$headers .= "Reply-To: $email\r\n";

$additionalParams = "-f support@coffeeland.online";

if (mail($to, $subject, $body, $headers, $additionalParams)) {
    header("Location: rekrutacja.php?success=1");
    exit;
} else {
    exit("❌ Błąd wysyłania emaila.");
}
