
<?php
$nyawa = 3;
while ($nyawa > 0){
    echo "Game masih berjalan $nyawa<br>";
    $nyawa--;

    do {
        echo "Game masih berjalan $nyawa<br>";
        $nyawa--;
    } 
    while ($nyawa>0);
    if ($nyawa == 0) 
        {
       echo "Game over";
        }
}
?>