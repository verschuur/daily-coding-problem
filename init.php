<?php
declare(strict_types=1);

// Get the second inout val (the first one is the filename)
function getProblem($argc, $argv)
{
    if ($argc > 1) {
        $arg = $argv[1];
        $matches = [];
        $problem = preg_match('/[0-9]+/', $arg, $matches);

        if ($matches !== false && count($matches) > 0) {
            return $matches[0];
        }
    }
    return false;
}


function copyBoilerplate($name)
{
    $src = './boilerplate';
    $dst = './src/'.$name;

    if (file_exists($dst)) {
        echo 'Directory '.$dst.' already exists, aborting!' . PHP_EOL;
        exit;
    }

    echo 'Copying '.$src.' to '.$dst. PHP_EOL;

    $dir = opendir($src);
    mkdir($dst);

    while (false !== ($file = readdir($dir))) {
        if (($file != '.' ) && ( $file != '..' )) {
            copy($src . '/' . $file, $dst . '/' . $file);

            $str = file_get_contents($dst . '/' . $file);
            $str = str_replace('PROBLEM_ID', $name, $str);

            file_put_contents($dst . '/' . $file, $str);
        }
    }
    closedir($dir);
    exec('composer dump-autoload');
}

// Get the input
$problem = getProblem($argc, $argv);

// Copy the boilerplate
if ($problem) {
    copyBoilerplate('P'.$problem);
} else {
    echo 'No proper problem format, use "PXXX"' . PHP_EOL;
    exit;
}
