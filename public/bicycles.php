<?php require_once('../private/initialize.php') ?>

<?php $page_title = 'Inventory'; ?>

<?php include(SHARED_PATH . '/public_header.php') ?>


<?php echo " dirname(__FILE__) " . dirname(__FILE__) . "<br/>";
echo "dirname(PRIVATE_PATH) " . dirname(PRIVATE_PATH) . "<br/>";

?>

    <div id="content">

        <div id="main-menu">
            <h2>Main Menu</h2>
            <ul>
                <li><a href=" ">Subjects</a>

                </li>
                <li><a href=" ">Pages</a>

                </li>
            </ul>
        </div>

    </div>

<?php include(SHARED_PATH . '/public_footer.php') ?>

<?php
/**
 * Created by PhpStorm.
 * User: Sergo
 * Date: 8/8/2018
 * Time: 6:49 PM
 */

$b = new Bicycle();

echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . ".<br/>";
$b->category = Bicycle::CATEGORIES[1];
echo 'Categories: ' . $b->category;
echo "<hr />";

echo $b->condition = Bicycle::CONDITION[4] . "<br/>";
echo $b->condition_id . "<br/>";

echo "aaaa";

?>