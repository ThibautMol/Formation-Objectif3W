<?php
setcookie(
    'LOGGED_USER',
    'utilisateur@exemple.com',
    [
        'expires'=> time()+30*24*3600,
        'secure'=> true,
        'httponly'=> true,
    ]
    );