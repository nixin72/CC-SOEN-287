$(function() {
    document.querySelector("btnSignup").addEventListener("click", e => {
        let usernameReg = /^[A-Za-z0-9]{6,20}$/;
        let passwordReg = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,256}$/;

        
    });
});