<?php

include 's3config.php';

    $filePath = "/path/to/yourimage.jpg";
    // $filePath = "/path/to/yourvideo.mp4";
    $keyName = basename($filePath);

// Create a folder on s3 name 'upload'

    $input = S3::inputFile($filePath);
    if( $s3->putObject($input, BUCKET , 'upload/'.$keyName, S3::ACL_PUBLIC_READ) ){
        echo "1";
    } else{
        echo "0";
    }
