# Votre premier projet Laravel

Nous voulons que ce soit aussi simple que possible de démarrer avec Laravel. Il existe une variété d'options pour développer et exécuter un projet Laravel sur votre propre ordinateur. Bien que vous souhaitiez peut-être explorer ces options ultérieurement, Laravel fournit Sail , une solution intégrée pour exécuter votre projet Laravel à l'aide de Docker .

**Docker** est un outil permettant d'exécuter des applications et des services dans de petits "conteneurs" légers qui n'interfèrent pas avec le logiciel ou la configuration installé sur votre ordinateur local. Cela signifie que vous n'avez pas à vous soucier de la configuration ou de la mise en place d'outils de développement complexes tels que des serveurs Web et des bases de données sur votre ordinateur personnel. Pour commencer, il vous suffit d'installer Docker Desktop .

**Laravel Sail** est une interface de ligne de commande légère pour interagir avec la configuration Docker par défaut de Laravel. Sail fournit un excellent point de départ pour créer une application Laravel à l'aide de PHP, MySQL et Redis sans avoir besoin d'une expérience préalable de Docker.

>Déjà un expert Docker? Ne t'inquiète pas! Tout sur Sail peut être personnalisé à l'aide du docker-compose.ymlfichier inclus avec Laravel.


## Premiers pas sous Linux

Si vous développez sous Linux et que Docker est déjà installé, vous pouvez utiliser une simple commande de terminal pour créer un nouveau projet Laravel. Par exemple, pour créer une nouvelle application Laravel dans un répertoire nommé "example-app", vous pouvez exécuter la commande suivante dans votre terminal:

`curl -s https://laravel.build/example-app | bash`

Bien sûr, vous pouvez remplacer "example-app" dans cette URL par tout ce que vous voulez. Le répertoire de l'application Laravel sera créé dans le répertoire à partir duquel vous exécutez la commande.

Une fois le projet créé, vous pouvez accéder au répertoire de l'application et démarrer Laravel Sail. Laravel Sail fournit une interface de ligne de commande simple pour interagir avec la configuration Docker par défaut de Laravel:

`cd example-app`

`./vendor/bin/sail up`

La première fois que vous exécutez la **upcommande** Sail, les conteneurs d'application de Sail seront construits sur votre machine. Cela pourrait prendre plusieurs minutes. Ne vous inquiétez pas, les tentatives ultérieures de démarrage de Sail seront beaucoup plus rapides.

Une fois les conteneurs Docker de l'application démarrés, vous pouvez accéder à l'application dans votre navigateur Web à l' adresse: http://localhost .

## Installation de NodeJs et Npm

### Option 2 - Installer Node.js avec Apt en utilisant un PPA NodeSource

Pour installer une version différente de Node.js, vous pouvez utiliser une PPA (archive personnelle de paquets) maintenue par NodeSource. Ces PPA ont plus de versions de Node.js disponibles que les dépôts officiels Ubuntu. Les Node.js v10, v12, v13 et v14 sont disponibles au moment de la rédaction.

Tout d'abord, nous allons installer le PPA afin d'avoir accès à ses paquets. Dans votre répertoire d'origine, utilisez curl pour récupérer le script d'installation de votre version préférée, en veillant à remplacer 14.x par la chaîne de caractères de votre version préférée (si elle est différente).

`cd ~`
`curl -sL https://deb.nodesource.com/setup_14.x -o nodesource_setup.sh`
 
Reportez-vous à la documentation NodeSource pour plus d'informations sur les versions disponibles.

Inspectez le contenu du script téléchargé avec nano (ou votre éditeur de texte préféré) :

`nano nodesource_setup.sh`
 
Lorsque vous êtes convaincu que le script est sûr, quittez votre éditeur, puis exécutez le script avec sudo :

`sudo bash nodesource_setup.sh`
 
Le PPA sera ajouté à votre configuration et le cache local de votre package sera automatiquement mis à jour. Vous pouvez maintenant installer le paquet Node.js de la même manière que vous l'avez fait dans la section précédente :

`sudo apt-get install -y nodejs`
 
Vérifiez que vous avez installé la nouvelle version en exécutant node avec le drapeau de version -v :

`node -v`
 
Output
v14.2.0
Le paquet NodeSource nodejs contient à la fois le binaire du node et npm, vous n'avez donc pas besoin d'installer npm séparément.

À ce stade, vous avez installé avec succès Node.js et npm en utilisant apt et le PPA NodeSource. La section suivante montrera comment utiliser le gestionnaire de versions de Node pour installer et gérer plusieurs versions de Node.js.



[^1]:StarlyBelovedMulebo