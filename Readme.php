<?php

# This file passes the content of the Readme.md file in the same directory
# through the Markdown filter. You can adapt this sample code in any way
# you like.

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \lib\Markdown;

# Read file and pass content through the Markdown praser
$m = new Markdown();
$text = file_get_contents('Readme.md');
$html = $m->transform($text);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Markdown Lib - Readme</title>
    </head>
    <body>
<?php
			# Put HTML content in the document
			echo $html;
		?>
    </body>
</html>
