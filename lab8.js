const people=["Karina","Dolly","Rama","Anu","Shagun"];
const newArr=people.map(myFunction)
console.log(newArr)
function myFunction(element){
   return element.toUpperCase();
}