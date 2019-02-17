<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Zandro Wallaert">
    <title>Lotto</title>
</head>

<body>
<p>The 7 lotto numbers are:</p>
<ul>
<?php
    function generate_lotto_numbers($n){
        $randarray = array();
        for($i = 1; $i <= $n; )
        {
            unset($rand);
            $rand = rand(1, 42);
            if(!in_array($rand, $randarray))
            {
                $randarray[] = $rand;
                $i++;
            }
        }
        return $randarray;
    }
    $results = generate_lotto_numbers(7);
    for ($i = 0; $i < count($results); $i++){
        echo "<li>".$results[$i]."</li>";
    }
?>
</ul>
</body>

</html>
