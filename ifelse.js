let num=prompt("Enter the grade");
if(num>80){
    grade="A";
}else if(num>70){
    grade="B+";
}else if(num>60){
    grade="B";
}else if(num>50){
    grade="C+";
}else{
    grade="fail";
}
console.log(grade);