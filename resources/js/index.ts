//vite automatically compiles TypeScript ,thank god
//console.log("ts working");


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


let totalscore: number = 0;
const numbers = document.querySelectorAll<HTMLElement>(".num");
numbers.forEach(nums => {
    nums.addEventListener("click", () => {
        totalscore += parseInt(nums.innerHTML);
        //bypassing bootstrap by using cssText
        //nums.style.cssText = "background-color:grey !important; color:black !important";
    })
})
const interval = document.getElementById("interval") as HTMLParagraphElement;
const timer = document.getElementById("timer") as HTMLDivElement;
if (timer) {
    setTimeout(() => {
        interval.style.opacity = "1";
    }, 1000)
    //got this idea from O'Reilly JavaScript book
    setTimeout(() => {
        interval.innerText = "Ready....";
    }, 1000);
    setTimeout(() => {
        interval.innerText = "Set....";
    }, 2000);
    setTimeout(() => {
        interval.innerText = "Go!";
    }, 3000);
    setTimeout(() => {
        i = setInterval(countdown, 1000);
    }, 3000) //starts timer
    let time: any = 3;
    let i: number; //this is janky,needs changing.


    let totalscore: number = 0;
    let startflag: boolean = false

    function countdown() {
        time--;
        timer.innerText = time;
        if (time == 0) {
           unselectAll();
            clearInterval(i)
            startflag = false
            document.querySelector("#game-over-screen")?.classList.remove("d-none")
        }
        if (!startflag) {
            startflag = true;
            gridlogic(grid1);
            gridlogic(grid2);
            gridlogic(grid3);
        }

    }

    const grid1 = document.getElementById("grid1") as HTMLElement;
    const grid2 = document.getElementById("grid2") as HTMLElement;
    const grid3 = document.getElementById("grid3") as HTMLElement;
    let random:number | string = Math.floor(Math.random() * 100 + 5); //add 10 to stop a number too small being generated
    console.log(random);

    function gridlogic(grid: HTMLElement) {
        const rand=document.getElementById("random") as HTMLParagraphElement;
        rand.innerText=String(random);
        const operations = grid.querySelectorAll(".op");
        const nums = grid.querySelectorAll(".num");
        nums.forEach((num) => {
            num.addEventListener("click", () => {
                if (num.classList.contains("active")) {
                    num.classList.remove("active");
                    return;
                }
                //unselect all active
                grid.querySelectorAll(".num.active").forEach(g => {
                    g.classList.remove("active")
                })
                //make new active
                num.classList.add("active");
            });
        });

        operations.forEach(op => {
            op.addEventListener("click", () => {
                if (op.classList.contains("active")) {
                    op.classList.remove("active");
                    return;
                }
                //unselect all active
                operations.forEach(p => {
                    p.classList.remove("active");
                })
                //make new active
                op.classList.add("active");
            });
        });

        document.getElementById("score")?.addEventListener("click", () => {
            score(random);
        })

        function score(value: number | string) {
            const grids = document.querySelectorAll(".active");
            let answer: any[] = [];
            let val: number | string;
            grids.forEach(grid => {
                val = String(grid.textContent);
                answer.push(val);
            });
            //eval is dangerous however im not sure of a solution not using it
            const finalscore = eval(answer.join(""));
            console.log(answer);
            answer = [];
            if (finalscore == value) {
                random=String(Math.floor(Math.random() * 100 + 5));
                rand.innerText=random;
                unselectAll();
                totalscore++;
            } else {
                console.log("fail");
            }
        }
    }
}
function unselectAll(){
    const grids=document.querySelectorAll(".active");
    grids.forEach(g=>{
        g.classList.remove("active");
    })
}
