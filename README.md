om mijn To-do uit te voeren doe het volgende 
1.  pull mijn git repo
2.  voer de volgende comando's uit in de terminal
-   npm install
-   composer install
3.  verander de naam van de .env.example naar .env
4.  voer de volgende comando's uit in de terminal
-   php artisan key:generates
-   php artisan migrate
-   php artisan serve
5.  open een 2e terminal venster en draai daar het volgende comando
-   npm run dev
6.  ga naat 127.0.0.1:8000 en bekijk en gebruik de pagina

Verslag Van opdracht:

Aller eerst wat een leuke opdracht om uit te voeren! lekker terug naar de basis met wat nieuwe technieken!
Omdat ik nog niet eerder met Livewire gewerkt had was het erg interessant om daar nu ook kennis van op te kunnen doen,
Het uitzoeken hoe ik de data in de database kon pushen en er weer uit kon halen was hierin erg leerzaam! Qua code is het niet heel anders zeker aanzienlijk korter in het uitschrijven. Hierin heb ik uiteindelijk besloten om 2 lose Livewire componenten te gaan maken 1 voor het posten in de database en 1 voor het ophalen en updaten van de data . 
Dit had in 1 component gekund maar aangezien ik met Alpine 2 “tabbladen” wilde maken leek mij dit een mooiere oplossing.

Dan komen we bij Alpine.js.
Hierbij had ik in eerste instantie een hidden popup gemaakt voor het aanmaken van een nieuwe taak die je kon oproepen door op de plus knop te klikken in de sidebar.
Dit was opzich een prima oplossing om niet constant het form in beeld te hebben. Echter vond ik het er niet zo strak uit zien.
Uiteindelijk heb ik besloten om met tabjes te gaan werken. Door op het plusje te klikken verdwijnt nu de tabel met de taken en door op het huisje te klikken verdwijnt het form weer. Dit leek mij een prachtige oplossing.
Hierbij was het erg interessant om met de x-data en x-show te werken om dit voor elkaar te krijgen.

Even later kwam ik er achter dat mijn pagina er niet geweldig uitzag op 1080p wat toch wel erg belangrijk is aangezien de meeste schermen 1080p zijn. Hier heb ik nog even wat dingen in de classes met tailwind gewijzigd om het er aanzienlijk beter uit te laten zien.

Al met al een hele leuke leerzame opdracht! 