<?php

function redirect(string $url): void
{
    header("Location: $url");
    die();
}
