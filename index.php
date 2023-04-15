<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site dédié au TP PHP POO.">
    <meta name="keywords" content="PHP, POO, TP, Exercices">
    <meta name="author" content="Enzo Tang">
    <title>Accueil - POO Academy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/images/ico/logoPOOAcademy.ico">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <section class="heroHeader">
        <h1>POO Academy</h1>
        <p>TP PHP POO</p>
    </section>

    <section class="heroContainer">

        <div class="firstColumn">

            <div class="firstContainerColumn">
                <h1>Exercice 1</h1>
                <?php
                class Ville
                {
                    public $nom;
                    public $departement;

                    public function afficher()
                    {
                        echo '<p class="text-lg">La ville de ' . $this->nom . ' est dans le département : ' . $this->departement . '</p>';
                    }
                }

                $ville1 = new Ville();
                $ville1->nom = "Nantes";
                $ville1->departement = "Loire Atlantique";
                $ville1->afficher();

                $ville2 = new Ville();
                $ville2->nom = "Lyon";
                $ville2->departement = "Rhône";
                $ville2->afficher();
                ?>

                <h2>Exercice 2</h2>
                <?php
                class VilleConstructeur
                {
                    public $nomConstructeur;
                    public $departementConstructeur;

                    public function __construct($nomConstructeur, $departementConstructeur)
                    {
                        $this->nomConstructeur = $nomConstructeur;
                        $this->departementConstructeur = $departementConstructeur;
                    }

                    public function afficher()
                    {
                        echo '<p class="text-lg">La ville de ' . $this->nomConstructeur . ' est dans le département : ' . $this->departementConstructeur . '</p>';
                    }
                }

                $ville_constructeur1 = new VilleConstructeur("Nantes", "Loire Atlantique");
                $ville_constructeur1->afficher();

                $ville_constructeur2 = new VilleConstructeur("Lyon", "Rhône");
                $ville_constructeur2->afficher();
                ?>

                <h3>Exercice 3</h3>
                <?php
                class Personne
                {
                    public $nomPers;
                    public $prenomPers;
                    public $adressePers;

                    public function __construct($nom, $prenom, $adresse)
                    {
                        $this->nomPers = $nom;
                        $this->prenomPers = $prenom;
                        $this->adressePers = $adresse;
                    }

                    public function __destruct()
                    {
                        echo '<p class="text-lg text-black">L\'objet à été dédruit.</p>';
                    }

                    public function getPersonne()
                    {
                        return "Nom : " . $this->nomPers . ", Prénom : " . $this->prenomPers . ", Adresse : " . $this->adressePers;
                    }

                    public function setAdresse($nouvelleAdresse)
                    {
                        $this->adressePers = $nouvelleAdresse;
                    }
                }

                $pers1 = new Personne("Martin", "Sophie", "3 rue du Commerce");
                echo '<p class="text-lg">' . $pers1->getPersonne() . '</p>';
                $pers1->setAdresse("5 avenue de la Liberté");
                echo '<p class="text-lg">' . $pers1->getPersonne() . '</p>';
                ?>
            </div>


            <div class="copyrightContainer">
                <a class="copyrightText text-lg" href="http://" target="_blank" rel="noopener noreferrer">Télécharger le
                    projet <i class="bi bi-github"></i></a>
                <a class="copyrightText text-lg" href="https://enzotang.fr" target="_blank"
                    rel="noopener noreferrer">Made with <i class="bi bi-heart-fill couleurI"></i> by Enzo Tang</a>
            </div>
        </div>

        <div class="secondColumn">

            <h4>Exercice 4</h4>
            <?php
            class Form
            {
                protected $html;

                public function __construct()
                {
                    $this->html = '<form>';
                    $this->html .= '<fieldset>';
                }

                public function settext($name, $placeholder)
                {
                    $this->html .= '<input type="text" name="' . $name . '" placeholder="' . $placeholder . '">';
                }

                public function setsubmit($value)
                {
                    $this->html .= '<input class="boutonGeneral" type="submit" value="' . $value . '">';
                }

                public function getform()
                {
                    $this->html .= '</fieldset>';
                    $this->html .= '</form>';
                    return $this->html;
                }
            }

            $form1 = new Form();
            $form1->settext("nom", "Nom d'utilisateur");
            $form1->settext("mdp", "Mot de passe");
            $form1->setsubmit("Envoyer");
            echo $form1->getform();
            ?>

            <h5>Exercice 5</h5>
            <?php
            class Form2 extends Form
            {
                public function setradio($name, $value, $label)
                {
                    $this->html .= '<input type="radio" name="' . $name . '" value="' . $value . '"> ' . $label . '<br>';
                }

                public function setcheckbox($name, $value, $label)
                {
                    $this->html .= '<input type="checkbox" name="' . $name . '" value="' . $value . '"> ' . $label . '<br>';
                }
            }

            $form2 = new Form2();
            $form2->settext("nom", "Nom d'utilisateur");
            $form2->settext("mdp", "Mot de passe");
            $form2->setradio("genre", "homme", "Homme");
            $form2->setradio("genre", "femme", "Femme");
            $form2->setcheckbox("newsletter", "1", "S'abonner à la newsletter");
            $form2->setsubmit("Envoyer");
            echo $form2->getform();
            ?>
        </div>

    </section>
</body>

</html>