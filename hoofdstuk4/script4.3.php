<?php /**
 * User: Rosalie Bloemers
 * Date: 16-3-2020
 */ ?>


<?php
$task2 = 'lancering in:';
$number = 19;


while($number >= 0)
{
    $task2 =$task2.$number;
    if ($number > 0)
    {
        $task2 = $task2. ",";
    }
    $number--;
}
print $task2
?>
<br>
<?php
$task3 = "lancering in:";
for($number2 = 19; $number2 >= 0; $number2--)
{
    $task3 = $task3.$number2;
    if ($number2 > 0)
    {
        $task3 = $task3. ",";
    }

}
print $task3;
?>
