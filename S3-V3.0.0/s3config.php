<?php

// Download vendor from http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.zip

    require '/path/to/aws-autoloader.php';

    use Aws\S3\S3Client;
    use Aws\S3\Exception\S3Exception;

// Set Amazon S3 Credentials
    define('BUCKET', 'YOUR_BUCKET_NAME');
    define('AWSS3_KEY', 'AWS_ACCESS_KEY_ID');
    define('AWSS3_SECRET', 'AWS_SECRET_ACCESS_KEY');
    define('REGION', 'us-east-1'); // Your region

    $s3 = S3Client::factory(
        array(
            'credentials' => array(
                'key' => AWSS3_KEY,
                'secret' => AWSS3_SECRET
            ),
            'version' => 'latest',
            'region'  => REGION
        )
    );