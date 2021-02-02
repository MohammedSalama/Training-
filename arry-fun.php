<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php

use function PHPSTORM_META\type;

for($i = 0; $i <= 10; $i++){
        if ($i == 2 )
        {
            echo "<h1>Eng.Mohamed Amr</h1>";
        }
        echo "$i <br>";
    }
    function sayHello($name)
    {
        echo "<h1>Hello My Dear $name <br></h1> ";
    }
    sayHello("Mohamed Amr") ;

    $users = [
        'Ali' => [
            'age' => 22,
            'birthDate' => 11-10-1998,
            'job' => 'Developer and Designer'
        ],
        'Mohamed Salama' => [
            'age' => 24,
            'birthDate' => 8-11-1996,
            'Job' => 'Developer'
        ],
    ];

    echo '<pre>';
    print_r($users);
    echo '</pre>';

    function div($x , $y)
    {
        $z = $x / $y;
        echo $z;
    }
    div(250 , 5);

    echo "<br>";

    function typeTo($num)
    {
        for($i = 0; $i <= $num; $i++)
        {
            echo "$i <br>";
        }
    }
    typeTo(20);


    ?>
</body>

</body>

</html>