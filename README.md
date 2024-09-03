```php
<?php
    $name = "bro code";
    echo"I like pizza";
    echo"hello {$name}";
?>
<html>
</html>
```
```php
<?php
    $name = "pizza";
    $age = 23;
    $quantity = 2;
    $gpa = 2.72;
    $price = 4.99;
    $tax_rate = 4.1;
    $employed = true;
    $online = false;
    $total = null;

    echo"I love pizza<br>";
    echo"My name is {$name}<br>";
    echo"age is {$age}<br>";
    echo"Gpa = {$gpa}<br>";
    echo"there are {$users}<br>";
    echo"pizza price is \${$price}<br>";
    echo"tax rate is {$tax_rate}%<br>";
    echo" employed status: {$employed}<br>";
    echo"Online status: {$online}<br>";
    echo"You have ordered {$quantity}x {$name}s<br>";

    $total = $quantity*$price;
    echo"Total price of {$quantity} {$name} is: {$total}\$<br>";
```

```php
<?php
    $count = 3;
    // count = count + 4;
    $count+=4;
    echo"Count = {$count}<br>";
    // count = count - 2;
    $count-=2;
    echo"Count = {$count}<br>";
    $num1  = 2;
    $num2 = 3;
    $num3 = $num1**$num2; //power**
    echo "num3 is : {$num3}<br>";

?>
```
### data show (get,post)
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username: </label></br>
        <input type="text" name="username"></br>
        <label>password: </label></br>
        <input type="password" name="password"></br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
    // echo"{$_GET["username"]}<br>";
    // echo"{$_GET["password"]}<br>";
    // echo $_GET["username"]."<br>";
    // echo $_GET["password"]."<br>";
    //************
    echo"{$_POST["username"]}<br>";
    echo"{$_POST["password"]}<br>";
?>
```
### get and post calculation
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $item = "pizza";
    $price = 4.99;
    $quantity = $_GET["quantity"];
    $total = $quantity*$price;
    echo"You have ordered {$quantity} x {$item}/s<br>";
    echo"{$quantity} ps {$item} is \${$total}";
?>
```
### few shortcut commands
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total =null;
    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = pow($x, $y);
    // $total = sqrt($x);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(1, 5);
    echo $total;
?>
```
### calculation
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>$radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2*pi()*$radius;
    $circumference = round($circumference,2);

    $area = pi()*pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo"Area = {$area}cm^2<br>";
    echo"Circumference = {$circumference}cm<br>";
    echo"Volume = {$volume}cm^<br>"
?>
```
### if else statement
```php
<?php
    $age = 18;
    if($age > 100){
        echo "You are over hundrad. Welcome!";
    }
    elseif($age >= 18){
        echo "You may enter this site";
    }
    elseif($age < 0){
        echo "That wasn't a valid age.";
    }
    else{
        echo "You must be 18+.";
    }
?>
```
### bullian if/else
```php
<?php
    $adult = false;
    if($adult == true){
        echo "You may enter this site.";
    }else{
        echo "You must be an adult to enter.";
    }
?>
```
### alternative
```php
<?php
    $adult = false;
    if($adult){
        echo "You may enter this site.";
    }
    else{
        echo "You must be 18+.";
    }
?>
```
### sallery calculation
```php
<?php
    $hours = -1;
    $rate = 15;
    $weekly_pay = null;
    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours*$rate;
    }
    else{
        $weekly_pay = (($rate * 40)+($hours - 40)*($rate*1.5));
    }
    echo "You made \${$weekly_pay} this week";
?>
```
### logical operator
```php
<?php
    $temp = -1;
    if($temp <0 || $temp >30){
        echo "The weather is bad<br>";
    }
    else{
        echo "The weather is good<br>";
    }

    $cloudy = false;
    if(!$cloudy){
        echo"It's sunny<br>";
    }
    else{
        echo"It's cloudy<br>";
    }

    $age = 18;
    $citizen = false;
    if($age >=18 && $citizen){
        echo "You can vote.<br>";
    }
    else{
        echo "You can not vote.<br>";
    }

    if(!$age >=18 || $citizen){
        echo "You can vote.<br>";
    }
    else{
        echo "You can not vote.<br>";
    }
?>
```
### switch
```php
<?php
    $direct = 'pizza';
    switch($direct){
        case 'a':
            echo "a for apple";
            break;
        case 'b':
            echo "b for ball";
            break;
        case 'c':
            echo "c for cat";
            break;
        case 'd':
            echo "d for door";
            break;
        default:
        echo "{$direct} is not valid";
    }
?>
```
### for loop
```php
<?php
    for($i=1; $i<=5; $i++){
        // echo "{$i}";
        for($j=1; $j<=$i; $j++){
            echo $j;
        }
        echo "<br>";
    }
?>
```
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count to: </label>
        <input type="text" name="counter"><br>
        <input type="submit" value="start">
    </form>
</body>
</html>
<?php
    $counter = $_POST["counter"];
    for($i=$counter; $i>0; $i--){
        echo $i . "<br>";
    }
?>
```
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="submit" value="stop">
    </form>
</body>
</html>
<?php
    
    $seconds =0;
    $running  = true;
    while($running){
        if(isset($_POST["stop"])){
            $running = false;
        }
        else{

            $seconds++;
            echo $seconds ."<br>";
        }
    }
?>
```
### array
```php
<?php
    $foods = array("apple","orange","bannana","coconut");
    // $foods[0]="pineapple";
    echo count($foods);
    echo"<br>";
    array_push($foods,"pineapple","kiwi");
    array_pop($foods);
    array_shift($foods);
    $reverse = array_reverse($foods);
    foreach($foods as $food){
        echo $food . "<br>"; 
    }
    foreach($reverse as $food){
        echo $food . "<br>"; 
    }
    ?>
```

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter Country: </label>
        <input type="text" name="country"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
    $capital = array("USA"=>"Washington D.C",
                    "Japan"=>"Kyoto",
                    "South Korea"=>"Seoul",
                    "Bangladesh"=>"Dhaka");
    
    $value = $capital[$_POST["country"]];
    echo $value . "<br>";
    // echo $capital["USA"];
    
    // $capital["USA"]="Las Vegas";
    // $capital["China"]="Beijing";

    // array_pop($capital);
    // array_shift($capital);
    // $revarse = array_reverse($capital);
    

    // foreach($capital as $key => $value){
    //     echo "{$key} = {$value}<br>";
    // }

    // foreach($revarse as $i => $j){
    //     echo "{$i} {$j}<br>";
    // }
    // $key = array_keys($capital);
    // foreach($key as $ke){
    //     echo "{$ke}<br>";
    // }
    // $values = array_values($capital);
    // foreach($values as $value){
    //     echo $value . "<br>";
    // }
    // echo count($capital);


    $flips = array_flip($capital);
    foreach($flips as $key => $value){

        echo "{$key} = {$value}<br>";
    }
?>
```
```php
<?php
    $username = false;

    if(empty($username)){
        echo "This variable is empty";
    }
    else{
        echo "This variable is NOT empty";
    }
    // if(isset($username)){
    //     echo "This variable is set";
    // }
    // else{
    //     echo "This variable is NOT set";
    // }
?>
```

```php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>
<?php
    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value}<br>";
    // }
    if(isset($_POST["login"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if(empty($username)){
            echo"User name is missing";
        }
        elseif(empty($password)){
            echo"User password is missing";
        }
        else{
            echo"Welcome to login";
        }
    }
?>
```
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="visa">Visa<br>
        <input type="radio" name="credit_card" value="mastercard">MasterCard<br>
        <input type="radio" name="credit_card" value="americanexpress">AmericanExpress<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
            $credit = $_POST["credit_card"];
            echo $credit;
        }
        else{
            echo "please make a selection";
        }
    }
?>
```
### similar
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="visa">Visa<br>
        <input type="radio" name="credit_card" value="mastercard">MasterCard<br>
        <input type="radio" name="credit_card" value="americanexpress">AmericanExpress<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){
        $credit = null;
        if(isset($_POST["credit_card"])){
            $credit = $_POST["credit_card"];
        }
        if($credit == "visa"){
            echo "You selected visa";
        }
        elseif($credit == "mastercard"){
            echo "You selected master card";
        }
        elseif($credit == "americanexpress"){
            echo "You have selected american express";
        }
        else{
            echo "Please make a selection";
        }
    }
?>
```
### radio 
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="visa">Visa<br>
        <input type="radio" name="credit_card" value="mastercard">MasterCard<br>
        <input type="radio" name="credit_card" value="americanexpress">AmericanExpress<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){
        $credit = null;
        if(isset($_POST["credit_card"])){
            $credit = $_POST["credit_card"];
        }
        switch($credit){
            case 'visa':
                echo "You selected Visa";
                break;
            case 'mastercard':
                echo "You selected Master Card";
                break;
            case 'americanexpress':
                echo "You selected American Express";
                break;
            default:
            echo "Please make a selection";
            break;
        }
    }
?>
```
### isset and empty
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="burger" value="Burger">Burger<br>
        <input type="checkbox" name="sacuage" value="Sacuage">Sacuage<br>
        <input type="checkbox" name="pasta" value="Pasta">Pasta<br>
        <input type="submit" name="check">

    </form>
</body>
</html>
<?php
    if(isset($_POST["check"])){
        if(isset($_POST["pizza"])){
            echo "You like Pizza!<br>";
        }
        if(isset($_POST["burger"])){
            echo "You like Burger!<br>";
        }
        if(isset($_POST["sacuage"])){
            echo "You like Sacuage!<br>";
        }
        if(isset($_POST["pasta"])){
            echo "You like Pasta!<br>";
        }
        if(empty($_POST["pizza"])){
            echo "You don't like Pizza!<br>";
        }
        if(empty($_POST["burger"])){
            echo "You don't like Burger!<br>";
        }
        if(empty($_POST["sacuage"])){
            echo "You don't like Sacuage!<br>";
        }
        if(empty($_POST["pasta"])){
            echo "You don't like Pasta!<br>";
        }
    }
?>
```
### check box with array
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Burger">Burger<br>
        <input type="checkbox" name="foods[]" value="Sacuage">Sacuage<br>
        <input type="checkbox" name="foods[]" value="Pasta">Pasta<br>
        <input type="submit" name="check">

    </form>
</body>
</html>
<?php
    if(isset($_POST["check"])){
        $foods = $_POST["foods"];
        foreach($foods as $food){
            echo $food . "<br>";
        } 
    }
?>
```
### function
```php
<?php
    function add($a, $b){
         $r = $a + $b;
        echo $r . "<br>";
    }
    function multiply($a, $b){
         $r = $a * $b;
        echo "{$a}*{$b}={$r}<br>";
    }
    function divide($a, $b){
         $r = $a / $b;
        echo $r . "<br>";
    }
    function substract($a, $b){
         $r = $a - $b;
        echo $r . "<br>";
    }

    add(2, 5);
    add(3, 9);

    substract(1000,900);
    substract(22, 11);

    multiply(2, 3);

    divide(45, 5);
?>
```

### string **********************

```php
<?php
    $username = "Bro-The-CoDe";
    $susername = array("bro","the","code");
    $phone = "123-456-7890";

    
    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20,"0");
    // $phone = str_replace("-","",$phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $username = strcmp($username, "Bro Code");
    // $username = strlen($username);
    // $username = strpos($username, "C");//position number
    // $firstname = substr($username, 0, 3);//code to name
    // $lastname = substr($username, 4);// code to name
    
    // $fullname = explode("-",$username); // normal to array
    // // $fullname = explode(" ",$username); // normal to array
    // foreach($fullname as $name){
    //     echo $name . "<br>";
    // }

    $fullname = implode(" ",$susername);
    echo $fullname;
?>
```
### filter sanitize
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        age<br>
        <input type="text" name="age"><br>
        email<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        echo "{$email}";
    }
?>
```
### filter validate
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        age<br>
        <input type="text" name="age"><br>
        email<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        // $age = filter_input(INPUT_POST, "age",FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            echo "That number wasn't valid";
        }
        else{
            echo "You are {$email} years old";
        }
    }
?>
```
### include()

```php
<?php
    include("header.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the home page<br>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil itaque recusandae labore obcaecati nesciunt. Voluptatem impedit debitis dolore corporis aperiam laborum odit maxime molestiae, perferendis obcaecati fugiat alias commodi velit iure atque expedita, odio excepturi dicta. Asperiores voluptatem neque, repellendus distinctio enim veniam cupiditate provident vero suscipit nesciunt facilis voluptas quia molestiae earum officiis possimus soluta vitae illum totam cum inventore recusandae voluptate quasi. Incidunt tempora, dignissimos rerum porro nobis dolores reprehenderit iusto illo vitae officia iure id saepe ab fugiat eligendi. Quod voluptatum aspernatur natus quas asperiores! Necessitatibus ipsum nisi adipisci dolore dolores praesentium eligendi laboriosam! Aliquid, illo voluptatem.</p>
    <p>Placeat eos in enim at doloremque pariatur ea, veritatis possimus dolorem magnam odit soluta velit harum atque excepturi. Assumenda recusandae consequuntur ullam veniam commodi ut voluptatibus sed. Doloremque in eligendi eaque cupiditate soluta molestiae cum, nostrum ut neque. Dolores et maiores, ut blanditiis veniam perspiciatis est repellendus enim nihil quam? Libero eaque nostrum amet, dicta commodi cumque tenetur in! Temporibus eaque tempore praesentium provident doloribus dolores, perferendis quod sunt, sit vitae unde molestiae dolore cupiditate iure sed, magnam minus minima architecto fugiat earum ducimus officia. Molestias iure, pariatur, provident, a dolorum ratione ipsum porro quo sed modi accusantium neque eum?</p><br>
    <div>
    <img src="all.jpg" height="200rem" width="200rem"/>
    <img src="a.jpg" height="200rem" width="200rem"/>
    <img src="./photos/b.jpg" height="200rem" width="200rem"/>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, deserunt!</p>
</body>
</html>
<?php
    include("footer.html");
?>
```