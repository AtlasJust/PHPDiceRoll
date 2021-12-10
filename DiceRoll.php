!<Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <title> Dice Roll</title>
<head>
<body>
    <h1>Lets Roll Some Dice</h1>
    <?php
        $FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
        $FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

        //defination of the CheckForDoubles() function
        function CheckForDoubles($Die1, $Die2){
            global $FaceNamesSingular;
            global $FaceNamesPlural;
            $ReturnValue = false;
            if($Die1 == $Die2){
                echo "the roll was double ", $FaceNamesPlural[$Die1 - 1], ".<br/>";
                $ReturnValue = true;
            }
            else{
                echo "the roll was a ", $FaceNamesSingular[$Die1 - 1], " and a " $FaceNamesSingular[$Die2 - 1], ".<br/>"
                $ReturnValue = false;
            }
            return $ReturnValue;
        } // end of CheckForDoubles() function

        // defination of the DisplayScoreText()
        function DisplayScoreText($Score){
            if ($Score == 2)
                echo "you rolled snake eyes<br/>";
            if($Score == 3)
                echo "you rolled a loosse deuce<br/>";
            if($Score == 5)
                echo "you rolled a fever five";
            if($Score == 7)
                echo "you rolled a natural";
            if($Score == 9)
                echo "you rolled a nina<br/>";
            if($Score == 11)
                echo "you rolled a yol<br/>";
            if($Score == 12)
                echo "you rolled boxcars<br/>"
        }//end of DisplayScoreText() function

        $Dice = array();
        $Dice[0] = rand(1,6);
        $Dice[1] = rand(1,6);
        $Score = $Dice[0] + $Dice[1];
        echo "<p>";
        CheckForDoubles($Dice[0], $Dice[1]);
        DisplayScoreText($Score);
        echo "</p>"
        
    ?>
</body>
</html>