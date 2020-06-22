
let music = window.screen.width;
if(music > 700){

    window.addEventListener("DOMContentLoaded", () => {
            document.getElementById("my_audio").play();
        });
    }

else{
    document.querySelector("html").onclick = () => {
    document.getElementById("my_audio").play();
    }
}

