<?php

namespace Database\Seeders;

use App\Models\Questionnaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionnaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $questions = [
            [ "q" => "Que signifie PHP ?", "options" => ["Personal Home Page", "PHP: Hypertext Preprocessor", "Private HTML Pages", "Programming Hypertext Protocol"], "correct" => 1 ],
            [ "q" => "Quelle balise utilise-t-on pour démarrer du code PHP ?", "options" => ["<php>", "<?php", "<script>", "<%php%>"], "correct" => 1 ],
            [ "q" => "Comment affiche-t-on du texte en PHP ?", "options" => ["console.log()", "echo", "print_r()", "display()"], "correct" => 1 ],
            [ "q" => "Quel symbole utilise-t-on pour déclarer une variable en PHP ?", "options" => ["@", "#", "$", "&"], "correct" => 2 ],
            [ "q" => "Comment créer un commentaire sur une seule ligne en PHP ?", "options" => ["/* commentaire */", "<!-- commentaire -->", "// commentaire", "# commentaire"], "correct" => 2 ],
            [ "q" => "Quelle fonction permet de connaître le type d'une variable ?", "options" => ["typeof()", "gettype()", "var_type()", "type()"], "correct" => 1 ],
            [ "q" => "Comment concatène-t-on deux chaînes en PHP ?", "options" => ["Avec +", "Avec .", "Avec &", "Avec ,"], "correct" => 1 ],
            [ "q" => "Quelle superglobale contient les données d'un formulaire POST ?", "options" => ["\$_GET", "\$_POST", "\$_REQUEST", "\$_FORM"], "correct" => 1 ],
            [ "q" => "Comment démarre-t-on une session en PHP ?", "options" => ["start_session()", "session_start()", "begin_session()", "init_session()"], "correct" => 1 ]
            // [ "q" => "Quelle fonction permet de compter les éléments d'un tableau ?", "options" => ["length()", "size()", "count()", "sizeof()"], "correct" => 2 ],
            // [ "q" => "Comment inclure un fichier PHP dans un autre ?", "options" => ["import 'fichier.php'", "include 'fichier.php'", "require 'fichier.php'", "Les deux b et c"], "correct" => 3 ],
            // [ "q" => "Quel opérateur teste l'égalité stricte (valeur et type) ?", "options" => ["=", "==", "===", "===="], "correct" => 2 ],
            // [ "q" => "Comment créer un tableau associatif en PHP ?", "options" => ["array()", "[]", "{}", "Les deux a et b"], "correct" => 3 ],
            // [ "q" => "Quelle fonction convertit une chaîne en minuscules ?", "options" => ["toLower()", "strtolower()", "lowercase()", "lower()"], "correct" => 1 ],
            // [ "q" => "Comment vérifie-t-on si une variable est vide ?", "options" => ["isEmpty()", "empty()", "is_empty()", "null()"], "correct" => 1 ],
            // [ "q" => "Quelle fonction renvoie la longueur d'une chaîne ?", "options" => ["length()", "strlen()", "size()", "count()"], "correct" => 1 ],
            // [ "q" => "Comment redirige-t-on vers une autre page en PHP ?", "options" => ["redirect()", "header('Location: page.php')", "goto()", "navigate()"], "correct" => 1 ],
            // [ "q" => "Quelle est la portée d'une variable déclarée dans une fonction ?", "options" => ["Globale", "Locale", "Statique", "Publique"], "correct" => 1 ],
            // [ "q" => "Comment déclare-t-on une constante en PHP ?", "options" => ["const NOM = valeur", "define('NOM', valeur)", "constant NOM = valeur", "Les deux a et b"], "correct" => 3 ],
            // [ "q" => "Quelle fonction arrête l'exécution d'un script ?", "options" => ["stop()", "exit()", "halt()", "end()"], "correct" => 1 ],
            // [ "q" => "Comment obtient-on la date actuelle en PHP ?", "options" => ["date()", "getDate()", "now()", "current_date()"], "correct" => 0 ],
            // [ "q" => "Quel est le résultat de 5 + '10' en PHP ?", "options" => ["15", "510", "Erreur", "null"], "correct" => 0 ],
            // [ "q" => "Comment supprime-t-on une variable de session ?", "options" => ["delete(\$_SESSION['var'])", "unset(\$_SESSION['var'])", "remove(\$_SESSION['var'])", "clear(\$_SESSION['var'])"], "correct" => 1 ],
            // [ "q" => "Quelle fonction permet de rechercher dans un tableau ?", "options" => ["find()", "search()", "in_array()", "array_find()"], "correct" => 2 ],
            // [ "q" => "Comment crée-t-on une classe en PHP ?", "options" => ["class NomClasse {}", "new class NomClasse", "define class NomClasse", "create class NomClasse"], "correct" => 0 ],
            // [ "q" => "Quelle visibilité empêche l'accès en dehors de la classe ?", "options" => ["public", "protected", "private", "internal"], "correct" => 2 ],
            // [ "q" => "Comment appelle-t-on une méthode statique ?", "options" => ["Classe->methode()", "Classe::methode()", "Classe.methode()", "Classe:methode()"], "correct" => 1 ],
            // [ "q" => "Quelle fonction ouvre un fichier en PHP ?", "options" => ["open()", "fopen()", "file_open()", "readfile()"], "correct" => 1 ],
            // [ "q" => "Comment lit-on une ligne d'un fichier ?", "options" => ["readline()", "fgets()", "read_line()", "getline()"], "correct" => 1 ],
            // [ "q" => "Quelle fonction vérifie si un fichier existe ?", "options" => ["exists()", "file_exists()", "is_file()", "check_file()"], "correct" => 1 ],
            // [ "q" => "Comment encode-t-on des données en JSON ?", "options" => ["json_encode()", "to_json()", "encode_json()", "jsonify()"], "correct" => 0 ],
            // [ "q" => "Quelle fonction décode du JSON ?", "options" => ["json_decode()", "from_json()", "parse_json()", "decode_json()"], "correct" => 0 ],
            // [ "q" => "Comment se connecte-t-on à MySQL avec PDO ?", "options" => ["new PDO()", "mysql_connect()", "pdo_connect()", "connect_db()"], "correct" => 0 ],
            // [ "q" => "Quel est l'opérateur de concaténation d'affectation ?", "options" => ["+", ".=", "+=", "=."], "correct" => 1 ],
            // [ "q" => "Comment vérifie-t-on le type d'une variable avec is_* ?", "options" => ["is_type()", "is_int(), is_string()...", "check_type()", "typeof()"], "correct" => 1 ],
            // [ "q" => "Quelle fonction trie un tableau ?", "options" => ["order()", "sort()", "arrange()", "organize()"], "correct" => 1 ],
            // [ "q" => "Comment inverse-t-on un tableau ?", "options" => ["reverse()", "array_reverse()", "invert()", "flip()"], "correct" => 1 ],
            // [ "q" => "Quelle fonction fusionne deux tableaux ?", "options" => ["merge()", "array_merge()", "combine()", "join()"], "correct" => 1 ],
            // [ "q" => "Comment obtient-on les clés d'un tableau associatif ?", "options" => ["keys()", "array_keys()", "get_keys()", "table_keys()"], "correct" => 1 ],
            // [ "q" => "Quelle est la différence entre include et require ?", "options" => ["Aucune", "require génère une erreur fatale si échec", "include est plus rapide", "require est obsolète"], "correct" => 1 ]
        ];


        foreach ($questions as $q) {
            Questionnaire::create([
                'code' => Questionnaire::generateUniqueCode(), 
                'question' => $q['q'],
                'option1' => $q['options'][0],
                'option2' => $q['options'][1],
                'option3' => $q['options'][2],
                'option4' => $q['options'][3],
                'correct' => $q['correct']
            ]);
        }
    }
}
