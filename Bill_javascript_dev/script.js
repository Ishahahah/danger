
function calculateBill(units) {
    const unitCostFirst = 3.50;
    const unitCostSecond = 4.00;
    const unitCostThird = 5.20;
    const unitCostFourth = 6.50;

    let bill;

    if (units <= 50) {
        bill = units * unitCostFirst;
    } else if (units <= 150) {
        bill = 50 * unitCostFirst + (units - 50) * unitCostSecond;
    } else if (units <= 250) {
        bill = 50 * unitCostFirst + 100 * unitCostSecond + (units - 150) * unitCostThird;
    } else {
        bill = 50 * unitCostFirst + 100 * unitCostSecond + 100 * unitCostThird + (units - 250) * unitCostFourth;
    }

    return bill.toFixed(2);
}

// Calculate the bill when the "Calculate" button is clicked
document.getElementById("calculate-button").addEventListener("click", function () {
    const units = parseFloat(document.getElementById("units").value);
    //html line 18
    if (!isNaN(units)) {
        const result = calculateBill(units);
        document.getElementById("result").textContent = `Total amount for ${units} units: Rs. ${result}`;
    }
});
