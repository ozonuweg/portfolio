<hr>
<div>&copy; PHP Motors, All rights reserved.</div>
<div>All images used are believed to be in "Fair Use". Please notify the author if any are not and they will be removed.</div>
<div>
    <?php
    // $timestamp = filemtime(__FILE__);
    // $date = filemtime("view/home.php");
    // echo date('d F, Y', $date);
    $file = $_SERVER["SCRIPT_NAME"];
    $break = Explode('/', $file);
    $pfile = $break[count($break) - 1];
    echo "Last Updated: " .date("d F, Y",filemtime($pfile));
    ?>
</div>