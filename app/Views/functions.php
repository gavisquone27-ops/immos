<?php

function kmb($number)
{
    $abbrevs = array(12 => "T", 9 => "B", 6 => "M", 3 => "K", 0 => "");

    foreach ($abbrevs as $exponent => $abbrev) {
        if (abs($number) >= pow(10, $exponent)) {
            return intval($number / pow(10, $exponent)) . $abbrev;
        }
    };
}
function cryptage($id)
{
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $cars = "";
    $int = "012345678910";
    $long = intval(strlen($id));
    $code = "";
    $pos = "";
    $cle = "";
    for ($i = 1; $i <= 10; $i++) {
        $code .= substr($chars, rand(0, 61), 1);
    }
    $arr = array();
    for ($n = 0; $n <= $long - 1; $n++) {

        $cars = substr($id, $n, 1);
        $pos = substr($int, rand(0, 10), 1);
        if (in_array($pos, $arr)) {
            $trouve = true;
        } else {
            $trouve = false;
        };
        while ($trouve == true) {
            $pos = substr($int, rand(0, 10), 1);
            if (in_array($pos, $arr)) {
                $trouve = true;
            } else {
                $trouve = false;
            };
        }
        $arr[$n] = $pos;
        $cle .= $pos;
        //$code1=substr($code,0,$pos);
        //$code2=substr($code,$pos);
        // $code=$code1.$cars.$code2;

    }
    for ($d = 0; $d <= $long - 1; $d++) {
        $arr[$d] = substr($cle, $d, 1);
        //$code=substr($code);
    }
    $arr1 = implode('', $arr);
    sort($arr);
    //print_r($arr);
    for ($d = 0; $d <= $long - 1; $d++) {
        $code1 = substr($code, 0, $arr[$d]);
        $code2 = substr($code, $arr[$d]);
        $cars = substr($id, $d, 1);
        $code = $code1 . $cars . $code2;
    }
    return $code . $arr1 . '-' . $long;
}

//decriptage des identifiants
function decryptage($d)
{
    $id = "";
    $taille = explode("-", $d);
    //var_dump($t);
    $g = intval($taille[1]);
    $key = substr($taille[0], -$g);
    $key = str_split($key);
    sort($key);
    $taille_def = intval(strlen($taille[0])) - $g;
    for ($i = 0; $i <= $g - 1; $i++) {
        $id .= substr($taille[0], intval($key[$i]), 1);
    }
    return $id;
}

function formatage($val)
{
    $str = str_replace(' ', '-', $val);
    $str = str_replace('.', '-', $str);
    $str = str_replace(' ', '-', $str);
    $str = str_replace('?', '-', $str);
    $str = str_replace(':', '-', $str);
    $str = str_replace("'", '-', $str);
    $str = str_replace(",", '-', $str);
    $str = str_replace("!", '-', $str);
    $str = str_replace(";", '-', $str);
    $str = str_replace('"', '-', $str);
    $str = str_replace('&', '-', $str);
    $str = str_replace('(', '-', $str);
    $str = str_replace(')', '-', $str);
    $str = str_replace('|', '-', $str);
    $str = str_replace('}', '-', $str);
    $str = str_replace('{', '-', $str);
    $str = str_replace('#', '-', $str);
    $str = str_replace('/', '-', $str);
    $str = str_replace('Ɔ', '-', $str);
    $str = str_replace('‘’', '-', $str);
    $str = str_replace('+', '-', $str);
    $str = str_replace('--', '-', $str);
    $str = str_replace('%', '-', $str);
    return $str;
}

function suppr_accents($str)
{
    /**
     * Supprimer les accents
     *
     * @param string $str chaîne de caractères avec caractères accentués
     * @param string $encoding encodage du texte (exemple : utf-8, ISO-8859-1 ...)
     */

    // $str=$prods[0]->lib_produit;

    $encoding = 'utf-8';
    // transformer les caractères accentués en entités HTML
    $str = htmlentities($str, ENT_NOQUOTES, $encoding);

    // remplacer les entités HTML pour avoir juste le premier caractères non accentués
    // Exemple : "&ecute;" => "e", "&Ecute;" => "E", "à" => "a" ...
    $str = preg_replace('#&([A-za-z])(?:acute|grave|cedil|circ|orn|ring|slash|th|tilde|uml);#', '\1', $str);

    // Remplacer les ligatures tel que : , Æ ...
    // Exemple "œ" => "oe"
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
    // Supprimer tout le reste
    $str = preg_replace('#&[^;]+;#', '', $str);
    return $str;
}

function mois($n)
{
    switch ($n) {
        case 1:
            return "Janvier";
            break;
        case 2:
            return "Février";
            break;
        case 3:
            return "Mars";
            break;
        case 4:
            return "Avril";
            break;
        case 5:
            return "Mai";
            break;
        case 6:
            return "Juin";
            break;
        case 7:
            return "Juillet";
            break;
        case 8:
            return "Août";
            break;
        case 9:
            return "Septembre";
            break;
        case 10:
            return "Octobre";
            break;
        case 11:
            return "Novembre";
            break;
        case 12:
            return "Décembre";
            break;
    }
}

function display_duration($date, $langue = 'fr')
{
    $now = new DateTime();
    $date_c = new DateTime($date);
    $diff = $date_c->diff($now);

    switch ($langue) {
        case 'en':
            if ($diff->y > 0) {
                return $diff->y . " year" . ($diff->y > 1 ? "s" : "") . " ago";
            } elseif ($diff->m > 0) {
                return $diff->m . " month" . ($diff->m > 1 ? "s" : "") . " ago";
            } elseif ($diff->d > 0) {
                return $diff->d . " day" . ($diff->d > 1 ? "s" : "") . " ago";
            } elseif ($diff->h > 0) {
                return $diff->h . " hour" . ($diff->h > 1 ? "s" : "") . " ago";
            } else {
                return $diff->i . " minute" . ($diff->i > 1 ? "s" : "") . " ago";
            }

        case 'es':
            if ($diff->y > 0) {
                return "Hace " . $diff->y . " año" . ($diff->y > 1 ? "s" : "");
            } elseif ($diff->m > 0) {
                return "Hace " . $diff->m . " mes" . ($diff->m > 1 ? "es" : "");
            } elseif ($diff->d > 0) {
                return "Hace " . $diff->d . " día" . ($diff->d > 1 ? "s" : "");
            } elseif ($diff->h > 0) {
                return "Hace " . $diff->h . " hora" . ($diff->h > 1 ? "s" : "");
            } else {
                return "Hace " . $diff->i . " minuto" . ($diff->i > 1 ? "s" : "");
            }

        case 'pt':
            if ($diff->y > 0) {
                return "Há " . $diff->y . " ano" . ($diff->y > 1 ? "s" : "");
            } elseif ($diff->m > 0) {
                return "Há " . $diff->m . " mês" . ($diff->m > 1 ? "es" : "");
            } elseif ($diff->d > 0) {
                return "Há " . $diff->d . " dia" . ($diff->d > 1 ? "s" : "");
            } elseif ($diff->h > 0) {
                return "Há " . $diff->h . " hora" . ($diff->h > 1 ? "s" : "");
            } else {
                return "Há " . $diff->i . " minuto" . ($diff->i > 1 ? "s" : "");
            }

        case 'fr':
        default:
            if ($diff->y > 0) {
                return "Il y a " . $diff->y . " an" . ($diff->y > 1 ? "s" : "");
            } elseif ($diff->m > 0) {
                return "Il y a " . $diff->m . " mois";
            } elseif ($diff->d > 0) {
                return "Il y a " . $diff->d . " jour" . ($diff->d > 1 ? "s" : "");
            } elseif ($diff->h > 0) {
                return "Il y a " . $diff->h . " heure" . ($diff->h > 1 ? "s" : "");
            } else {
                return "Il y a " . $diff->i . " minute" . ($diff->i > 1 ? "s" : "");
            }
    }
}

function getLocalizedDate($dateString, $locale = 'en')
{
    $months = [
        'en' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        'fr' => ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
        'es' => ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'],
        'pt' => ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro']
    ];
    // Table des heures pour chaque langue (heure en format 12 heures avec AM/PM pour l'anglais)
    $timeFormats = [
        'en' => 'g:i A',
        'fr' => 'H:i',
        'es' => 'H:i',
        'pt' => 'H:i'
    ];

    // Table des séparateurs pour chaque langue
    $separators = [
        'en' => 'at',
        'fr' => 'à',
        'es' => 'a las',
        'pt' => 'às'
    ];

    // Création de l'objet DateTime
    $date = new DateTime($dateString);
    $monthIndex = $date->format('n') - 1; // Les mois commencent à 0 dans les tableaux
    $monthName = $months[$locale][$monthIndex];
    $timeFormat = $timeFormats[$locale];
    $separator = $separators[$locale];

    // Formatage de la date et de l'heure
    $formattedDate = $date->format('d') . ' ' . $monthName . ' ' . $date->format('Y');
    $formattedTime = $date->format($timeFormat);

    return $formattedDate . ' ' . $separator . ' ' . $formattedTime;
}

function formatUserId($userId)
{
    return sprintf('USR-%06d', $userId);
}
function formatOrderId($orderId)
{
    return 'ORD-' . date('Ym') . '-' . sprintf('%05d', $orderId);
}

function formatCustomerId($customerId)
{
    return sprintf('CUS-%06d', $customerId);
}

function formatInvoiceId($invoiceId, $date)
{
    return sprintf('INV-%08d', $invoiceId . date('d', strtotime($date)) . date('i', strtotime($date)));
}
