<?php

// http://undesigned.org.za/files/s3-class-documentation/index.html

    require 'AWS_S3_library.php';

// Set Amazon S3 Credentials
    define('BUCKET', 'YOUR_BUCKET_NAME');
    define('AWSS3_KEY', 'AWS_ACCESS_KEY_ID');
    define('AWSS3_SECRET', 'AWS_SECRET_ACCESS_KEY');
    define('REGION', 'us-east-1'); // Your region

    $s3 = new S3( AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY );
    
    // This is used to create a bucket in amazon S3
    // $s3->putBucket( BUCKET, S3::ACL_PUBLIC_READ );
