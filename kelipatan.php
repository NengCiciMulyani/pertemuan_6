<body>deret bilangan kelipatan 3 dari range 0-100 </br></br></body>
<?php
for ($i = 0; $i <= 100; $i = $i + 3) {
    if ($i % 3 == 0) {
        echo "$i <BR>\n";
    }
}
