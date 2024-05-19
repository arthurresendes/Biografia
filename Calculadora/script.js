let displayValue= "";

function numeroDisplay(value) {
    displayValue +=value
    document.querySelector('.display').value = displayValue
}
function clearDisplay() {
   displayValue = '';
   document.querySelector('.display').value = "";
}
function calculate() {
    try{
        const result =eval(displayValue)
        document.querySelector('.display').value = result;
        displayValue= result.toString();
    } catch (error) {
        document.querySelector('.display').value = "Error"
    }
}