<a href="?s">?</a>
<pre>
<?php
    isset($_GET['s']) && show_source(__FILE__);
    $_ = isset($_GET['#']) ? $_GET['#']: die();
    foreach ([ "`", "flag", "cat", "meow"] as $nonono)
        strpos($_, $nonono) !== false && die("meow?");
    echo '[DEBUG]: ls "'.addslashes($_).'"';
    echo "\n";
    system('ls "'.addslashes($_).'"');
?>
</pre>
