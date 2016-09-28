<?php
function validateEmail1($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateEmail2($email)
{
    $regex = '/^\S+@\S+\.\S+$/'; 
    return preg_match('$regex', $email) ? true : false;
}
