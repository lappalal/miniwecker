# Miniwecker
##### a new start for an old organisation

This is a new webpage for the Kath. Jugend Gauting - KJG in short. KJG is a youth organisation in my town under the catholic church. They take children and teens between the ages of 9 and 16 under their wings and hold weekly get-togethers with them. It mostly is about the fun in it, yet I've seen more than one case were children with unfavourable backgrounds have found a connection and a place to go within the organisation.

KJG has had a Website ([http://miniwecker.de](miniwecker.de)) as early as 2006, yet since then it never has been remodelled or updated in any way that was not a new blogpost. The site was dying of old age. A bunch of technologies used, where simply no longer supported, or misused in the development process, which resulted in a buggy legacy software. Photo uploading is not possible since last year, updates to the blog of the site had to be done through a direct database query, since the editor broke. So I took it upon myself to create a new design and build them a website that will hold it's own for a while.

To not grow insane doing repetitive tasks I used the \_s ([http://underscores.me](underscores.me)) base theme as a starting point and built upon that.

You can find a functioning demo at [http://kjg1.delphinus.uberspace.de](kjg1.delphinus.uberspace.de)

## Prerequisites
This repository is just a wordpress _theme_. This means to use it, you will have to have a full wordpress installation running.

All of the SCSS Codes needs to be compiled beforehand, although this repository comes with a style.css ready to use.

## Development Setup
/sass/style.scss takes all the .scss modules and compiles them down to /style.css

/style.css contains every rule. Do not make changes directly to this file.

If you are on a mac, and have the software codekit, you can use the provided config file to instantly compile the needed files.

## End User Setup
To use this theme you just need to download it and move th unzipped folder into the themes folder of your wordpress installation.

For proper color usage in the main menu, please follow these steps:
1. Create a new fixed menu in the wordpress admin panel
2. We support the following headings:
  * Startseite
  * Die KJG
  * Gruppen
  * Aktionen
  * Fotos
  * Zeltlager
  * Kontakt
3. On top of the page click "customize view"
4. check the box to display CSS-classes
5. give the headings the respective class:
  * nav-homepage
  * nav-kjg
  * nav-gruppen
  * nav-aktionen
  * nav-fotos
  * nav-zeltlager
  * nav-kontakt
6. Enjoy your proper hover effects.

<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">Miniwecker</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://miniwecker.de" property="cc:attributionName" rel="cc:attributionURL">Katholische Jugend Gauting</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://sautner.cc" rel="dct:source">https://sautner.cc</a>.
