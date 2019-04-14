window.onload = function() {	
	const STARTING_AMOUNT = 400;
	let currentAmount = STARTING_AMOUNT;

	console.log(currentAmount);
	
	function validateAmount(x) {

		if (isNaN(x)) {
			alert("Please enter a numeric value.");
			throw "NumberFormatException: Please enter a numeric value.";
		}
		return x % 20 == 0;
	}

	function withdrawAmount(x) {
		x = parseFloat(x);
		if (validateAmount(x)) {
			if (currentAmount > x + .5) {
				console.log(currentAmount, x, currentAmount-x)
				currentAmount = currentAmount - (x + 0.5);
				return `Successful transaction! Current Balance is: ${currentAmount}`;
			}
			else {
				return "Insufficient funds";
			}
		}
		else {
			return "Not multiple of 20: Incorrect withdrawal amount";
		}
	}
	
	document.querySelector("#submit").addEventListener("click", e => {
		let amount = document.querySelector("#withdrawlAmount").value;
		let message = withdrawAmount(amount);
		
		document.querySelector("#output").innerText = message;
		alert(message);
		console.log(currentAmount);
	});
}