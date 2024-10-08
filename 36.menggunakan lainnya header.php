<?php
header("HTTP/1.1 404 Not Found"); // Mengirimkan status error 404

// Mengatur cookie melalui header
header("Set-Cookie: nama=nilai; expires=Wed, 17 Aug 2022 13:00:00 GMT; path=/");
?>
