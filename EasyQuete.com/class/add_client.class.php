<?php


/**
 * 
 */
class Personne
{
	public $civilite;
	public $nom;
	public $prenom;
    public $adress;
    public $adressc;
	public $email;
	public $codepostal;
	public $username; 
    public $ville;
    public $commune;
    public $pays;
    public $telephone;
	public $password;
    public $connectDB;




	public function __construct($myconnexion)
	{
		$this->connectDB = $myconnexion;
        //print_r($this->connectDB);
	}

	public function add_user(array $data)
	{
        //print_r($data);

        // mise en forme et sécurité password
        $this->civilite = $data["civilite"];
        if($this->civilite != "M" && $this->civilite != "Mme")
        {
            echo "false";
        }

        //var_dump($data["civilite"]);

        $this->nom = ltrim(htmlentities(strtoupper($data["lastname"])));
        
        $this->prenom = ltrim(htmlentities(ucfirst($data["firstname"])));
       
        $this->username = ltrim(htmlentities(ucfirst($data["username"])));

        if(strlen($data["password"]) < 8)
        {
            echo"false";
        } else {

            $this->password = password_hash($data["password"],PASSWORD_DEFAULT);
        }

        $this->email = strtolower($data["email"]);
        

        $this->adress = ltrim(htmlentities($data["adress"]));

        $this->codepostal = ltrim(htmlentities($data["codepostal"]));
       
        $this->adressc = ltrim(htmlentities($data["adressc"]));

        $this->telephone = ltrim(htmlentities($data["telephone"]));
        
        $this->ville = ltrim(htmlentities(ucfirst($data["ville"])));
       
        $this->pays = ltrim(htmlentities($data["pays"]));  // chaine de caracteres
       
       
        
        
        

        // recuperer idpays
        $req = $this->connectDB->query("SELECT idpays FROM pays WHERE libelle = '".$this->pays."'");
        $row = $req->fetch_assoc();

        $idpays = $row["idpays"];
    
        
        // insert data in database
        // table personnes
        // table logins

        // requete insert data
        $resultat = $this->connectDB->query("INSERT INTO clients(civilite, nom, prenom, adress, codepostal, adressc, telephone , ville, idpays) 
        VALUES ('".$this->civilite."', '".$this->nom."', '".$this->prenom."', '".$this->adress."', '".$this->codepostal."', '".$this->adressc."','".$this->telephone."', '".$this->ville."', '".$idpays."')");
            
             if($resultat == 1){
                // requete selection pour récupérer id personne
                $idUser = $this->connectDB->query("SELECT idclient, prenom FROM clients WHERE nom = '".$this->nom."'");
                $row = $idUser->fetch_assoc();

                // session
                $_SESSION["prenom"] = $row["prenom"];
                

                $idclient = $row["idclient"];

                $resultatL = $this->connectDB->query("INSERT INTO logins(idclient, email, password, username) 
                VALUES ('".$idclient."', '".$this->email."', '".$this->password."', '".$this->username."')");

                header("Location: http://localhost/EasyQuete.com/index.php");

            }
        
    }

    public function login(array $data){
        //recupération des donnée du formulaire de connection
        //comparesont entre les donnée saisie et celle de notre de base de donner
        //redirection vers un espace admin
    
        // data
        /*print_r($data);
        echo "ok";*/
        $this->email = $data["email"];
         // condition test longueur chaine mot de passe
        if( strlen($data["password"]) < 8 )
        {
                //return false;
                echo "false";
    
        } else {

            $login = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."'");
            $row = $login->fetch_assoc();
            
            $idPers = $row["idclient"];
           
            $personne = $this->connectDB->query("SELECT * FROM clients WHERE idclient = '".$idPers."'");
            $rowP = $personne->fetch_assoc();
            
            
            $password = $row["password"];


            if(password_verify($data["password"], $password))
            {
                //stocker en session prenom et email
                $_SESSION["civilite"] = $rowP["civilite"];
                $_SESSION["nom"] = $rowP["nom"];
                $_SESSION["prenom"] = $rowP["prenom"];
                $_SESSION["username"] = $row["username"];
                //$_SESSION["password"] = $rowP["password"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["adress"] = $rowP["adress"];
                $_SESSION["codepostal"] = $rowP["codepostal"];
                $_SESSION["adressc"] = $rowP["adressc"];
                $_SESSION["telephone"] = $rowP["telephone"];
                $_SESSION["ville"] = $rowP["ville"];
                $_SESSION["idpays"] = $rowP["idpays"];
          
                header("Location: http://localhost/EasyQuete.com/index.php", replace);
                
               

            } else{
                    //redirection vers page form login
                    
                    header("Location: http://localhost/EasyQuete.com/formconexion.php", replace);
                   
            };


        }
    
    }

    public function update_user(array $data){

        //print_r($data);
        $this->email = $data["email"];

        $req = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."' ");
        $resultat = $req->fetch_assoc();

        //print_r($resultat);

        $idclient= $resultat["idclient"];

        // find client informations
        $reqC = $this->connectDB->query("SELECT * FROM clients WHERE idclient = '".$idclient."' ");
        $resultC = $reqC->fetch_assoc();


        
       

        // comparaison et update
        if($data["civilite"] != $resultC["civilite"])
        {
            $this->pays = $data["civilite"];
        } else {
            $this->pays = $resultC["civilite"];
        }

        if($data["lastname"] != $resultC["nom"])
        {
            $this->nom = $data["lastname"];
             
        } else {
            $this->nom = $resultC["nom"];
        }

        if($data["firstname"] != $resultC["prenom"])
        {
            $this->prenom = $data["firstname"];
        } else {

            $this->prenom = $resultC["prenom"];
        }

        
        if($data["username"] != $resultat["username"])
        {
            $this->username = $data["username"];
        } else {

            $this->username = $resultat["username"];
        }
        
        if($data["email"] != $resultat["email"])
        {
            $this->email = $data["email"];
        } else {
            $this->email = $resultat["email"];
        }

        if($data["adress"] != $resultC["adress"])
        {
            $this->adress = $data["adress"];
        } else {
            $this->adress = $resultC["adress"];
        }

        if($data["codepostal"] != $resultC["codepostal"])
        {
            $this->codepostal = $data["codepostal"];
        } else {
            $this->codepostal = $resultC["codepostal"];
        }
        
        if($data["adressc"] != $resultC["adressc"])
        {
            $this->adressc = $data["adressc"];
        } else {
            $this->adressc = $resultC["adressc"];
        }

        if($data["telephone"] != $resultC["telephone"])
        {
            $this->telephone = $data["telephone"];
        } else {

            $this->telephone = $resultC["telephone"];
        }

        if($data["ville"] != $resultC["ville"])
        {
            $this->ville = $data["ville"];
        } else {
            $this->ville = $resultC["ville"];
        }

        if($data["pays"] != $resultC["idpays"])
        {
            $this->pays = $data["pays"];
        } else {
            $this->pays = $resultC["idpays"];
        }

        
        // requete update
        $reqU = $this->connectDB->query("UPDATE clients SET nom='".$this->nom."',prenom='".$this->prenom."',adress='".$this->adress."',codepostal='".$this->codepostal."',adressc='".$this->adressc."',telephone='".$this->telephone."',ville='".$this->ville."',idpays='".$this->pays."' WHERE idclient= '".$idclient."'");
        
        
        if($reqU == 1){

            header("Location: http://localhost/EasyQuete.com/index.php", replace);
        }
        




    }

    /*public function delete_user(array $data){

       $requete = $this->connectDB->query("DELETE FROM clients WHERE idclient = '".$idclient."'");

    }*/


    }






?>




















