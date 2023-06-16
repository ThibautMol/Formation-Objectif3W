<?php

function disabled($is_disabled) {
    if ($is_disabled==1) {
        return 'disabled';
    }
    else {
        return '';
    }
}
$disabled_abled=disabled($is_disabled);
?>