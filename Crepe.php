<?php
    class  Crepe {
        // Attributs, Propriéte ce sont des variables déclarés dans les class
        // public, réutilisable à l'intérieur et à l'extérieur de la class
        // private, réutilisable que à l'intérieur de la class
        private $oeuf;          //entier qui correspond au nombre d'oeuf
        public $beurre;        //entier qui correspond à la quantité de beurre gramme de beurre
        public $lait;          //entier qui correspond à la quantité de lait en litre 
        public $sucre;         //entier qui correspond à la quantité en cuillère à soupe
        public $sel;           //entier qui correspond à la quantité de sel pincée de sel
        public $farine;        //entier qui correspond à la quantité de farine en gramme 
        public $rhum;          //entier qui correspond à la quantité de cuillère à soupe rhum
        public $orange;        // entier qui correspond à la quantité d'une orange, 0,5 -> moitié
        public $nutella;       // entier qui correspond à la quantité de nutella en gramme
        private $topping;      // chaine de caractère, suppléments à ajouter à la crepe

        //Méthodes, ce sont des fonctions déclarés dans les class
        public function __construct( //Méthode qui va être appelée(exécutée) automatiquement à chaque fois qu on va instancier une class
            $oeuf,
            $beurre,
            $lait,
            $sucre,
            $sel,
            $farine,
            $rhum,
            $orange,
            $nutella,
            $topping

        ){
            //Traitement de votre fonction
            $this->oeuf = $oeuf;
            $this->beurre = $beurre;
            $this->lait = $lait;
            $this->sucre = $sucre;
            $this->sel = $sel;
            $this->rhum = $rhum;
            $this->farine = $farine;
            $this->orange = $orange;
            $this->nutella = $nutella;
            $this->topping = $topping;
        }
        
        public function afficher_recette(){ // Ici on affiche la recette, quantité des ingrédients
            // Selon si il y'a de l'orange, du nutella ou pas, on affiche le type de crêpe
            if($this->orange !== 0 && $this->nutella ==0){
                echo "Dans ma recette de crêpe à l'orange, il y a :\n\n";
                echo $this->orange." quntité d'une orange.\n";
            } else if($this->orange == 0 && $this->nutella !=0){
                echo "Dans ma recette de crêpe au nutella, il y a :\n\n";
                echo $this->nutella." quantité de nutella en gramme.\n";
            }else if ($this->orange == 0 && $this->nutella ==0){
                 echo "Dans ma recette de crêpe simple, il y a :\n\n";
            }
            // On affiche les ingrédients ainsi que leur quantité
            echo $this->oeuf." oeufs.\n";
            echo $this->beurre." gramme de beurre.\n";
            echo $this->lait." littre de lait.\n";
            echo $this->sucre." cuillère à soupe de sucre.\n";
            echo $this->sel." quantité de sel en gramme .\n"; 
            echo $this->farine." quantité de farine en gramme.\n";
            echo $this->rhum." cuillère à soupe de rhum.\n";
            echo $this->topping." en suppléments.\n";
            echo "\n";
        }
        //Récupérer un attribut privée -> get
        public function getOeuf (){
            return  $this->oeuf;              
        }
        //Modifier un attribut privée -> set
        public function setOeuf ($parametre){
            $this->oeuf = $parametre;
        }

        //Modifier le contenu privée d'un string d'un tableau, pour les topping
        public function getTopping (){
            return  $this->topping;              
        }
        public function addTopping ($newTopping1,$newTopping2){
            array_push($this->topping,"$newTopping1","$newTopping2");
        }

    }   
?>