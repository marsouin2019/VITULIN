<?php

// mettre en place la class Personne

class Personne{

    // attributs
    public $civilite;
    public $nom;
    public $prenom;
    public $adresse;
    public $complementaire;
    public $postal;
    public $ville;
    public $telephone;
    public $email;
    public $password;

    public $connectDB;

    //méthodes
    public function __construct($myconnexion){

        // initialisation de la connexion internet
       $this->connectDB = $myconnexion;

       // print_r($this->connectDB);
        
    }

    public function add_personne(array $data){

         // print_r($data);

        // mise en forme et sécurité password
        $this->civilite = $data["frmCivilite"];
        if($this->civilite != "M" || $this->civilite != "Mme")
        {
            echo "false";
        }


        $this->prenom = ltrim(htmlentities(ucfirst($data["frmPrenom"])));


        $this->nom = ltrim(htmlentities(strtoupper($data["frmNom"])));

        $this->adresse = ltrim(htmlentities($data["frmAddress"]));
        $this->complementaire = ltrim(htmlentities($data["frmComplementaire"]));
        
        // preg_match();
        /*
        0-9{10}
        */
        if(!preg_match("/a-aZ-Z{5}/", $data["frmPostal"])){

            echo "false";

        }

        $this->postal = ltrim(htmlentities($data["frmPostal"]));


        $this->ville = ltrim(htmlentities(ucfirst($data["frmVille"])));

        $this->telephone = ltrim(htmlentities($data["frmTelephone"]));
        $this->email = strtolower($data["frmEmail"]);

        if(strlen($data["frmPassword"]) < 8)
        {
            echo"false";

        } else {

            if(strlen($data["frmPassword"]) > 12)
            {
                echo "false";
            } else{
                $this->password = password_hash($data["frmPassword"],PASSWORD_DEFAULT);
            }
        }

        // insert data in database

        // table personnes
        // table logins

        // requete insert data
        $resultat = $this->connectDB->query("INSERT INTO personnes (civilite,nom,prenom,adresse,complementaire,postal,ville,telephone) VALUES ('".$this->civilite."', '".$this->nom."','".$this->prenom."','".$this->adresse."','".$this->complementaire."','".$this->postal."','".$this->ville."','".$this->telephone."')") ;

        // print_r($resultat);

        // requete select lastid
        if($resultat == 1){
            // requete selection pour récupérer id personne
            $idPersonne = $this->connectDB->query("SELECT id, prenom FROM personnes WHERE telephone = '".$this->telephone."'");
            $row = $idPersonne->fetch_assoc();

            // id
            $idP = $row["id"];
            $_SESSION["prenom"] = $row["prenom"];

            if(!empty($idP)){

                $resultat = $this->connectDB->query("INSERT INTO logins (email,password,idpersonne) VALUES ('".$this->email."','".$this->password."','".$idP."')");
                // redirection vers page connexion
                header('Location: http://localhost/eval-e2.com/login.php', replace);


            } else{
                echo "probleme d'insertion d'une personne";
            }

            // print_r($resultat);
            
           
            
        }


    }

        public function login(array $data){

            // recuperer les donnees du form connexion
            // faire une comparaison entre les donnees saisies et celles de notre base de donnees
            // et celles de notre base de donnees
            // redirection vers un espace admin

            $this->email = strtolower($data["frmEmail"]);
            $login = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."'");
            $row = $login->fetch_assoc();

            $idPers = $row["idpersonne"];

            $personne = $this->connectDB->query("SELECT prenom FROM personnes WHERE id = '".$idPers."'");
            $rowP = $personne->fetch_assoc();


            if ($row["email"] != "") { // ou isset($row["email"])
                // traitement du mot de passe

            } else {
                // retour page connexion
            }


            if(strlen($data["frmPassword"]) < 8)
            {
                echo"false";
    
            } else {
    
                if(strlen($data["frmPassword"]) > 12)
                {
                    echo "false";
                } else{
                    // $this->password = password_hash($data["frmPassword"],PASSWORD_DEFAULT);
                    $password = $row["password"];

                   if (password_verify($data["frmPassword"], $password)) {

                        

                        $_SESSION["prenom"] = $rowP["prenom"];
                        $_SESSION["email"] = $row["email"];

                        // redirection vers espace admin
                        header('Location: http://localhost/eval-e2.com/admin/', replace);



                   } else {
                        // redirection vers page form Login   
                   }
                    
                }
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
            $to= 'marsouins2019@gmail.com';
            $subject= 'New Password localhost';
            $message= 'Bonjour !, voici votre nouveau mot de passe.'.$passwd.'.'."\r\n";
            $headers = 'From: hostmaster@gmail.com'."\r\n". 'Reply-To: noreply@gmail.com'."\r\n". 'X-Mailer: PHP/' .phpversion();

            if(mail($to, $subject, $message, $headers)){
                return "Le message est envoyé";
            } else {
                return "Le message n'est pas envoyé";
            }



        }

        public function delete_personne(int $id){
            // login il faut passer par son id
            $requete = $this->connectDB->query("DELETE FROM logins WHERE id = '".$id."'");


        }

        public function all_personnes(){
            // Cette fonction affiche toutes les personnes 
            $requete = $this->connectDB->query("SELECT * FROM personnes");
            // $rowA = $requete->fetch_assoc();

            // print_r($requete);

            // stocker toutes les lignes de résultat dans $rowA

            // pour faire une boucle il faut
            $nbr = $requete->num_rows; // affiche nbr ligne table personnes

            // boucle
            for($i=0; $i < $nbr; $i++){
                // créer tableau
                $rowA[] = $requete->fetch_assoc();
            }

            return $rowA;
        }



}
/* 

 //revision

echo "La 3ème compagnie abrite la $filiere";
echo "La 3ème compagnie abrite la $filiere";
echo "La 3ème compagnie abrite la '.$filiere'sdfsd.';
echo "La 3ème compagnie abrite la '".$filiere"'";
("INSERT INTO personnes (civilite,nom,prenom,adresse,complementaire,postal,ville,telephone) VALUES ('".$this->civilite."', '".$this->nom."','".$this->adresse."','".$this->complementaire."','".$this->postal."','".$this->ville."','".$this->telephone."')")

*/