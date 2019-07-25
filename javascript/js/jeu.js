// Déclaration tableau et initialisation
    var joueurs = [];

// déclaration de ma fonction add_joueur
    function add_joueur(){
        // affichez et stokcer les joeurs
        joueurs.push(prompt("Ecrire un nom de joueur en majuscule."))
        // tester variable joueurs
        if(joueurs != null){
            // alert(joueurs.length);
            document.getElementById("affiche_joueur").style.textTransform = "uppercase";
            document.getElementById("affiche_joueur").innerHTML= joueurs ;
        } else{
            alert("Vous n'avez pas indiqué de nom");
        }
           
    } 

    function sort(){
       // tester la longueur de la chaîne
       if(joueurs.length > 0){
           /*
                - déclaration d'une variable
                - méthode mathématique pour mélanger des données
                - tirage au sort d'une donnée
                - indication de la longueur de mon tableau joueurs
           */
          var random = Math.floor(Math.random()*joueurs.length);
          
          // afficher le nom du gagnant
          document.getElementById("affiche_gagnant").innerHTML = "Le gagnant est : <strong>" + joueurs[random] + "</strong>";
       }
    }