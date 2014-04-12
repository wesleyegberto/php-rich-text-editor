<?php
error_reporting(0); // Set E_ALL for debuging
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderConnector.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinder.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeDriver.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeLocalFileSystem.class.php';

function access($attr, $path, $data, $volume) {
	return strpos(basename($path), '.') === 0 ? !($attr == 'read' || $attr == 'write') : null;
}

$opts = array(
	'debug' => true,
	'roots' => array(
		array(
			'driver'        => 'LocalFileSystem',   // driver for accessing file system (REQUIRED)
			'path'          => '../../../files/',         // path to files (REQUIRED)
			'URL'           => 'http://localhost:8080/php-rich-text-editor/files/', // URL to files (REQUIRED)
			'accessControl' => 'access',
			'attributes' => array(
			    array(
				    'pattern' => '/*/', //You can also set permissions for file types by adding, for example, .jpg inside pattern.
				    'read'    => true,
				    'write'   => true,
				    'locked'  => true
			    )
		    )
        )
	)
);
// run elFinder
$connector = new elFinderConnector(new elFinder($opts));
$connector->run();
?>