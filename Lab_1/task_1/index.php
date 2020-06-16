<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" class="form">
        <table>
            <tr>
                <td>სახელი:</td>
                <td><input type="text" name="first"></td>
            </tr>
            <tr>
                <td>გვარი:</td>
                <td><input type="text" name="last"></td>
            </tr>
            <tr>
                <td>დაკავებული თანამდებობა:</td>
                <td><input type="text" name="position"></td>
            </tr>
            <tr>
                <td>ხელფასის რაოდენობა:</td>
                <td><input type="number" name="salary" id="salary" onkeyup="calculateTax()"></td>
            </tr>
            <tr>
                <td>საშემოსავლო:</td>
                <td><input disabled type="text" name="tax" id="tax"></td>
            </tr>
            <tr>
                <td>დარიცხული ხელფასი:</td>
                <td><input disabled type="text" name="cash" id="cash"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="send" value="Next"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET["send"])){
            include "tab.php";
        }
    ?>
    <script src="script.js"></script>
</body>
</html>