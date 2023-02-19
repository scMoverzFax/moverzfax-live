<?php

$secret = '6LcoH5ckAAAAAMisl9y8YoyVgZr8L_duQJ5qypJo';
$response = $_POST['g-recaptcha-response'];
$remoteip = $_SERVER['REMOTE_ADDR'];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => $secret,
    'response' => $response,
    'remoteip' => $remoteip
);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response_data = json_decode($result, true);

if ($response_data['success'] == true) {
    // reCAPTCHA verification passed, process the form submission
    // ...
} else {
    // reCAPTCHA verification failed, display an error message
    // ...
}

?>