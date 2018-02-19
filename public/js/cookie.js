// https://blog.eleven-labs.com/fr/google-analytics-et-le-bandeau-cookie-cnil/

const cookieBanner = document.getElementById('cookie-banner');
const cookieButton = document.getElementById('cookie-button');
const GA_PROPERTY = 'UA-XXXXX-Y';
const GA_COOKIE_NAMES = ['__utma', '__utmb', '__utmc', '__utmz', '_ga', '_gat'];

cookieBanner.classList.add('active');
cookieButton.onclick = function() {
    cookieButton.classList.add('active');
    cookieBanner.classList.toggle('active');
};

// processCookieConsent();

function processCookieConsent() {
    // 1. On récupère l'éventuel cookie indiquant le choix passé de l'utilisateur
    const consentCookie = Cookies.getJSON('hasConsent');
    // 2. On récupère la valeur "doNotTrack" du navigateur
    const doNotTrack = navigator.doNotTrack || navigator.msDoNotTrack;

    // 3. Si le cookie existe et qu'il vaut explicitement "false" ou que le "doNotTrack" est défini à "OUI"
    //    l'utilisateur s'oppose à l'utilisation des cookies. On exécute une fonction spécifique pour ce cas.
    if (doNotTrack === 'yes' || doNotTrack === '1' || consentCookie === false) {
        reject();
        return;
    }

    // 4. Si le cookie existe et qu'il vaut explicitement "true", on démarre juste Google Analytics
    if (consentCookie === true) {
        startGoogleAnalytics();
        return;
    }

    // 5. Si le cookie n'existe pas et que le "doNotTrack" est défini à "NON", on crée le cookie "hasConsent" avec pour
    //    valeur "true" pour une durée de 13 mois (la durée maximum autorisée) puis on démarre Google Analytics
    if (doNotTrack === 'no' || doNotTrack === '0') {
        Cookies.set('hasConsent', true, { expires: 395 });
        startGoogleAnalytics();
        return;
    }

    // 6. Si le cookie n'existe pas et que le "doNotTrack" n'est pas défini, alors on affiche le bandeau et on crée les listeners
    cookieBanner.classList.add('active');
    cookieButton.addEventListener('click', cookieButton, false);
}

function startGoogleAnalytics() {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'index.blade.php');
}

function reject() {
    // création du cookie spécifique empêchant Google Analytics de démarrer
    Cookies.set('ga-disable-${GA_PROPERTY}', true, { expires: 395 });
    // insertion de cette valeur dans l'objet window
    window['ga-disable-${GA_PROPERTY}'] = true;

    // création du cookie précisant le choix utilisateur
    Cookies.set('hasConsent', false, { expires: 395 });

    // suppression de tous les cookies précédemment créés par Google Analytics
    GA_COOKIE_NAMES.forEach(cookieName, Cookies.remove(cookieName));
}

