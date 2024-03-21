
<!-- 
    Implement a PHP code snippet that calculates the total fare for a bus ticket based 
    on the age of the passenger. The fare is $5 for children (age < 12), $10 for 
    adults (age between 12 and 60), and $7 for seniors (age >= 60).
-->

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class=" flex justify-center mt-10">
        <form class="w-full max-w-sm" method="post" action="">
            <div class="flex items-center border-b border-teal-500 py-2">
                <input
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="number" placeholder="Enter Your Age" name="age" aria-label="Full name">
                <button
                    class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                    type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <?php
        $age = isset ($_POST['age']) ? $_POST['age'] : "";

        if ($age === "") {
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'>No input provided</h1>";
        } elseif ($age < 12) {
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'> Total fare for a passenger of age $age is $5</h1>";
        } elseif ($age >= 12 && $age < 60) {
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'> Total fare for a passenger of age $age is $10</h1>";
        } else {
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'> Total fare for a passenger of age $age is $7</h1>";
        }
    ?>

</body>
</html>