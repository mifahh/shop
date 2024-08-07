document.addEventListener("DOMContentLoaded", () => { 
    if (window.location.href.endsWith("Login.html")) {
        let button = document.getElementById("logbutton");
        LoginForm();
    }else{
        let button = document.getElementById("regbutton")
        RegisterForm();
    }
    
    let form = document.forms[0]; //DOM
    
    form.addEventListener("submit",(event)=>{
        event.preventDefault();

        let formData = new FormData(form); // Object FormData
        // console.log([...datanya.entries()]);
        formData.forEach((val,key)=>{
            if(val == ""){
                form[key].style.backgroundColor = "red";
            }else{
                form[key].style.backgroundColor = "white";
            }
        })
    })  
});

// function LoginForm(){
//     let username = document.getElementById('username').value;
//     let password = document.getElementById('password').value;
    
//     if(username == '' || password == ''){
//         alert("Tidak boleh ada kotak yang kosong.");
//         event.preventDefault();
//         return false;
//     }

//     if(password.length < 8){
//         alert("Password seharusnya lebih dari 8 karakter.");
//         event.preventDefault();
//         return false;
//     }   
//     return true;    
// }

// function RegForm(){
//     let username = document.getElementById('username').value;
//     let password = document.getElementById('password').value;    

//     if(username == '' || password == ''){
//         alert("Tidak boleh ada kotak yang kosong.");
//         return false;
//     }
//     if(password.length < 8){
//         alert("Password seharusnya lebih dari 8 karakter.");
//         return false;
//     }   
//     return true;   
// }