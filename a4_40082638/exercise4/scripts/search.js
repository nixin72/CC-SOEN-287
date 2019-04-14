window.onload = function(e) {
    document.getElementById("start_over").addEventListener("click", (e) => {
        e.preventDefault();
        document.getElementById("rental_form").reset();
        largestInQuebec(false, false);
    });

    document.getElementById("search").addEventListener("click", e => {
        let largest = form.size_twoFive.checked;
        let quebecCity = form.place_quebecCity.checked;

        largestInQuebec(largest, quebecCity);
    });  

    function largestInQuebec(largest, quebecCity) {
        document
            .getElementById("expert_suggestion")
            .style.display = largest && quebecCity ? "block" : "none";
    }
}