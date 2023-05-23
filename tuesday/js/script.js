const colorPicker = document.getElementById("squareColor");
const btnColor = document.getElementById("btnColor");
const square = document.getElementById("square");

btnColor.addEventListener("click", function (event) {
    const color = colorPicker.value;
    square.style.backgroundColor = color;
    event.preventDefault()
});
