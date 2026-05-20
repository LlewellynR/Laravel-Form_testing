//vite automatically compiles TypeScript ,thank god
console.log("ts working");


const progressbar = document.getElementById("progress") as HTMLProgressElement;
const password = document.getElementById("password") as HTMLInputElement;


if (progressbar && password) {
    password.addEventListener("input", () => {
        let strength: number = 0;
        const value = password.value;
        if (value.length == 0) {
            console.log("password is empty")
        }
        if (/[0-9]/.test(value)) {
            strength++;
            console.log("password has number")
        }
        if (/[A-Z]/.test(value)) {
            console.log("has capital")
            strength++;
        }
        if (/[$£?&+,<>!]/.test(value)) {
            console.log("password has special")
            strength++;
        }
        if (value.length >= 8) {
            console.log("length is more than 8")
            strength++;
        }
        progressbar.value = strength;
    })
}

//IF IT DOESN'T EXIST AND CAUSES AND ERROR ALL CODE BELOW IS REDUNDANT,IF IS SO IMPORTANT
const icon = document.querySelector(".reveal") as HTMLElement;
if (icon) {
    icon.addEventListener("click", (e) => {
        e.preventDefault();
        if (password.type == "password") {
            password.type = "text";
            icon.classList.replace("bi-eye-slash", "bi-eye");
        } else {
            password.type = "password";
            icon.classList.replace("bi-eye", "bi-eye-slash")
        }
    })
}

//fuck you TS for not working,maybe a rendering issue with templates was going to use timeouts to delay them
const social_links = document.querySelectorAll<HTMLElement>(".social-links");
document.addEventListener("DOMContentLoaded", () => {
    social_links.forEach(links => {
        links.style.animation = "appear 4s forwards"

    })
})

//im going to fucking throttle TypeScript
let totalscore:number=0;
let value:string="";
let random=Math.floor(Math.random()*100);
console.log(random);
document.addEventListener("DOMContentLoaded", () => {
    const numbers = document.querySelectorAll(".num");
    numbers.forEach(nums=>{
        nums.addEventListener("click",()=>{
            totalscore+=parseInt(nums.innerHTML);
            console.log(totalscore);
        })
    })
});



