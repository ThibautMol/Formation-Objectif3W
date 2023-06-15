<?php 
            //key  //value
setcookie('theme','dark');

//on a droit à maxi 20 cookies par domaine.

setcookie('auth','1568482----'. sha1('tototata'), time() + 3600 *24 * 3, httponly:true);
// sha1=encryptage