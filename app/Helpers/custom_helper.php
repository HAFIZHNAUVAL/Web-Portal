<?php

if (!function_exists('logged_in')) {
    function logged_in()
    {
        $session = session();
        return $session->get('id') ? true : false;
    }
}
