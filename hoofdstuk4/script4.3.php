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

?>

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

?>

<?php
$task4 = "";
$number3 = 1;

while ($number3 < 7)
{
    $task4 .= "<h1>dit is de ".$number3."e iteratie</h1>";
    $number3++;

}
?>

<?php
$task5 = "";
for ($number3 = 1; $number3 < 11;)
{
    if ($number3 == 1)
    {
        $task5 .= "<table>";
    }
    $task5 .= "<tr><td>dit is de ".$number3."e iteratie</td></tr>";
    if ($number3 == 10)
    {
        $task5 .= "</table>";
    }
    $number3++;
}
?>

<?php
$task6 = "";
$YearDate = 2020;
while ($YearDate > 2001)
{
    if ($YearDate == 2020) {
        $task6 = "<p> in " . $YearDate . " word ik 18 jaar oud</p>";
    }
    else if ($YearDate > 2002)
    {
        $Age = $YearDate - 2002;
        $task6 .= "<p> in ".$YearDate." was ik ".$Age." jaar oud</p>";
    }
    else
    {
        $task6 .= "<p> in ".$YearDate." ben ik geboren</p>";
    }
    $YearDate--;
}
?>

<?php
$task7 = "";
$YearDate = 2022;
switch ($YearDate > 2001)
{
    case 2022:
        echo $task7 .= "<p> in ".$YearDate." ben ik 20 en word ik volwassenen</p>";
    break;

    case 2021:
        $Age = $YearDate - 2002;
        $task7 .= "<p> in ".$YearDate." word ik $Age </p>";
    break;

    case 2020:
        $task7 .= "<p> in ".$YearDate." ben ik 18 en word ik een adolescent</p>";
    break;

    case 2014:
        $Age = $YearDate - 2002;
        $task7 .= "<p>In $YearDate was ik $Age jaar oud en werd ik een puber </p>";
    break;
    case 2010:
        $Age = $YearDate - 2002;
        $task7 .= "<p>In $YearDate was ik $Age jaar oud en werd ik een tiener </p>";
    break;
    case 2006:
        $Age = $YearDate - 2002;
        $task7 .= "<p>In $YearDate was ik $Age jaar oud en werd ik een kleuter </p>";
    break;
    case 2004:
         $Age = $YearDate - 2002;
        $task7 .= "<p>In $YearDate was ik $Age jaar oud en werd ik een peuter </p>";
    break;
    case 2002:
        $task7 .= "<p> in ".$YearDate." ben ik geboren en was ik een baby</p>";
    break;
    default:
        $Age = $YearDate - 2002;
        $task7 .= "<p> in ".$YearDate." was ik ".$Age." jaar oud</p>";
        $YearDate--;
        break;
}
?>
