// si il est connecté alors on effectu ceci

const boiteDeCommentaires = document.getElementsByClassName("boiteDeCommentaires")
const deconnexion = document.getElementsByClassName("deconnexion")
const selection = document.getElementsByClassName("selection")
const envoyer = document.getElementById("envoyer");
const commentaire = document.getElementById("commentaire");



// lorsque on click sur se deconnecter on reviens à la page de connection 

for (let i = 0; i < deconnexion.length; i++) {
    deconnexion[i].addEventListener("click", () => {
        localStorage.setItem("statut", "deconnecté")
        window.location.href = "connexion"
    })

}


const reedAndSendCommentaires = (i) => {

    if (document.getElementById("vue" + i + "").classList.contains("fa-eye")) {

        // annuler l'activation des autres selections sauf celle selectionnée

        document.getElementById("vue" + i + "").classList.replace("fa-eye", "fa-eye-slash");
        selection[i].style.background = "black";
        boiteDeCommentaires[i].style.display = "inherit";

        for (let j = 0; j < selection.length; j++) {

            if (j !== i) {

                document.getElementById("vue" + j + "").classList.replace("fa-eye-slash", "fa-eye");
                selection[j].style.background = "#D8B138";
                boiteDeCommentaires[j].style.display = "none";

            }
        }

        boiteDeCommentaires[selection.length].style.display = "none";
        envoyer.style.display = "inherit"

        // comportement du bouton et de la boite de saisie lors de son usage

        commentaire.addEventListener("keyup", () => {

            if (!commentaire.value) {

                envoyer.style.opacity = "0";
                envoyer.setAttribute("disabled", "disabled");

            } else {

                envoyer.style.opacity = "1";
                envoyer.removeAttribute("disabled");

            }
        })

        // envoyer le  commentaire

        envoyer.addEventListener("click", () => {

            if (document.getElementById("vue" + i + "").classList.contains("fa-eye-slash")) {


                const msg = commentaire.value;
                const message = document.createElement("div")
                message.setAttribute("style", "display: flex; margin-top: 20px;")

                let d = '<img src="../pictures/3.jpg" alt="" style="width: 70px;height: 70px;border-radius: 50%;margin-right: 10px;">\
        <div>\
            <p style="font-weight: bold;font-size: 15px;margin: 0px;">Moi .<span style="opacity: 0.7;font-size: 10px;">Il y a une heure</span></p>\
            <p style="margin-top: 5px;opacity: 0.7;font-size: 13px;">' + msg + '</p>\
            <p><i class="fa fa-heart" aria-hidden="true" style="color: white"></i> 0\
                <spann style="margin-left: 15px;font-size: 13px;opacity: 0.7;">Repondre</span>\
            </p>\
        </div>'

                message.innerHTML = d;

                if (i == 1) {

                    document.getElementById("messagerieVide").style.display = "none"
                }

                boiteDeCommentaires[i].appendChild(message);
                commentaire.value = "";
                envoyer.style.opacity = "0";
                envoyer.setAttribute("disabled", "disabled");

            }
        })



    } else {

        // si rien ne se passe restons comme au debut

        document.getElementById("vue" + i + "").classList.replace("fa-eye-slash", "fa-eye");
        selection[i].style.background = "#D8B138"
        boiteDeCommentaires[i].style.display = "none"
        boiteDeCommentaires[selection.length].style.display = "inherit"
        envoyer.style.display = "none"

    }

};

// si on click sur un poste alors on execute la fonction reedAndSendCommentaires

for (let i = 0; i < selection.length; i++) {

    selection[i].addEventListener("click", () => {

        reedAndSendCommentaires(i)

    });

}