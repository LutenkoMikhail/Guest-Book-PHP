<?php
/**
 * Redirect browser
 * @param string $URL
 */
function httpRedirect(string $URL = '')
{
    header("Location:" . $URL);
    exit();
}
