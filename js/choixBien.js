/* 
 * 
 * 
 * 2014/07/07
 */
window.addEventListener('load', init, false);

// Appeler sur le chargement du DOM
function init(){      
    document.getElementById('sauvegarder').addEventListener('click', valideFormulaire, false);    
}



function valideFormulaire(){

    var valid=true;
    var nbrChambre = document.getElementById('nbrChambre').selectedIndex;
    var nbrSalleBain = document.getElementById('nbrSalleBain').selectedIndex;
    var nbrPiece = document.getElementById('nbrPiece').selectedIndex;
    var ville = document.getElementById('ville').selectedIndex;
    var codePostal = document.getElementById('codePostal').value;
    
        // Nombre de chambre        
        if (nbrChambre==0){
                document.getElementById('erreurNbrChambre').innerHTML = "Nombre de chambre est obligatoire ";
                valid = false;
        }
        else{
                console.log('ok nbrChambre');
                document.getElementById('erreurNbrChambre').innerHTML = "";
        }
        
        // Nombre de salle de bain
        if (nbrSalleBain==0){
                document.getElementById('erreurNbrSalleBain').innerHTML = " Choisir le nombre de salle de bain ";
                valid = false;
        }
        else{
                console.log('ok nbrSalleBain');
                document.getElementById('erreurNbrSalleBain').innerHTML = "";
        }
        
        // Nombre de pièce
        if(nbrPiece==0){
                document.getElementById('erreurNbrePiece').innerHTML = " Nombre de pièce est obligatoire ";
                valid = false;
        }
        else{
                console.log("nbre de piece");
                document.getElementById('erreurNbrePiece').innerHTML = "";
        }
        
        // ville
        if (ville==0){
                document.getElementById('erreurVille').innerHTML = " La ville est obligatoire ";
                valid = false;
        }
        else{
            console.log("ville");
            document.getElementById('erreurVille').innerHTML = "";
        }
        
        if(codePostal==''){
            document.getElementById('erreurBP').innerHTML = " Le code postal est obligatoire ";
            valid= false;
        }
        else{
            console.log('bp');
            document.getElementById('erreurBP').innerHTML = "";
        }
        
        if (valid==true){ 
            document.getElementById('sauvegarder').removeEventListener('click', valideFormulaire, false);  
            document.formulaire.action="index.php?page=agenceAccueil&section=saveBien";
            document.formulaire.method="POST";
            document.formulaire.submit();
        }
}

