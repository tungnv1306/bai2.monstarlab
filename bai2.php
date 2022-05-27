<?php


function isValidString($stringValue) {
    $containBook = strpos($stringValue, "book") !== false;
    $containRes = strpos($stringValue, "restaurant") !== false;

    return ($containBook && !$containRes) || (!$containBook && $containRes);
}

function countNumberPhrase($string) {
    $count = 0;
    $length = strlen($string);
    for($i = 0 ; $i < $length; $i++)
    {
        if($string[$i] == ".")
        {
            $count++;
        }
    }

    return $count;
}

function run($content) {
    if (!isValidString($content)) {
        echo "Chuỗi không hợp lệ . ";
        return;
    }
    echo "Chuỗi hợp lệ." . '<br/>' ;
    echo "Số câu là : " . countNumberPhrase($content);
}

$fp = fopen("file1.txt", "r");
$contents = fread($fp, filesize("file1.txt"));
echo "<pre>$contents</pre>";
run($contents);
fclose($fp);

$fp = fopen("file2.txt", "r");
$contents = fread($fp, filesize("file2.txt"));
echo "<pre>$contents</pre>";
run($contents);
fclose($fp);