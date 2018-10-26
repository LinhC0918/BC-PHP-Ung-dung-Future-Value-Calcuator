<!DOCTYPE HTML>
<html>
<style type="text/css">
    .display {
        height:200px; width:500px;
        margin:1px 42%;
        padding:10px;
        border:1px dodgerblue solid;
        text-align: left;
    }

    h2 {
        color: darkblue;

    }

</style>
<body>
<?php
$Future_Value = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Amount = $_POST["IA"];
    $IA = $Amount;
    $YIR = ($_POST["YIR"]/100);
    $NoY = $_POST["NoY"];
    for ($i = 0; $i < $NoY; $i++){
        $Future_Value = $Amount + ($Amount * $YIR);
        $Amount = $Future_Value;
    }
}
?>

<form  method="post">
    <div class="display">
        <h2>Future Value Calculator</h2>
        <label>Inventment Amount: </label>
        <span><?php echo $IA?></span><br/>
        <label>Yearly Interest Rate: </label>
        <span><?php echo ($YIR*100).'%'?></span><br/>
        <label>Number of Years: </label>
        <span><?php echo  $NoY?></span><br/>
        <label>Future Value: </label>
        <span><?php echo $Future_Value?></span>
    </div>
</form>
</body>
</html>