Chaque section doit avoir un commentaire propre en français, explicatif et avec PHPDoc si en PHP, sinon en commentaire dans le langage écrit.

Les fonctions que je te demanderais devront avoir cette structure :

Pour les modèles : 

1. PHPDoc - commentaire ;
2. Nom de fonction compréhensible en anglais ;
3. try / catch avec un retour que le controleur va récupérer ;
4. Exception: message clair propre et explicatif aussi ;

Pour les controleurs : 

1. PHPDoc - commentaire ;
2. Nom de fonction compréhensible en anglais ;
3. try / catch avec une réponse en JSON toujours pour AJAX ;
4. Les message seront dans la réponse JSON si erreur un message d'erreur aussi ;

Pour ce qui est de JavaScript tu va toujours utiliser la syntaxe moderne, en utilisant async await fetch ... il faut utiliser jQuery AJAX.

