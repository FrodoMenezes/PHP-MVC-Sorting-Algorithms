<?php 
require_once(__DIR__ . '/../Controllers/BubbleSortController.php');
$classBubbleSort = new BubbleSortController;
$randomArray = $classBubbleSort->randomArrayWithTenNumber();
$arraySorted = $classBubbleSort->bubble_sort($randomArray);
?>

<div>
	<div>
	    <h2><?php echo 'BubbleSort' ?></h2>
        <hr>
        <h3>Random array with 10 elements:</h3>
        <pre>
        <?php 
            print_r($randomArray);
        ?>
        <hr>
        <h3>Same array, but now it's sorted!</h3>
        <?php 
            print_r($arraySorted);
        ?>
	</div>
</div>
