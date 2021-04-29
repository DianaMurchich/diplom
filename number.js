let number_of_kilograms = document.getElementById("number_of_kilograms");
console.log(number_of_kilograms);
let class_number1 = document.getElementsByClassName("number1");

console.log(class_number1);
function add_number_of_kilograms() {
    let val = +number_of_kilograms.value;
    val++;
    number_of_kilograms.value = val;
    class_number1[1].removeAttribute("disabled");
}
function subtract_number_of_kilograms() {
    let val = +number_of_kilograms.value; 
    if(val>=3){
    val = val - 1;
    number_of_kilograms.value = val;
    }else{
        class_number1[1].setAttribute("disabled", "disabled");
    }
}


class_number1[0].addEventListener("click", add_number_of_kilograms);
class_number1[1].addEventListener("click", subtract_number_of_kilograms);

