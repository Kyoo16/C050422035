<?php
$count = 0;
for ($i = 3; $i <= 127; $i++) {
    if ($i % 6 == 0) {
        $count++;
    }
}
echo "Banyaknya bilangan kelipatan 6 dari 3 hingga 127 adalah: " . $count;
?>
