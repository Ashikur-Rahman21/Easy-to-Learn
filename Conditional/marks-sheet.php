
<!-- 
    Create a PHP script to classify a given student's marks stored in the variable $marks into grades 
    (A, B, C, D, or Fail) based on the following criteria:
    A: 90 and above
    B: 80-89
    C: 70-79
    D: 60-69
    Fail: Below 60

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
                    type="number" placeholder="Enter Your Mark" name="mark" aria-label="Full name">
                <button
                    class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                    type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <?php
        $mark = isset ($_POST['mark']) ? $_POST['mark'] : "";

        if ($mark === "") {
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'>No mark provided</h1>";
        } elseif($mark <= 100 && $mark >= 90){
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'>Result: A</h1>";
        } elseif($mark < 90 && $mark >= 80){
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'>Result: B</h1>";
        } elseif($mark < 80 && $mark >= 70){
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'>Result: C</h1>";
        } elseif($mark < 70 && $mark >= 60){
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'>Result: D</h1>";
        } elseif($mark < 60 && $mark >= 0){
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'>Result: Fail</h1>";
        } else{
            echo "<h1 class='flex text-blue-900 justify-center mt-10 font-bold'>Grade scale 0-100</h1>";
        }
    ?>

</body>
</html>