/* 
 * Ajax (Mehdi)
 * 
 * 2014/07/07
 */
window.addEventListener('load', init, false);

// Appeler sur le chargement du DOM
function init(){
    document.getElementById('categorie').addEventListener('change', menuRequeteAjax, false);   
    document.getElementById('suivant').addEventListener('click', valideFormulaire, false);    
}

function menuRequeteAjax(){
    var valeurSelection = document.getElementById('categorie').selectedIndex;
    //console.log(valeurSelection);
    //valeurSelection = parseInt(valeurSelection)+1;
    var request = new XMLHttpRequest(); // Création de l'objet
    url = 'ajaxControler.php?categorie='+valeurSelection;
    request.open("GET", url, true);// Création de la requête
    request.send(); // Envoie de la requête

    request.onreadystatechange = function (){
        //console.log ("readyState : " + request.readyState);
        //console.log ("status : " + request.status);
        if(request.readyState ==4 && request.status == 200){
            //console.log("Reponse : " + request.responseText);
            document.getElementById('selectCat').innerHTML=request.responseText;
        }
    }
}



function valideFormulaire(){

    var valid=true;
    var transaction = document.getElementsByName('transaction');
    var categorie = document.getElementById('categorie').selectedIndex;
    var choixBien = document.getElementById('selectCat').selectedIndex;    
    
    // Transaction 
	if (valideChampTransaction(transaction) == "")	// Si aucun choix n'est fait
	{
		document.getElementById('erreurTransaction').innerHTML = " Vous devez faire un choix ";
		valid = false;	
		
	}
	else	// Si valide
	{
		 console.log('ok transaction');
		 document.getElementById('erreurTransaction').innerHTML = "";			
	}
        
        if (categorie==0){
                document.getElementById('erreurCategorie').innerHTML = " Choisir une catégorie ";
                valid = false;
        }
        else{
                console.log('ok categorie');
                document.getElementById('erreurCategorie').innerHTML = "";
        }
        
        
        if (choixBien==0){
                document.getElementById('erreurChoixBien').innerHTML = " Choisir le type du bien ";
                valid = false;
        }
        else{
                console.log('ok choix bien');
                document.getElementById('erreurChoixBien').innerHTML = "";
        }
        
        if (valid==true){ 
            document.getElementById('categorie').removeEventListener('change', menuRequeteAjax, false);
            document.getElementById('suivant').removeEventListener('click', valideFormulaire, false);  
            document.formulaire.action="index.php?page=agenceAccueil&section=choixBien";
            document.formulaire.method="POST";
            document.formulaire.submit();
        }
}

/* Fonction qui valide le choix du transaction */

function valideChampTransaction(formElementTransaction){
	var transaction = "";
	var bouton;
	
	for(i=0;i<formElementTransaction.length;i++)	// Pour chacun des boutons
	{
		bouton = formElementTransaction[i];	
		if(bouton.checked)	// Si le bouton est sélectionné
		{
			transaction = bouton.value;	
		}
	}	
	return transaction;
}