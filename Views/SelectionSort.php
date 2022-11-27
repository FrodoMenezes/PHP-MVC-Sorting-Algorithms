<?php 
require_once(__DIR__ . '/../Controllers/SelectionSortController.php');
$classSelectionSort = new SelectionSortController;
$randomArray = $classSelectionSort->randomArrayWithTenNumber();
$arraySorted = $classSelectionSort->selection_sort($randomArray);
$timeDuration = $classSelectionSort->microTimeFloat();
?>

<div>
	<div>
        <h1>Selection Sort</h1>
        <hr>

        <div>
            <h3>Random array with 10 elements:</h3>
            <pre>
            <?php 
                print_r($randomArray);
            ?>
        </div>
        
        <hr>

        <div>
            <h3>Same array, but now it's sorted!</h3>
            <pre>
            <?php 
                print_r($arraySorted);
                echo '<p><b>Selection Sort runtime: ' . $timeDuration . '</b></p>';
            ?>
        </div>
   
        <div>
            <br>
            <hr>

            <p style="font-size:small;">
            <h4 style="display:inline;">Notes:</h4>
                Method: The smallest element is selected from the unsorted array and swapped with the leftmost element, 
                and that element becomes a part of the sorted array. This process continues moving unsorted array 
                boundary by one element to the right.

                NOTE: This algorithm is not suitable for large data sets as its average and worst case complexities 
                are of Ο(n2), where n is the number of items.
            </p>

            <hr>
            <br>
        </div>

	</div>
</div>
