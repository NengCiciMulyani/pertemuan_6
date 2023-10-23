<body>deret bilangan yang habis dibagi dengan bilangan 6 dan 9 dari range deret 0-100 </br></br></body>
<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i % 6 == 0 && $i % 9 == 0) {
        echo "$i <BR>\n";
    }
}
