<?php

function getConnnection(): PDO
{
    $dsn = 'mysql:host=172.18.0.1;port=3640;dbname=hb_pdo_pe7;charset=utf8mb4';
    $user = 'hb_pdo_pe7';
    $password = '(OS(-HshCjYc_4zD';

    return new PDO($dsn, $user, $password);
}
