<?php

include 's3config.php';

$sourceBucket = "Your-Source-Bucket-Name";
$sourceFile = "Your-Source-File-Name";
$destinationBucket = "Your-Destination-Bucket-Name";
$destinationFile = "Your-Destination-File-Name";

	if ( S3::copyObject($sourceBucket, $sourceFile, $destinationBucket, $destinationFile, S3::ACL_PRIVATE) ) {
		echo "1";;
    } else {
		echo "0";
    }