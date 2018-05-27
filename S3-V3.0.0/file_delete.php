<?php

include 's3config.php';

	try {
		
		$s3->deleteObject([
		    'Bucket' => BUCKET,
		    'Key'    => 'upload/'.$imgOldLarge // 'upload' folder name on s3 bucket
		]);
		
	} catch (S3Exception $e) {
       echo $e->getMessage();
    } catch (Exception $e) {
        echo $e->getMessage();
    }