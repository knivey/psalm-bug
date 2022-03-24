<?php
require_once 'bootstrap.php';

function test(): string {
    $someVariable = "abcdefghijklmnopqrstuvwxyz";
    return $someVariable . "abcdefghijklmnopqrstuvwxyz";
}
