<?php 
require_once(__DIR__ . '/../Controllers/BubbleSortController.php');
$ClasseBBsort = new BubbleSort;
$Random = $ClasseBBsort->randomArr();
$Sorted = $ClasseBBsort->bubble_sort($Random);
?>

<div>
	<div>
	    <h2><?php echo 'BubbleSort' ?></h2>
        <hr>
        <h3>Random array with 10 elements:</h3>
        <pre>
        <?php 
            print_r($Random);
        ?>
        <hr>
        <h3>Same array, but now it's sorted!</h3>
        <?php 
            print_r($Sorted);
        ?>
	</div>
</div>
