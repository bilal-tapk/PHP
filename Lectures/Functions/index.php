<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <!-- Function: Function is a container that performs a specific task -->
    <?php
    // Define a function
    function sayHi()
    {
        echo "Hello User";
    }
    sayHi();

    echo "<br>";

    // Custom greeting function
    function customGreeting($name)
    {
        echo "Hello $name <br>";
    }
    customGreeting("Bilal");

    // Function with more than one parameter
    function userInfo($name, $age)
    {
        echo "Hello $name, you are $age years old";
    }
    userInfo("Bilal", 24);

    echo "<br>";

    // Return statement
    function cube($num)
    {
        // return keyword break the function
        return $num * $num * $num;
    }

    echo cube(3);

    ?>
</body>

</html>