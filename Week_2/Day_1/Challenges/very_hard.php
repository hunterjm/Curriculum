<!-- 
	Using everything you have learned and some googling

    Let's play paper rock scissors

    Simulate 2 people play best of 7 (gotta win 4)
        - show the results of each "game"

        i.e.

        Game 1:
        Mark - Paper
        Eric - Rock
        Mark Wins [Mark = 1, Eric = 0]

        Game 2:
        Mark - Rock
        Eric - Scissors
        Mark Wins [Mark = 2, Eric = 0]

        etc .....

 -->

<!DOCTYPE html>
<html>
<head></head>
<body>
<p>

    <?php


    // code goes here ...
    $eric = 0;
    $mark = 0;
    
    while($eric < 4 || $mark < 4) {
        
        $options = ['rock', 'paper', 'scissors'];
        
        // Simulate eric's pick
        $ericsPick = $options(rand(0, 2));
        // Simulate marks's pick
        $marksPick = $options(rand(0, 2));
        
        // Conditions to see which is the winner
        
    }
    
    if($eric >= 4) //eric wins
    else // mark wins

    ?>
</p>
</body>
</html>