<html>

<body>
    <?php
    if (isset($_GET['firstName']) && !empty($_GET['firstName'])) {
        echo $_GET['firstName'];
    }
    ?>
    <form method="GET" action="PolonczenieZBaza.php">
        <div>
            <label>Name: <input type="text" name="firstName"></label>
        </div>
        <div>
            <input type="submit" value="send">
        </div>
    </form>

</body>

</html>