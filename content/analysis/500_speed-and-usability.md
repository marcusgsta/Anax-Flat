Laddningstid och användbarhet
--------------------

Webbsidorna jag har valt är en sida om litteratur, en dagstidning, en sida om webbutveckling och en myndighets webbsida. Alltså sidor som kommer ifrån ganska skilda kategorier, det privata och det offentliga, media och en sida från webbranschen själv.

Jag har använt mig av Google Page Speeds betyg för hastighet och användarupplevelse. Jag har också använt Firefox Developer Tools nätverksflik för att mäta laddningstid och användbarhet.

Den insamlade rådatan finns här:
[Google Kalkylark](https://docs.google.com/spreadsheets/d/1_HP5s0Am8GiqMmO2CQZl95CG--gxCrRz0W8quiwz2YA/edit?usp=sharing)

####[http://debutant.nu](http://debutant.nu) – en sida om litteratur####


[FIGURE src="image/screenshot-debutant.nu.png?w=690"]
<!-- &save-as=jpg&q=80 -->

<table>
<tr>
<td></td>
<th>Mätning 1</th>
<th>Mätning 2</th>
<th>Mätning 3</th>
<th>Snitt</th>
</tr>

<tr><th>Sidans laddningstid (sekunder)</th><td>2.37</td><td>2.86</td><td>2.64</td><td>2.62</td></tr>

<tr><th>Sidans totala storlek</th><td>156.26 KB</td></tr>

<tr><th>Antalet resurser som laddas</th><td>11</td></tr>

<tr><td></td><th>Desktop</th><th colspan="2">Mobil</th><th></th></tr>
<tr>
<th>Google Page Speed betyg</th><td>92/100</td><td>Användarupplevelse: 65/100</td><td>Hastighet: 85/100</td></tr>
</table>

Detta är en sida jag själv har byggt, för fyra år sedan, och som jag själv har jobbat med att optimera. Jag valde den för jag vet att det är några saker som går att förbättra, samtidigt som andra saker redan fungerar på ett bra sätt. Alltid spännande att se vad ett sånt här verktyg säger när det gäller sidor man själv har byggt.

Den mobila sidan fick 85/100 när det gäller hastighet, men bara 65/100
på användarupplevelse. Det är kul att sidan fortfarande är snabb, men jag kan också hålla med om att användarupplevelsen blir lidande när sidan visas på mobil. Det har främst att göra med en stor bild som inte är responsiv och som täcker nästan hela sidan. Om bilden görs responsiv, eller tas bort blir också de två kolumnerna till höger och vänster synliga. En annan sak, som jag inte visste, är att texten inte är responsiv, vilket gör att den skalas ner till ynka 5 pixels och blir svårläst för de flesta. Sidan får 92/100 för desktop-versionen, vilket är bra.


####[http://sydsvenskan.se](http://sydsvenskan.se) – en dagstidning####

[FIGURE src="image/screenshot-sydsvenskan.png?w=690"]


<table>
<tr>
<td></td>
<th>Mätning 1</th>
<th>Mätning 2</th>
<th>Mätning 3</th>
<th>Snitt</th>
</tr>

<tr><th>Sidans laddningstid (sekunder)</th><td>39.42</td><td>30.72</td><td>28.08</td><td>32.74</td></tr>

<tr><th>Sidans totala storlek</th><td>2005.50 KB</td></tr>

<tr><th>Antalet resurser som laddas</th><td>69</td></tr>

<tr><td></td><th>Desktop</th><th colspan="2">Mobil</th><th></th></tr>
<tr>
<th>Google Page Speed betyg</th><td>74/100</td><td>Användarupplevelse: 98/100</td><td>Hastighet: 65/100</td></tr>
</table>

Denna tidning använder sig av en enda lång framsida med mängder av utdrag och länkar till artiklar. Här finns också en del annonser och många bilder. Detta gör sidan långsam att ladda in. Vissa av annonserna växlar så att sidan förändras, och aldrig blir helt "färdigt" nerladdad, vilket innebär att man måste uppskatta sidans totala storlek. Den förändras ju mer man väntar.

Google Page Speed menar att man bör utnyttja cachelagring i webbläsaren, optimera bilder och ta bort JavaScript- och CSS-kod som "blockerar renderingen från innehåll ovanför mitten". För att lösa det sistnämnda kan man lägga länkar till externa JavaScript-filer i slutet av HTML-dokumentet.

Bilder går att reducera med 114 KB, vilket inte är så mycket jämför med sidans storlek på 2 MB. Anledningen till att sidan är långsam är framför allt för att det finns så mycket material och också bilder på en och samma sida. Detta känns igen från flera dagstidningar på nätet i Sverige och även internationellt.




####[https://developer.mozilla.org](https://developer.mozilla.org) - en företag som sysslar med webbutveckling####

<!-- [FIGURE src="image/screenshot-mozilla.png?width=600"] -->
[FIGURE src="image/screenshot-mozilla.png?w=690"]

<!-- ?src=kodim23.png&w=300&save-as=jpg -->

<table>
<tr>
<td></td>
<th>Mätning 1</th>
<th>Mätning 2</th>
<th>Mätning 3</th>
<th>Snitt</th>
</tr>

<tr><th>Sidans laddningstid (sekunder)</th><td>3.75</td><td>3.18</td><td>3.73</td><td>3.55</td></tr>

<tr><th>Sidans totala storlek</th><td>792.61 KB</td></tr>

<tr><th>Antalet resurser som laddas</th><td>22</td></tr>

<tr><td></td><th>Desktop</th><th colspan="2">Mobil</th><th></th></tr>
<tr>
<th>Google Page Speed betyg</th><td>89/100</td><td>Användarupplevelse: 99/100</td><td>Hastighet: 71/100</td></tr>
</table>

Mozillas utvecklarsida borde naturligtvis få höga betyg, och infriar åtminstone när det gäller användarupplevelse. Det som kan förbättras enligt Google Page Speed är hastighet för mobila enheter. De menar att man bör "ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten". Annat som kan korrigeras är optimering av bilder, att utnyttja cachelagring, och att förminska HTML. Jag noterar också att de största resurserna som laddas ner är javascript och fonter.


####[http://skatteverket.se](http://skatteverket.se) - en myndighet####
[FIGURE src="image/screenshot-skatteverket.png?w=690"]

<table>
<tr>
<td></td>
<th>Mätning 1</th>
<th>Mätning 2</th>
<th>Mätning 3</th>
<th>Snitt</th>
</tr>

<tr><th>Sidans laddningstid (sekunder)</th><td>10.97</td><td>9.13</td><td>9.20</td><td>9.77</td></tr>

<tr><th>Sidans totala storlek</th><td>3830.33 KB</td></tr>

<tr><th>Antalet resurser som laddas</th><td>69</td></tr>

<tr><td></td><th>Desktop</th><th colspan="2">Mobil</th><th></th></tr>
<tr>
<th>Google Page Speed betyg</th><td>70/100</td><td>Användarupplevelse: 95/100</td><td>Hastighet: 53/100</td></tr>
</table>

Jag tycker det är konstigt att Skatteverkets sida tar 10 sekunder att ladda trots att deras framsida inte innehåller så mycket. Den tyngsta resursen är ett JavaScript-plugin, på nästan 900 KB. Google Page Speed vill som vanligt att JavaScript- och CSS-kod ska flyttas på eftersom de blockerar renderingen av innehåll ovanför mitten. De nämner också 'utnyttja cachelagring i webbläsaren' som åtgärd, både för mobiler och desktops för att öka hastigheten.

Skatteverkets sida får annars bra betyg för användarupplevelse.

####Analys####

Google Page Speed påpekar om igen detta med JavaScript- och CSS-kod, något som jag inte har varit så medveten om. Om skatteverkets sida skriver de:

<blockquote>Det finns 15 skriptresurser och 12 CSS-resurser som blockerar renderingen av sidan. Det gör att renderingen tar längre tid.
    Det gick inte att rendera något av innehållet ovanför mitten på sidan utan att det blev nödvändigt att vänta medan de följande resurserna lästes in. Testa att skjuta upp inläsningen av resurserna som blockerar renderingen eller att läsa in dem asynkront, eller infoga de viktigaste delarna av resurserna direkt i HTML-koden.</blockquote>

När jag tittar på källkoden ser jag att man lagt in alla dessa skript innan något av innehållet i html-koden. Jag antar att man använder sig av någon typ av content management system, och kanske är det hos dessa CMS strukturer som felet borde åtgärdas.

En annan åtgärd som Google rekommenderar är att låta sidan ladda JavaScript asynkront, på följande sätt:

`<script async src="my.js">`

Även minimiering av filer, och optimering av bilder är något som kommer igen.

Jag tycker en webbplats som tar under 5 sekunder kan räknas som snabb. Längre tid än så tror jag användaren upplever det som långsamt. Tidningssidor är sällan snabba enligt min erfarenhet, men man väntar och har tålamod eftersom innehållet lockar.

####Rangordning####

1. Developer.mozilla.org
2. Sydsvenskan.se
3. Debutant.nu
4. Skatteverket.se

Mozilla rankas högst eftersom man klarar sig bra i testerna överlag, både på mobil och desktop, och användarvänlighet. Så borde det ju vara, eftersom man där är experter på området. Man kan fråga sig varför de inte får ett perfekt resultat. Är Google Page Speed ett bra generellt verktyg? Jag har inte prövat några andra verktyg, så det blir svårt att svara på. Klart är att Google ju har en slags särställning eftersom de är marknadsledande när det gäller sökmotorer, och att deras råd kommer ifrån deras kunskap och i enlighet med hur de utformar sin sökmotor. Samtidigt är ju de också ett företag som behöver tjäna pengar. Kan man lita på Googles egna verktyg? Den frågan lämnar jag till andra att svara på.

Är det typiskt att Skatteverket hamnar i botten av listan? Står myndigheterna för tröghet när det gäller att hålla sig uppdaterade med tekniken? Möjligen. Men de ska ha en eloge för att klara sig bättre när det gäller användarupplevelse.

Den snabbaste sidan är debutant.nu, men det är också sidan som har minst innehåll. Därför klarar sig nog Mozilla bäst när det gäller snabbast laddade sida. Som jag nämnde så tror jag man har mer tålamod när det gäller tidningar, men när sydsvenskan.se tar uppemot 30 sekunder att ladda så känns det inte helt lyckat. Tidningarna lever mycket på sina annonser, och dessa ska ha en del av skulden för utdragna laddningstider. Framtiden får utvisa om vi kan komma ifrån långsamma tidningssidor.

Jag var med på Hangout med Emil, Niklas, Jakob, Jimmie och Anna, där vi diskuterade detta kursmoment. Jag valde dock att göra egna analyser i efterhand.
