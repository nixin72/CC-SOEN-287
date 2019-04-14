window.onload = function() {
	document.querySelector(`#sub`).addEventListener(`click`, e => {
		e.preventDefault();

		document.querySelector(`#bill`).style.display = `inline`;
		let inputs = document.querySelectorAll(`input[type=text]`);

		let total_cost = 0;
		for (let field of inputs) {
			let item_quantity = document.querySelector(`#${field.id}`).value;
			let item_price = parseFloat(field.parentNode.parentNode
											.children[2].innerHTML.substring(1));
			let bill_price = item_price * item_quantity;

			if (item_quantity == "") {
				item_quantity =  0;
			}
			else {
				item_quantity = parseFloat(item_quantity);
				if (isNaN(item_quantity)) {
					item_quantity = 0;
					bill_price = `0 - please enter an integer value for your quantity.`;
				}
				else {
					total_cost += bill_price;
				}
			}			

			document.querySelector(`#q_${field.id}`).innerText = item_quantity;
			document.querySelector(`#p_${field.id}`).innerText = bill_price;
		}

		document.querySelector(`#total`).innerText = `$${total_cost}`;
	});
}