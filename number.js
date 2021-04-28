let number_of_kilograms = document.getElementById("number_of_kilograms");
console.log(number_of_kilograms);
function add_number_of_kilograms(){
    let val = +number_of_kilograms.value;
    val++;
    number_of_kilograms.value=val;
    console.log(number_of_kilograms);
}
let class_number1 = document.getElementsByClassName("number1");
console.log(class_number1);

class_number1[0].addEventListener("click", add_number_of_kilograms);
