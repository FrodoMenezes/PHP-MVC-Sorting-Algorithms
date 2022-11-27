<?php 
require_once(__DIR__ . '/../Controllers/BubbleSortController.php');
$classBubbleSort = new BubbleSortController;
$randomArray = $classBubbleSort->randomArrayWithTenNumber();
$arraySorted = $classBubbleSort->bubble_sort($randomArray);
$timeDuration = $classBubbleSort->microTimeFloat();
?>

<div>
	<div>
        <h1>Bubble Sort</h1>
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
                echo '<p><b>Bubble Sort runtime: ' . $timeDuration . '</b></p>';
            ?>
        </div>

        <div>
            <br>
            <hr>

            <p style="font-size:small;">
            <h4 style="display:inline;">Notes:</h4>
                Method: Works by examining each set of adjacent elements in the string, from left to right, 
                switching their positions if they are out of order. The algorithm then repeats this process until 
                it can run through the entire string and find no two elements that need to be swapped.
            </p>

            <hr>
            <br>
        </div>
   
	</div>
</div>
