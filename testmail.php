<?php
$success = mail('subr86@gmail.com', 'My Subject', 'test mail');
if (!$success) {
    $errorMessage = error_get_last()['message'];
}
?>