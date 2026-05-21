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

/*fuck you TS for not working,maybe a rendering issue with templates was going to use timeouts to delay them
const social_links = document.querySelectorAll<HTMLElement>(".social-links");
document.addEventListener("DOMContentLoaded", () => {
    social_links.forEach(links => {
        links.style.animation = "appear 4s forwards"

    })
})
*/


//im going to fucking throttle TypeScript
let totalscore:number=0;
let random=Math.floor(Math.random()*100);
console.log(random);
    const numbers = document.querySelectorAll<HTMLElement>(".num");
    numbers.forEach(nums=>{
        nums.addEventListener("click",()=>{
            totalscore+=parseInt(nums.innerHTML);
            //bypassing bootstrap by using cssText
            nums.style.cssText="background-color:grey !important; color:black !important";
        })
    })
const interval=document.getElementById("interval") as HTMLParagraphElement;
const timer=document.getElementById("timer") as HTMLDivElement;
    if(timer){
        setTimeout(()=>{interval.style.opacity="1";},1000)
        //got this idea from O'Reilly JavaScript book
        setTimeout(()=>{interval.innerText="Ready....";},1000);
        setTimeout(()=>{interval.innerText="Set....";},2000);
        setTimeout(()=>{interval.innerText="Go!";},3000);
        setTimeout(()=>{setInterval(countdown, 1000);},3000) //starts timer
        let time:any = 60;

        function countdown() {
            time--;
            timer.innerText = time;
        }
    }

