function calculateBMI(weight, height) {
    const bmi = weight / (height ** 2);
    return bmi;
}


const weight1 = 70;
const height1 = 1.75; 
const bmi1 = calculateBMI(weight1, height1);
console.log(`BMI for person 1: ${bmi1}`);


