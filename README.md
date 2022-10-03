
# WordPress Starter Theme

Sviluppa il tuo prossimo tema WordPress con uno stack moderno!

Scrivi codice utilizzando Blade (il template engine di Laravel), rendi interattive le tue pagine utilizzando Alpine.js e stilizza il front-office alla grande con TailwindCSS.

Cosa potresti volere di più? 🤷🏻‍♂️
## Installazione

Scarica in locale il repository e carica i file nella directory "wp-content" della tua installazione WordPress.

**Importante:** prima di attivare il tema, scarica installa e attiva il plugin [Acorn](https://github.com/roots/acorn/releases/tag/v2.1.2) in base alla versione di PHP in uso sul tuo server.
Acorn è la componente che permette l'utilizzo di Blade, perciò in sua assenza, il tema non funzionerà.
## Requisiti

Per sviluppare il tuo tema avrai bisogno che le seguenti tecnologie siano installate e funzionanti nella tua macchina:

- PHP 7.4+
- Composer
- Node.js (meglio se in versione LTS)
## Come iniziare a viluppare

Dopo aver installato il tema, il workflow da seguire è il seguente:

1. Lanciare da teminale il comando ``composer install`` per installare le dipendenze di Composer
2. Lanciare il comando da teminale ``npm install`` oppure ``yarn`` per installare le dipendenze di Node.js
3. Avviare la compilazione degli assets con il comando ``npm run dev`` oppure ``yarn run dev``


A questo punto non ti resta che... scrivere codice!
Esplora la directory, modifica i file per creare il tuo personale layout e quando sei pronto, vai alla sezione "Deploy".


## Deploy

Okay, ci siamo, hai creato un tema fighissimo e adesso devi andare online.

Come fare?

Ecco come:

1. Compila gli assets lanciando il comando da teminale: ``npm run build`` oppure ``yarn run build``
2. Compatta la cartella del tuo tema e caricala sul server remoto, dentro la cartella "wp-themes"
3. Accedi al teminale del server remoto e lancia il comando ``composer install --no-dev``

Fatto! 🚀

**Nota bene:** quando crei lo zip del tuo tema per caricarlo sul server, devi escludere le due cartelle ``vendor`` e ``node_modules`` come farebbe un bravo web developer!
## Documentazione
Questo tema starter utilizza cinque principali tecnologie:
- [Sage](https://docs.roots.io/sage/10.x/structure/#introduction)
- [Acorn](https://docs.roots.io/acorn/2.x/installation/#installing-acorn-as-a-plugin)
- [TailwindCSS](https://tailwindcss.com/docs/configuration)
- [AlpineJS](https://alpinejs.dev/start-here)
- [Bud](https://bud.js.org/docs/)

Clicca sui rispettivi link per leggere la documentazione, in caso di dubbi.



## Disclaimer

Questo Starter Theme è completamente modellabile e personalizzabile, non ti sto servendo un tema già pronto con cui andare online ma un punto di partenza per sviluppare agevolmente le tue grafiche personalizzate.

Quando installerai e proverai il template noterai infatti che il CSS incluso è veramente poco, giusto quanto basta per non farti dire "E ora? Da dove comincio?!"

Infine, ho incluso anche un template Header di [TailwindBriks](https://tailwindbricks.com/), la libreria di compoenenti TailwindCSS che sto sviluppando e che rilascerò nei prossimi mesi.
