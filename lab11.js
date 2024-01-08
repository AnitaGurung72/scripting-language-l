const student=["Sita", "Rama","Anu","Liza","Smriti","Indira"];
const startA= student.filter(myFunction);
console.log(startA);
function myFunction(value){
    return value[0].toUpperCase() == 'A';
}