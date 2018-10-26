<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height:300px; width:320px;
        margin:1px 42%;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>


<form action="display.php" method="post">
    <div class="login">
        <h2>Future Value Calculator</h2>
        Inventment Amount:<input type="text"  size="30" name="IA"  /><br/>
        Yearly Interest Rate:<input type="text" size="30" name="YIR"  /><br/>
        Number of Years:<input type="text" size="30" name="NoY"  />
        <input type="submit" name="submit" value="Calculate"/>
    </div>
</form>
</body>
</html>