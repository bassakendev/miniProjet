const recherche = document.getElementById("recherche");
const postes = document.getElementsByClassName("postes")

recherche.addEventListener("keyup", () => {

    // lors de ma saisie dans le champ de recherche je filtre le texte entré sur les titres des postes

    let str = recherche.value;
    if (str !== "") {

        // tantque la valeur sur le champ de saisie est different d'un null alors filtrons

        for (let i = 1; i <= postes.length; i++) {

            // si je trouve la chaine de caractère dans un titre alors le poste reste affiché

            let poste = document.querySelector(".postes:nth-child(" + i + ") .titre")
            let posteVal = poste.innerHTML
            if (posteVal.toUpperCase().includes(str.toUpperCase())) {
                document.querySelector(".postes:nth-child(" + i + ")").style.display = "inherit"

            } else {

                // si non le poste disparaitt

                document.querySelector(".postes:nth-child(" + i + ")").style.display = "none"
            }
        }
    } else {

        // et si on efface le contenue de notre champ de saisie alors on revient à l'etat initial

        for (let i = 1; i <= postes.length; i++) {
            document.querySelector(".postes:nth-child(" + i + ")").style.display = "inherit"
        }
    }
})