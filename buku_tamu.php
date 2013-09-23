<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <link rel="stylesheet" href="css/style.css" type="text/css" /> 
    <script src="javascript/jquery-1.4.js" type="text/javascript"></script>
    <script src="javascript/newsticker.js" type="text/javascript"></script>
</head>
<body>
    <div id="sidebarkiri">
        <h2>Buku Tamu</h2>
        <ul id="listticker">
            <?php
            $bukutamu = mysql_query("SELECT * FROM bukutamu ORDER BY id_bukutamu DESC LIMIT 5");
            while ($bt = mysql_fetch_array($bukutamu)) {
                echo "<li><img src='foto_info/kecil_$bt[gambar]' width='54' height='54' />
                      <span class='news-text'>$bt[bukutamu]</span></li>";
            }
            ?>
        </ul>            
    </div> 
</body>
</html>





