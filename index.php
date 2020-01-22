<p><a href="dotenv.php">PHP dotenv</a></p>
<?php
echo "<br />getenv " . getenv('S3_BUCKET');
echo '<br />$_ENV ' . $_ENV['S3_BUCKET'];
echo '<br />$_SERVER ' . $_SERVER['S3_BUCKET'];
