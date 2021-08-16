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

    $foo = "bar";
    echo "$foo </br>";
    $$foo = "baz";
    echo $bar;

    echo "</br></br>";
    $white = "snow";
    $black = &$white;
    unset($white);
    print $black;

    function &retRef()
    { // note the &

        $var = "PHP";
        return $var;
    }

    $v = &retRef(); // note the &

    echo "</br>";
    print $v;
    echo "</br>";

    /* function updateCounter(){
    
        global $counter;
        $counter++;
    }
    $counter = 10;
    updateCounter();
    echo "</br>" . $counter . "</br>";
    */
    /*  function updateCounter2()
    {
        $GLOBALS[‘counter’]++;
    }
    $counter2 = 10;
    updateCounter2();
    echo $counter2; */

    function updateCounter()
    {
        static $counter = 0;
        $counter++;
        echo "Static counter is now {$counter}<br/>";
    }
    $counter = 10;
    updateCounter();
    updateCounter();
    echo "Global counter is {$counter} </br>";

    function greet($name)
    {
        echo "Hello, {$name}";
    }
    greet("Janet");

    ?>
</body>

</html>