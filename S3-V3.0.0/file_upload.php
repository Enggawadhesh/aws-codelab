<?php

include 's3config.php';

    $filePath = "/path/to/yourimage.jpg";
    // $filePath = "/path/to/yourvideo.mp4";
    $keyName = basename($filePath);

// Create a folder on s3 name 'upload'
    try {

        $result = $s3->putObject([
                    'Bucket'=> BUCKET,
                    'Key' =>  'upload/'.$keyName, // 'upload' folder name on s3 bucket
                    'SourceFile' => $filePath,
                    'StorageClass' => 'REDUCED_REDUNDANCY',
                    'ACL'    => 'public-read'
                ]);

        // Print the URL to the object.
        echo $result['ObjectURL'];
        
    } catch (S3Exception $e) {
       echo $e->getMessage();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
