<?php

file_put_content(__DIR__ . '/data.txt', uniqid());

if (!is_dir(__DIR__ . '/folder'))
{
    mkdir(__DIR__ . '/folder');
}

file_put_content(__DIR__ . '/folder/data.txt', uniqid());

echo 'Compile OK';
