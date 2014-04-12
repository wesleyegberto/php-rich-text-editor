Rich Text Editor in PHP
=============

Project to integrate Tiny MCE editor with Elfinder file explorer.

- Elfinder [1]
- Tiny MCE [2]

editor.html
- Page with editor Tiny MCE

elfinder_explorer.html
- Page with Elfinder file explorer.

Steps:

1) editor.html
. Import the correct files (jQuery.js, tiny_mce.js and elfinder.min.js)
. Alter the URL of Elfinder Page Explorer in the callback function to Elfinder
    Line > file: '../../../../../php-rich-text-editor/elfinder_explorer.html'

2) elfinder_explorer.html
. Import the correct files (jQuery.js, elfinder.min.js and tiny_mce_popup.js)
. Alter the URL of the Elfinder connector.php
    Line > url: 'path_to_lib/elfinder/php/connector.php'

3) connector.php (Elfinder's file to setup the connector)
. Alter the parameter of path to files
    Line > 'path' => '../../../files/'
. Alter the parameter of URL to file (is returned to Tiny MCE to show the image)
    LIne > 'URL' => 'http://localhost:8080/php-rich-text-editor/files/'


[1] http://elfinder.org/

[2] http://www.tinymce.com/