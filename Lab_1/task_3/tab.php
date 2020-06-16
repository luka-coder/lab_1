<link rel="stylesheet" href="style.css">
<table>
    <tr>
        <td>1.ვინ დააარსა ქალაქი თბილისი?</td>
        <td>
            <?php
                if(isset($_POST["check1"])){
                    $check1 = $_POST["check1"];
                }
                else{
                    $check1 = NULL;
                }
                if($check1 != NULL){
                    if($check1 !="ვახტანგ გორგასალი"){
                        echo "პასუხი არასწორია!!!";
                    }
                    else{
                        echo "პასუხი სწორია";
                        $p1=1;
                    }
                }
                else{
                    echo "აირჩიეთ პასუხი";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>2.რა ეწოდებოდა საქართველოში არაბთა მიერ დასმულ მოხელეს?</td>
        <td>
            <?php
                if(isset($_POST["check2"])){
                    $check2 = $_POST["check2"];
                }
                else{
                    $check2 = NULL;
                }
                if($check2 != NULL){
                    if($check2 !="ამირა"){
                        echo "პასუხი არასწორია!!!";
                    }
                    else{
                        echo "პასუხი სწორია";
                        $p2=1;
                    }
                }
                else{
                    echo "აირჩიეთ პასუხი";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>3.რომელ წელს დაიწყო "დიდი თურქობა"?</td>
        <td>
        <?php
                if(isset($_POST["check3"])){
                    $check3 = $_POST["check3"];
                }
                else{
                    $check3 = NULL;
                }
                if($check3 != NULL){
                    if($check3 !="1080 წ."){
                        echo "პასუხი არასწორია!!!";
                    }
                    else{
                        echo "პასუხი სწორია";
                        $p3=1;
                    }
                }
                else{
                    echo "აირჩიეთ პასუხი";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>4.ვინ იყვნენ ადამიანები, რომლებსაც ეწოდებოდათ "მონა-სპა"?</td>
        <td>
        <?php
                if(isset($_POST["check4"])){
                    $check4 = $_POST["check4"];
                }
                else{
                    $check4 = NULL;
                }
                if($check4 != NULL){
                    if($check4 !="სამეფო გვარდია"){
                        echo "პასუხი არასწორია!!!";
                    }
                    else{
                        echo "პასუხი სწორია";
                        $p4=1;
                    }
                }
                else{
                    echo "აირჩიეთ პასუხი";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>5.სად არის შემონახული შოთა რუსთაველის ფრესკა?</td>
        <td>
        <?php
                if(isset($_POST["check5"])){
                    $check5 = $_POST["check5"];
                }
                else{
                    $check5 = NULL;
                }
                if($check5 != NULL){
                    if($check5 !="იერუსალიმში, ჯვრის მონასტერში"){
                        echo "პასუხი არასწორია!!!";
                    }
                    else{
                        echo "პასუხი სწორია";
                        $p5=1;
                    }
                }
                else{
                    echo "აირჩიეთ პასუხი";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>სწორი პასუხების რაოდენობა:</td>
        <td>
            <?php
                $p = $p1+$p2+$p3+$p4+$p5;
                echo $p."სწორი პასუხი";
            ?>
        </td>
    </tr>
</table>