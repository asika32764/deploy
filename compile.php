<?php

$content = uniqid();

file_put_contents(__DIR__ . '/data.txt', $content);

if (!is_dir(__DIR__ . '/folder'))
{
    mkdir(__DIR__ . '/folder');
}

file_put_contents(__DIR__ . '/folder/data.txt', $content);

echo 'Compile OK';
