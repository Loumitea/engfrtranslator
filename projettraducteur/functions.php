<?php
        
function translate($word, $direction)   {

    $dictionary = 
        [
            'chat' => 'cat',
            'chien' => 'dog',
            'lapin' => 'rabbit',
            'grenouille' => 'frog',
            'oiseau' => 'bird'
        ];
        $word = strtolower($word); //précision sensibilité casse

        if  ($direction === 'toEnglish')  {
            if(array_key_exists($word, $dictionary))    {
                return $dictionary[$word];
        }   else    {
                return "Désolé, ce mot n'est pas encore là !";
            }
        }   elseif ($direction === 'toFrench')  {
        $invertedDictionary = array_flip($dictionary);
        if (array_key_exists($word, $invertedDictionary))   {
            return $invertedDictionary[$word];
        }   else  {
            return "Désolé, ce mot n'est pas encore là !";
        }  
        }
        else {
            return "Direction de traduction invalide";
            }
}

 



    ?>
