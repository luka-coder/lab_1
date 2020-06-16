<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tab.php" method="post">
        1.ვინ დააარსა ქალაქი თბილისი?
        <hr>
        <input type="radio" name="check1" value="ვახტანგ გორგასალი">ვახტანგ გორგასალი
        <br>
        <input type="radio" name="check1" >ბაგრატ III
        <br>
        <input type="radio" name="check1" >არ არის ცნობილი
        <br><br>
        2.რა ეწოდებოდა საქართველოში არაბთა მიერ დასმულ მოხელეს?
        <hr>
        <input type="radio" name="check2" >სპასპეტი
        <br>
        <input type="radio" name="check2" >სულთანი
        <br>
        <input type="radio" name="check2" value="ამირა">ამირა
        <br><br>
        3.რომელ წელს დაიწყო "დიდი თურქობა"?
        <hr>
        <input type="radio" name="check3" >1001 წ.
        <br>
        <input type="radio" name="check3" >1121 წ.
        <br>
        <input type="radio" name="check3" value="1080 წ.">1080 წ.
        <br><br>
        4.ვინ იყვნენ ადამიანები, რომლებსაც ეწოდებოდათ "მონა-სპა"?
        <hr>
        <textarea  id="" cols="30" rows="10" placeholder="დააფიქსირეთ პასუხი" name="check4" value="სამეფო გვარდია"></textarea>
        <br><br>
        5.სად არის შემონახული შოთა რუსთაველის ფრესკა?
        <hr>
        <textarea cols="30" rows="10" placeholder="დააფიქსირეთ პასუხი"name="check5" value="იერუსალიმში, ჯვრის მონასტერში"></textarea>
        <br><br>
        <input type="submit" value="Next" name="send">
    </form>
</body>
</html>