<?php
setcookie(
    'LOGGED_USER',
    'firstname',
    [
        'expires'=> time()+30*24*3600,
        'secure'=> true,
        'httponly'=> true,
    ]
    );