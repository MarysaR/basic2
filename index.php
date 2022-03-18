<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
for ($i = 10; $i >= -10 ; $i = $i -3) {
    echo $i . PHP_EOL;
} 

$name = ""; 
if ($name === "Dark Vader" || $name === "Dark Sidious") {
    echo "Sith" . PHP_EOL;
} elseif ($name === "Yoda") {
    echo "Jedi"; 
} else {
    echo "sans doute une personne sans pouvoir" . PHP_EOL;
}

$jedis = [
    'Obi-Wan Kenobi', 
    'Yoda', 
    'Luke Skywalker', 
    'Windu', 
    'Qui-gon Jinn'
];
//$jedis[] = 'Rey';

array_push($jedis, 'Rey', 'Machin');
var_dump($jedis); 
echo $jedis[1] . '<br>';
foreach ($jedis as $jedi) {
    echo $jedi . '<br>';
}

// tableau associatif
$jedis = [
    'Yoda' => 900,
    'Lea' => 19,
    'Luke Skywalker' => 19, 
    'Dark Vader' => 46,
    'Chewbacca' => 200,
];

$jedis['Han Solo'] = 29;
/*array_push($jedis, ['Han Solo' => 29]); // Array_push = Tableau numérique*/
asort($jedis);
var_dump($jedis);

?>
       <ol>     
        <?php foreach($jedis as $key => $jedi): ?>
        <li><?php echo $key?></li>
        <?php endforeach; ?>
        <!--Liste ul-li php-->
    </ol>

    <?php ksort($jedis) ?>
    <ol>
        <?php foreach($jedis as $key => $jedi): ?>
        <?php if($jedi > 100): ?>
        <li><?php echo $key . ' : ' .  $jedi . 'ans'?></li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ol>

    <!--Tableaux multidimensinnels-->
    <?php 
$races = [
  'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
  'Sith' => ['Dark Vader', 'Darth Maul', 'Dooku'],
  'Gungan' => ['Jar Jar Binks'],
  'Human' => ['Han Solo', 'Leia'],
];
?>

    <?php foreach($races as $key => $jedis): ?>
    <h2><?=$key . ' ' . count($jedis)?></h2>
    <ol>
        <?php foreach($jedis as $jedi): ?>
        <li><?php echo $jedi?></li>
        <?php endforeach; ?>
    </ol>
    <?php endforeach; ?>

</body>

</html>