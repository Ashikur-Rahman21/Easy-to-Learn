<!-- 
    Write a PHP script that checks if a given number $num is positive, negative, or zero, and 
    prints an appropriate message.

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
                    type="number" placeholder="Enter Your Number" name="number" aria-label="Full name">
                <button
                    class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                    type="submit">
                    Check
                </button>
            </div>
        </form>
    </div>

    <?php
        $num = isset ($_POST['number']) ? $_POST['number'] : "";

        if ($num === "") {
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'>No input provided</h1>";
        } elseif ($num > 0) {
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'> The Input Number $num is Positive Number</h1>";
        } elseif ($num < 0) {
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'> The Input Number $num is Negative Number</h1>";
        } else {
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'> The Input Number $num is Zero</h1>";
        }
    ?>

</body>
</html>