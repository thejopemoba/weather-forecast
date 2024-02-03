<?php

include 'data/dados-endpoint.php';

$result = json_decode($endpoint, true);

$temperatura = $result['results']['temp'];

echo $temperatura;


?>