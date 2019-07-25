// formulaire facture traitement
document.getElementById("submit").addEventListener("click", function(event){
    event.preventDefault();  // empeche le rechargement de la page formulaire

    // quantite 1 definition et calcul
    let q1 = document.getElementById("q1");
    //q1.innerHTML = 10;  // ne s'affiche pas dans input q1
    // div, span, p, li, a, nav, h1-h6, td  // element HTML

    // comment faire pour afficher un contenu dans un input ?
    // input renvoi des valeurs = value
    document.getElementById("q1").value = 10;

    let q2 = document.getElementById("q2");
    q2.value = 25;

    let q3 = document.getElementById("q3");
    q3.value = 15;

    let q4 = document.getElementById("q4");
    q4.value = 5;

    let q5 = document.getElementById("q5");
    q5.value = 8;

    // prix definition et calcul
    let p1 = document.getElementById("p1");
    p1.value = 2.50;

    let p2 = document.getElementById("p2");
    p2.value = 0.50;

    let p3 = document.getElementById("p3");
    p3.value = 1.25;

    let p4 = document.getElementById("p4");
    p4.value = 36;

    let p5 = document.getElementById("p5");
    p5.value = 250.33;

    // calculer quantite/prix et afficher le total ligne
    /*
        - variable quantite
        - variable prix
        - calcule = quantite *  prix
        - afficher le total
    */
    //calculer(q1, p1);   // fonction avec passage de paramettre

    // tableaux - les quantites et les prix 
    let tabQ = [q1.value,q2.value,q3.value,q4.value,q5.value];
    let tabP = [p1.value, p2.value, p3.value, p4.value, p5.value];

    calculer(tabQ, tabP);


});  // fin fonction anonyme


function calculer(quantites, prix)
{

    let nbrQ = quantites.length;
    let totals = document.getElementsByClassName("total"); // 8
    let subTotal = [];

     // exemple de resultat a atteindre
    /*  subTotal = (quantites[0] * prix[0]) + (quantites[1] * prix[1]);
    totals[5].innerHTML = subTotal; */


    for(let i=0; i < nbrQ; i++)
    {
        //totals[1].innerHTML = quantites[i] * prix[i];
        for(let t =0; t < nbrQ; t++)
        {
            // i et t
            if( i === t)
            {
                totals[t].innerHTML = quantites[i] * prix[i];
                // stocker les résultats de total par ligne
                subTotal.push((quantites[i] * prix[i]))

            }
            
        }        
    }

    // faire une addition des sommes dans notre array
    // console.log(subTotal);

    // créer une fonction calculer totaux
    function getTotal(valP,valC){
        // faire une addition
        return valP + valC;
    }
    // console.log(subTotal.reduce(getTotal,0));
    let totalHT = subTotal.reduce(getTotal, 0);
    totalHT = Math.round(totalHT * 100) / 100;

    // afficher le résultat dans l'html
    // totals[5].innerHTML = totalHT;

    // ajouter au total la TVA
    let tax = 0.05;
    let totalTax = ((subTotal.reduce(getTotal, 0)) * tax);
    let Total = totalTax + totalHT;

    function arrondir(nbr_a_arrondir){

        return Math.round(nbr_a_arrondir * 100) / 100;
    }

    totals[5].innerHTML = arrondir(totalHT);
    totals[6].innerHTML = arrondir(totalTax);
    totals[7].innerHTML = arrondir(Total);
   





}

