<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>სახელი:</td>
                <td><input type="text" name="Sfirst"></td>
            </tr>
            <tr>
                <td>გვარი:</td>
                <td><input type="text" name="Slast"></td>
            </tr>
            <tr>
                <td>კურსი</td>
                <td><input type="number" name="kursi"></td>
            </tr>
            <tr>
                <td>სემესტრი:</td>
                <td><input type="number" name="semestri"></td>
            </tr>
            <tr>
                <td>სასწავლო კურსი:</td>
                <td><input type="text" name="saswavlo"></td>
            </tr>
            <tr>
                <td>მიღებული ნიშანი:</td>
                <td><input type="number" name="point" id="point" onkeyup="calculateGrade()"></td>
            </tr>
            <tr>
                <td>შეფასება:</td>
                <td><input disabled type="text" name="grade" id="grade"></td>
            </tr>
            <tr>
                <td>ლექტორის სახელი:</td>
                <td><input type="text" name="Lfirst"></td>
            </tr>
            <tr>
                <td>ლექტორის გვარი:</td>
                <td><input type="text" name="Llast"></td>
            </tr>
            <tr>
                <td>დეკანის სახელი:</td>
                <td><input type="text" name="Dfirst"></td>
            </tr>
            <tr>
                <td>დეკანის გვარი:</td>
                <td><input type="text" name="Dlast"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="send" value="Next"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST["send"])){
            include "tab.php";
        }
    ?>
    <script src="script.js"></script>
</body>
</html>