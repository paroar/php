<?php

function email_validation($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
