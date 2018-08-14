<?php require_once('../private/initialize.php');

$page_title = 'Inventory';

include(SHARED_PATH . '/public_header.php')
?>

<div id="content">

    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href=" ">Bikes</a>

            </li>
            <li><a href=" ">News</a>

            </li>
        </ul>
    </div>

</div>

<?php
echo "<hr />";

echo "<hr />";

$b = new Bicycle();

echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . ".<br/>";
$b->category = Bicycle::CATEGORIES[1];
echo 'Categories: ' . $b->category;
echo "<hr />";

echo $b->condition_id = Bicycle::CONDITION[4] . "<br/>";
echo $b->condition_id . "<br/>";
echo "<hr />";

echo 'Instance count: ' . Bicycle::$instance_count . '<br />';
echo "<hr />";


echo $b->convert_weight("kg", 5);

?>

<?php include(SHARED_PATH . '/public_footer.php') ?>
