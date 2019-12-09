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
        // mise en securite du mot de passe
         // condition test longueur chaine mot de passe
        if( strlen($data["password"]) < 8 )
        {
                //return false;
                echo "false";
    
        } else {
            $login = $this->connectDB->query ("SELECT * FROM logins WHERE email = '".$this->email."'");
            $row = $login->fetch_assoc();
            
            $idPers = $row["idclient"];
           
            $personne = $this->connectDB->query("SELECT prenom FROM clients WHERE idclient = '".$idPers."'");
            $rowP = $personne->fetch_assoc();
            
            
            $password = $row["password"];


            if(password_verify($data["password"], $password))
            {
                //stocker en session username et email
                $_SESSION["prenom"] = $rowP["prenom"];
                $_SESSION["email"] = $row["email"];

                header("Location: http://localhost/EasyQuete.com/index.php", replace);
                
               

            } else{
                    //redirection vers page form login
                    
                    header("Location: http://localhost/formconexion.php", replace);
                   
            };

        }
    
    }

    public function resetPassword($data){
        // traitement adresse email
        $this->email = $data;
        $resetPassword = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."'");
        print_r($resetPassword);

        //generateur nouveau password
        echo $newPassword = $this->genePasswd(8);

        // mail
        echo $this->envoi_password($newPassword);
        exit;

        //crypter
        $this->password = password_hash($newPassword,PASSWORD_DEFAULT);

        // mettre a jour mot de passe dans la table logins
        $resultat = $this->connectDB->query-("UPDATE logins SET password= '".$this->password."' WHERE email = '".$this->email."'");


    }

    public function genePasswd(int $length){
        // test longueur
        $length = ($length == 8) ? 8 : 12;

        //chaine
        $chaine = "ABCDEFGHJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz123456789&#.";

        //melanger
        $melanger = str_shuffle($chaine);

        //retourner
        return $passwd = substr($melanger, 0, $length);



    }

    public function envoi_password($passwd){
        //
        $to= 'nicolas.vitulin@gmail.com';
        $subject= 'New Password localhost';
        $message= 'Bonjour !, voici votre nouveau mot de passe.'.$passwd.'.'."\r\n";
        $headers = 'From: hostmaster@gmail.com'."\r\n". 'Reply-To: noreply@gmail.com'."\r\n". 'X-Mailer: PHP/' .phpversion();

        if(mail($to, $subject, $message, $headers)){
            return "Le message est envoyé";
        } else {
            return "Le message n'est pas envoyé";
        }



    }


    
}





?>




















