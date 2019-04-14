function getElementAmpersand() {
    document.getElementById("field").addEventListener("blur", convertAmpersands, false);
}

function convertAmpersands(e) {
    let field = e.target;
    field.value = field.value.replace(/\s*\&\s*/, " and ");
}

window.addEventListener("load", getElementAmpersand, false);