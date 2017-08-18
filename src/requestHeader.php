<?php
stream_context_set_default( [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
]);
$url = $_POST['link'];
$header = get_headers($url, 1);
echo $header['X-FRAME-OPTIONS'].$header['X-Frame-Options'][0];
?>