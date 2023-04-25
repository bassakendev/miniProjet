const userEmail = document.getElementById("email");
const userMotDePasse = document.getElementById("password");
const submit = document.getElementById("btn");
const echeck = document.getElementById("echeck")

const verifyUserEmail = () => {

    let userEmailVal = document.querySelector("#email").value;
    const str = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

    if (str.test(userEmailVal)) {

        // si l'email est bien rempli alors les bordures du champs deviennent vertes

        document.getElementById("alerteMail").style.display = "none";
        userEmail.style.border = "1px solid green";
        echeck.style.display = "none"

        // on retourne la valeur du champ ie l'email

        return userEmailVal;

    } else {

        // champ mal remplis alors on affiche le message d'indication et les bordures deviennnent rouges

        document.getElementById("alerteMail").style.display = "inherit";
        userEmail.style.border = "1px solid red";

        // vue que la saisie est mauvaise on retourne false

        return false;
    }

}

// meme principe

// verification du mot de pass

const verifyUserPass = () => {

    let motDePasse1Val = document.querySelector("#password").value;
    const str = /^[a-zA-Z0-9]{8,8}$/;

    if (str.test(motDePasse1Val)) {
        document.getElementById("alertePass").style.display = "none";
        userMotDePasse.style.border = "1px solid green";
        echeck.style.display = "none"

        return motDePasse1Val;

    } else {

        document.getElementById("alertePass").style.display = "inherit";
        userMotDePasse.style.border = "1px solid red";

        return false;

    }
}

// on verifie donc automatiquement les champs apres passage

userEmail.addEventListener("blur", verifyUserEmail)
userMotDePasse.addEventListener("blur", verifyUserPass)


submit.addEventListener("click", (e) => {

    const Email = verifyUserEmail();
    const Passeword = verifyUserPass();

    // enregistrement de l'utilisateur sans la base de donnée

    echeck.style.display = "none"

    if (Email && Passeword) {

        submit.style.backgroundColor = "black"
        submit.innerHTML = "Traitement... ."

        setTimeout(() => {
            window.location.href = "aacceuil"
        }, 2000)

    } else {

        e.preventDefault();
        setTimeout(() => {
            submit.style.backgroundColor = "#D8B138"
            submit.innerHTML = "Se connecter"
        }, 2000)

    }
});