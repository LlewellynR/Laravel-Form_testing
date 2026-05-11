//vite automatically compiles TypeScript ,thank god
console.log("ts working");


const progressbar=document.getElementById("progress") as HTMLProgressElement;
const password = document.getElementById("password") as HTMLInputElement;



if (progressbar && password){
    password.addEventListener("input", () => {
        let strength:number=0;
        const value=password.value;
        if (value.length == 0) {
            console.log("password is empty")
        }
        if (/[0-9]/.test(value)){
            strength++;
            console.log("password has number")
        }
        if(/[A-Z]/.test(value)){
            console.log("has capital")
            strength++;
        }
        if(/[$£?&+,<>!]/.test(value)){
            console.log("password has special")
            strength++;
        }
        if(value.length>=8){
            console.log("length is more than 8")
            strength++;
        }
        progressbar.value=strength;
    })
}



const icon=document.querySelector(".reveal") as HTMLElement;
icon.addEventListener("click",(e)=>{
    e.preventDefault();
    if(password.type=="password"){
        password.type="text";
        icon.classList.replace("bi-eye-slash","bi-eye");
    } else{
        password.type="password";
        icon.classList.replace("bi-eye","bi-eye-slash")
    }
})

