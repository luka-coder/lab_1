function calculateGrade(){
    grade = document.getElementById("point").value;
    if(grade>90){
        document.getElementById("grade").value="A-ფრიადი";
    }
    else if(grade>80&&grade<91){
        document.getElementById("grade").value="B-ძალიან კარგი";
    }
    else if(grade>70&&grade<81){
        document.getElementById("grade").value="C-კარგი";
    }
    else if(grade>60&&grade<71){
        document.getElementById("grade").value="D-საშუალო";
    }
    else if(grade>50&&grade<61){
        document.getElementById("grade").value="E-ცუდი";
    }
    else if(grade<51){
        document.getElementById("grade").value="F-ჩაიჭერი";
    }
}