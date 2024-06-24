<!DOCTYPE html>
<html>
<head>
 <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <?php
        $subject = ["subject1", "subject2"];
        foreach ($subject as $v){
            echo '
            <div class="h-32 w-32 flex items-center justify-center rounded-md bg-green-400">
                '. $v.'
            </div>';
        }
    ?>


</body>
</html>
