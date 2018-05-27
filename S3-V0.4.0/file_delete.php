<?php

include 's3config.php';

	if ( $s3->deleteObject(VBUCKET , 'upload/'.$fileName) ) {
		echo "1";
	} else {
		echo "0";
	}
