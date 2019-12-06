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
       
        $this->username = ltrim(htmlentities(strtoupper($data["username"])));
        $this->adress = ltrim(htmlentities($data["adress"]));
       
        $this->adressc = ltrim(htmlentities($data["adressc"]));
      
        
        if(!preg_match("/[0-9]{5}/", $data["codepostal"])){
            echo "false";
        }
        
        $this->ville = ltrim(htmlentities(ucfirst($data["ville"])));
       
        $this->pays = ltrim(htmlentities($data["pays"]));  // chaine de caracteres
       
        $this->email = strtolower($data["email"]);
        
        if(strlen($data["password"]) < 8)
        {
            echo"false";
        } else {

            $this->password = password_hash($data["password"],PASSWORD_DEFAULT);
        }
        
        if(!preg_match("#(^\+[0-9]{3}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)#", $data["telephone"])){

            echo "false";
        }

        // recuperer idpays
        $req = $this->connectDB->query("SELECT idpays FROM pays WHERE libelle = '".$this->pays."'");
        $row = $req->fetch_assoc();

        $idpays = $row["idpays"];
    
        
        // insert data in database
        // table personnes
        // table logins

        // requete insert data
        $resultat = $this->connectDB->query("INSERT INTO clients(civilite, nom, prenom, adress, adressc, ville, idpays) 
        VALUES ('".$this->civilite."', '".$this->nom."', '".$this->prenom."', '".$this->adress."', '".$this->adressc."', '".$this->ville."', '".$idpays."')");
            
             if($resultat == 1){
                // requete selection pour récupérer id personne
                $idUser = $this->connectDB->query("SELECT idclient FROM clients WHERE nom = '".$this->nom."'");
                $row = $idUser->fetch_assoc();

                $idclient = $row["idclient"];

                $resultatL = $this->connectDB->query("INSERT INTO logins(idclient, email, password, username) 
                VALUES ('".$idclient."', '".$this->email."', '".$this->password."', '".$this->username."')");

                print_r($resultatL);
             
            }
        
    }
    public function login()
    {
        
    }
}





?>




















