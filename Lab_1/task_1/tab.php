<table class="table">
    <tr>
        <td>სახელი:</td>
        <td><?=$_GET["first"]?></td>
    </tr>
    <tr>
        <td>გვარი:</td>
        <td><?=$_GET["last"]?></td>
    </tr>
    <tr>
        <td>დაკავებული თანამდებობა:</td>
        <td><?=$_GET["position"]?></td>
    </tr>
    <tr>
        <td>ხელფასის რაოდენობა:</td>
        <td><?=$_GET["salary"]?></td>
    </tr>
    <tr>
        <td>საშემოსავლო:</td>
        <td><?=$_GET["salary"]*0.2?></td>
    </tr>
    <tr>
        <td>დარიცხული ხელფასი:</td>
        <td><?=$_GET["salary"]-$_GET["salary"]*0.2?></td>
    </tr>
</table>