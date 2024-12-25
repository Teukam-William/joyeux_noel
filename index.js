let nom = document.querySelector("#nom")
let tel = document.querySelector("#tel")

nom.addEventListener("keyup", setLink)
tel.addEventListener("keyup", setLink)

function setLink()
{
    let btn_partager = document.querySelector(".btn_partager")
    if(nom != undefined || nom != "")
    {
        btn_partager.setAttribute("href", "https://api.whatsapp.com/send/?text=Joyeux noel                                      "+nom+)
    }
}