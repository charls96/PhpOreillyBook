<?php

$user_validated = true;
$active = true;

if ($user_validated) {
    echo "Welcome!";
    $greeted = 1;
} else {
    echo "Access Forbidden!";
    exit;
}
?>

<?php if ($user_validated) : ?>
    <table>
        <tr>
            <td>First Name:</td>
            <td>Sophia</td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td>Lee</td>
        </tr>
    </table>
<?php else : ?>
    Please log in.
<?php endif ?>


<td><?php if ($active) {
        echo "yes";
    } else {
        echo "no";
    } ?></td>

<td><?php echo $active ? "yes" : "no"; ?></td>

<?php
$name = "carlos";

switch ($name) {
    case 'sylvie': // fall-through
    case 'bruno':
        print("yes");
        break;
    default:
        print("no");
        break;
}

#################
$i = 0;
$j = 0;

while ($i < 10) {
    $i++;
    while ($j < 10) {
        if ($j == 5) {
            continue 2; // continues through two levels
        }
        $j++;
    }
}
echo "</br>{$i}, {$j}</br>";

################

$total = 0;

for ($i = 1; $i <= 10; $i++) {
    $total += $i;
}
echo $total;

for ($i = 0, $j = 1; $i <= 10; $i++, $j *= 2) {
    $total += $j;
}
echo "</br>$total";

#####Try Catch#######
/*to ensure that your web application has a valid connection to a database
    before continuing*/

/* try {
        $dbhandle = new PDO('mysql:host=localhost; dbname=library',
        $username, $pwd);
        doDB_Work($dbhandle); // call function on gaining a connection
        $dbhandle = null; // release handle when done
    }
    catch (PDOException $error) {
        print "Error!: " . $error->getMessage() . "<br/>";
        die();
    } */

    class pepe{
        public $name;
    }
    
?>