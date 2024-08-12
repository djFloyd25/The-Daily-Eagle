<?php

$pwdSignup = "BigSister12!";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "BigSister12!";

$pwdVerified = password_verify($pwdLogin, $hashedPwd);

if ($pwdVerified) {
    echo "Yay";
}