window.onload = function() {
    let searchStr, ch, outResult;

    document.getElementById("searchButton").addEventListener("click", e => {
        searchStr = document.getElementById("searchString").value;
        ch = document.getElementById("characters").value;
        outResult = searchOccurences();
        console.log(outResult)

        let text = outResult == 0 ? 
            `The characters pattern '${ch}' was not found` : 
            `${outResult} occurence(s) of '${ch}' found.`

        document.getElementById("result").innerText = text;
        document.getElementById("div_result").style.display = "inline";
    });

    document.getElementById("startOver").addEventListener("click", () => {
        document.querySelector("form").reset();
        document.getElementById("div_result").style.display = "none";
    });

    function searchOccurences() {
        let matches = 0;
        let inputStr = searchStr;

        for (let q = 0; q < searchStr.length ; ) {
            let reg = new RegExp("^" + ch + ".*");

            if (inputStr.match(reg)) {
                matches++;
            }
            
            inputStr = searchStr.substring(++q);
        }

        return matches;
    }
}