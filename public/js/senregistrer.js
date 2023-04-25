// test du formulaire avec barre de progression evoluant à chaque zone bien remplie


const userName = document.getElementById("nom");
const userPrenom = document.getElementById("prenom");
const userEmail = document.getElementById("email");
const userVille = document.getElementById("villes");
const userPays = document.getElementById("pays");
const userTel = document.getElementById("tel");
const userMotDePasse1 = document.getElementById("password1");
const userMotDePasse2 = document.getElementById("password2");
const boxVilles = document.getElementById("bxvilles");
const boxPays = document.getElementById("bxpays");
const submit = document.getElementById("btn");
const progression = document.getElementById("progression");
var i = 0;
let cptNom = cptPrenom = cptEmail = cptVille = cptPays = cptTel = cptPass1 = cptPass2 = 1;

// verification du nom

const verifyUserName = () => {

    let userNameVal = document.querySelector("#nom").value;
    const str = /^([a-z A-Z]{3,})$/;

    if (str.test(userNameVal)) {

        // si le nom est bien rempli alors les bordures du champs deviennent vertes

        document.getElementById("alerteNam").style.display = "none";
        userName.style.border = "1px solid green";

        if (cptNom == 1) {

            // champ bien remplis barre de progression augmente de 12.5%

            progression.style.height = "" + (i + 12.5) + "%";
            cptNom++;
            i = i + 12.5;
        }

        // on retourne la valeur du champ ie le nom

        return userNameVal;

    } else {

        // champ mal remplis alors on affiche le message d'indication et les bordures deviennnent rouges

        document.getElementById("alerteNam").style.display = "inherit";
        userName.style.border = "1px solid red";

        if (cptNom > 1) {

            // si le champ avais été bien remplis au préalable alors la barre de progression diminue de 12.5%

            i = i - 12.5;
            progression.style.height = "" + i + "%";
            cptNom = 1;
        }

        // vue que la saisie est mauvaise on retourne false

        return false;
    }

}

// la procedure de verification est la meme pour tout les champs de saisie

// verification du prenom

const verifyUserPrenom = () => {
    let userPrenomVal = document.querySelector("#prenom").value;
    const str = /^([a-z A-Z]{3,})$/;

    if (str.test(userPrenomVal)) {

        userPrenom.style.border = "1px solid green";

        if (cptPrenom == 1) {
            progression.style.height = "" + (i + 12.5) + "%";
            cptPrenom++;
            i = i + 12.5;
        }

        return userPrenomVal;

    } else {

        userPrenom.style.border = "1px solid red";

        if (cptPrenom > 1) {
            i = i - 12.5;
            progression.style.height = "" + i + "%";
            cptPrenom = 1;
        }

        return false;
    }

}

// verification de l'email

const verifyUserEmail = () => {

    let emailVal = document.querySelector("#email").value;
    const str = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

    if (str.test(emailVal)) {
        document.getElementById("alerteMail").style.display = "none";

        if (cptEmail == 1) {
            progression.style.height = "" + (i + 12.5) + "%";
            cptEmail++;
            i = i + 12.5;
        }

        userEmail.style.border = "1px solid green";
        return emailVal;

    } else {
        document.getElementById("alerteMail").style.display = "inherit";
        userEmail.style.border = "1px solid red";

        if (cptEmail > 1) {
            i = i - 12.5;
            progression.style.height = "" + i + "%";
            cptEmail = 1;
        }

        return false;

    }
}

// verification de la  valeur de 'option ville

const verifyUserVille = () => {

    userVille.addEventListener("change", () => {

        let userVilleVal = document.querySelector("#villes").value;

        if (userVilleVal === "Choisir une ville") {
            boxVilles.style.border = "1px solid red"

            if (cptVille > 1) {
                i = i - 12.5;
                progression.style.height = "" + i + "%";
                cptVille = 1;
            }

            return false;
        } else {
            boxVilles.style.border = "1px solid green"

            if (cptVille == 1) {
                progression.style.height = "" + (i + 12.5) + "%";
                cptVille++;
                i = i + 12.5;
            }

            return userVilleVal;
        }
    })

}

// verification de la  valeur de 'option pays

const verifyUserPays = () => {


    userPays.addEventListener("change", () => {
        let userPaysVal = document.querySelector("#pays").value;

        if (userPaysVal === "Choisir un pays") {
            boxPays.style.border = "1px solid red"

            if (cptPays > 1) {
                i = i - 12.5;
                progression.style.height = "" + i + "%";
                cptPays = 1;
            }

            return false;

        } else {
            boxPays.style.border = "1px solid green"

            if (cptPays == 1) {
                progression.style.height = "" + (i + 12.5) + "%";
                cptPays++;
                i = i + 12.5;
            }

            return userPaysVal;
        }
    })

}

// verification du numero de telephone

const verifyUserTel = () => {

    let telephoneVal = document.querySelector("#tel").value;
    let str = /^[0-9]{9}$/;

    if (str.test(telephoneVal)) {
        document.getElementById("alerteTel").style.display = "none";

        if (cptTel == 1) {
            progression.style.height = "" + (i + 12.5) + "%";
            cptTel++;
            i = i + 12.5;
        }

        userTel.style.border = "1px solid green";
        return telephoneVal;

    } else {
        document.getElementById("alerteTel").style.display = "inherit";
        userTel.style.border = "1px solid red";

        if (cptTel > 1) {
            i = i - 12.5;
            progression.style.height = "" + i + "%";
            cptTel = 1;
        }

        return false;
    }

}

// verification du mot de pass

const verifyUserPass1 = () => {

    let motDePasse1Val = document.querySelector("#password1").value;
    const str = /^[a-zA-Z0-9]{8,8}$/;

    if (str.test(motDePasse1Val)) {
        document.getElementById("alertePass").style.display = "none";
        userMotDePasse1.style.border = "1px solid green";

        if (cptPass1 == 1) {
            progression.style.height = "" + (i + 12.5) + "%";
            cptPass1++;
            i = i + 12.5;
        }


        return motDePasse1Val;

    } else {
        document.getElementById("alertePass").style.display = "inherit";
        userMotDePasse1.style.border = "1px solid red";

        if (cptPass1 > 1) {
            i = i - 12.5;
            progression.style.height = "" + i + "%";
            cptPass1 = 1;
        }

        return false;

    }

}

// verification de la sertification du mot de pass

const verifyUserPass2 = () => {
    let motDePasse2Val = document.querySelector("#password2").value;
    let motDePasse1Val = document.querySelector("#password1").value;

    if (motDePasse1Val === motDePasse2Val && motDePasse1Val !== "") {

        userMotDePasse2.style.border = "1px solid green";


        if (cptPass2 == 1) {
            progression.style.height = "" + (i + 12.5) + "%";
            cptPass2++;
            i = i + 12.5;
        }

        return motDePasse2Val;

    } else {
        userMotDePasse2.style.border = "1px solid red";

        if (cptPass2 > 1) {
            i = i - 12.5;
            progression.style.height = "" + i + "%";
            cptPass2 = 1;
        }


        return false;
    }
}

// on verifie donc automatiquement les champs apres passage

userName.addEventListener("blur", verifyUserName)
userPrenom.addEventListener("blur", verifyUserPrenom)
userEmail.addEventListener("blur", verifyUserEmail)
userTel.addEventListener("blur", verifyUserTel)
verifyUserVille()
verifyUserPays()
userMotDePasse1.addEventListener("blur", verifyUserPass1)
userMotDePasse2.addEventListener("blur", verifyUserPass2)



submit.addEventListener("click", (e) => {
    const Nom = verifyUserName();
    const Prenom = verifyUserPrenom();
    const Email = verifyUserEmail();
    const ville = verifyUserVille();
    const pays = verifyUserPays();
    const Tel = verifyUserTel();
    const Passeword = verifyUserPass1();
    const pass2 = verifyUserPass2();
    let Pays = document.querySelector("#pays").value;
    let Ville = document.querySelector("#villes").value;

    // enregistrement de l'utilisateur sans la base de donnée après le click

    if (Pays === "Choisir un pays" && Ville === "Choisir une ville") {
        e.preventDefault();
        boxPays.style.border = "1px solid red"
        boxVilles.style.border = "1px solid red"

    } else if (Ville === "Choisir une ville") {
        e.preventDefault();
        boxVilles.style.border = "1px solid red"

    } else if (Pays === "Choisir un pays") {
        e.preventDefault();
        boxPays.style.border = "1px solid red"

    } else if (Nom && Prenom && Email && !ville && !pays && Tel && Passeword && pass2) {

        // userName.value = userPrenom.value = userEmail.value = userTel.value = userMotDePasse1.value = userMotDePasse2.value = "";
        submit.style.backgroundColor = "black"
        submit.innerHTML = "traitement... ."

        setTimeout(() => {
            // window.location.href = "acceuil"
        }, 2000)

    } else {
        e.preventDefault();
    }
});