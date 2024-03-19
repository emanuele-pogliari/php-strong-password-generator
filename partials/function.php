<?php

$pwdLength = isset($_GET['length']);

function generatePassword($pwdLength)
{
    $pwd = "";
    for ($i = 0; $i < $pwdLength; $i++) {
        $pwd .= chr(rand(33, 126));
    }
    return $pwd;
};
