# Entwurf: Datenschutzerklärung (Stand September 2026)

Dieses Dokument ist eine Arbeitsgrundlage für Andreas Ostheimer, kein
veröffentlichungsfertiger Text. Es enthält die Ist-Stand-Messung der Website
https://www.schmolengruber.at (11 Seiten laut Sitemap), den Abgleich mit der
aktuell live stehenden Datenschutzerklärung, einen vollständig neu
formulierten Entwurf sowie offene Punkte, die vor Veröffentlichung geklärt
werden sollten.

Gemessen am 22.09.2026, zwischen ca. 21:10 und 21:45 Uhr (MESZ).

**Nachtrag, selber Tag:** Die vier zunächst offenen Punkte zu Cloudflare-AVV,
Data-Privacy-Framework-Status, ManageWP Worker und Imagify wurden zusätzlich anhand
offizieller Quellen recherchiert und belegt (siehe Abschnitt 1.3). Die Punkte
„AVV mit move1" und „Log-Speicherdauer bei move1" bleiben offen, da sie nur move1
selbst beantworten kann (siehe Abschnitt 6, Mailentwurf vorbereitet).

---

## 1. Messung und Abgleichstabelle

### 1.1 Methode

- Alle 11 URLs aus `https://www.schmolengruber.at/wp-sitemap-posts-page-1.xml`
  einzeln per `curl` abgerufen (Chrome-Desktop-User-Agent, `Accept-Language:
  de-AT`), Antwort-Header und HTML-Quelltext separat gespeichert.
- HTML-Quelltexte aller 11 Seiten mit einem kleinen Python-Skript auf
  `src=`, `srcset=`, `href=` und CSS-`url()` durchsucht, um externe Hosts zu
  finden; Links (nur `href`, erst bei Klick relevant) wurden getrennt von
  tatsächlich geladenen Ressourcen (`src`/`srcset`/CSS-`url()`) ausgewertet.
- Zusätzlich mit dem Browser-Werkzeug (echter Chromium, JavaScript aktiv)
  Startseite und Datenschutzerklärung geladen und das Netzwerkprotokoll
  sowie `document.cookie` geprüft.
- Nach Muster-Treffern (z. B. „hotjar“, „recaptcha“, „hubspot“) wurde jeweils
  der Fundort im Quelltext angesehen, um Fehlalarme durch Font-Awesome-
  Icon-Klassennamen (`fa-hotjar`, `fa-cloudflare`, `fa-hubspot`, `fa-mailchimp`
  usw., die im gebündelten Icon-Font des Theme enthalten sind, aber keine
  aktive Einbindung bedeuten) auszuschließen.
- Impressum-Daten direkt von `https://www.schmolengruber.at/impressum/`
  gelesen, nicht aus dem Sitzungskontext übernommen.
- Die DSB-Kontaktdaten und Cloudflares Angabe zur Data-Privacy-Framework-
  Zertifizierung wurden am 22.09.2026 auf den jeweiligen offiziellen Seiten
  (`dsb.gv.at`, `cloudflare.com/privacypolicy`) nachgeschlagen, nicht aus dem
  Gedächtnis übernommen.

**Einschränkung:** Der genutzte Browser-Kontext (Claude-Browser-Fenster)
trug beim ersten Aufruf noch ein bestehendes, nicht von mir angelegtes
WordPress-Admin-Login für diese Seite (sichtbar an `wp-settings-2`,
`fusionredux_current_tab` in `document.cookie` sowie geladenen
Admin-Bar-Assets). Nicht-httpOnly-Cookies wurden gelöscht und die Seite neu
geladen; danach war `document.cookie` leer, aber die Admin-Bar wurde
weiterhin ausgeliefert – ein Hinweis, dass ein httpOnly-Auth-Cookie im
Browser-Profil bestehen blieb, das ich weder sehen noch aktiv löschen kann
und auch nicht sollte (kein WordPress-Login, keine Einwirkung auf den
Adminbereich laut Auftrag). Für die eigentliche Cookie-Frage (setzt der
Server bei einem anonymen Besuch Cookies?) ist das unerheblich: Die
`curl`-Messung lief komplett anonym und ohne jede Sitzung, auf allen 11
Seiten, und ist die belastbare Quelle für die Aussage „keine Cookies“.

### 1.2 Abgleichstabelle

| Dienst | tatsächlich eingesetzt (Beleg) | in der Erklärung erwähnt | Handlung |
|---|---|---|---|
| Cloudflare als Proxy/CDN | Ja – `server: cloudflare` + `cf-ray`-Header auf 11/11 Antworten | Nein – „Cloudflare“ kommt im Text nur 3× als CSS-Icon-Klasse `fa-cloudflare` vor, nie inhaltlich | Neuer Abschnitt: Cloudflare als Auftragsverarbeiter mit Drittlandbezug |
| Cloudflare Email Obfuscation | Ja – 67 Vorkommen von `/cdn-cgi/l/email-protection#…` und das Skript `/cdn-cgi/scripts/…/email-decode.min.js` auf 11/11 Seiten; dekodierte Adresse durchgängig `office@schmolengruber.at` | Nein | Neuer, kurzer Abschnitt |
| Google Analytics | Nein – kein `gtag(`, `googletagmanager`, `google-analytics.com` in 11 Seiten (statisch) und im Live-Netzwerkprotokoll (Start- und Datenschutzseite) | Ja, 1× als Beispiel in generischem Cookie-Text („z. B. Google Analytics“) | Entfernen |
| Google Maps eingebettet | Nein – kein `<iframe>`, kein Aufruf von `maps.google.com/embed`, kein Maps-JavaScript in 11 Seiten | Ja – zwei eigene Kapitel („Online-Kartendienste“, „Google Maps Datenschutzerklärung“) beschreiben eine Einbettung mit Datenübertragung beim Laden der Seite | Entfernen, ersetzen durch Link-Hinweis |
| Google Maps als Link | Ja – `goo.gl/maps/…`-Link („Anfahrt anzeigen“) auf 11/11 Seiten, 23 Vorkommen, zwei Kurzlink-Varianten | Indirekt, aber sachlich falsch als Einbettung dargestellt | Neu und korrekt beschreiben: Datenverarbeitung erst bei Klick |
| Google Fonts extern | Nein – 0 Anfragen an `fonts.googleapis.com`/`fonts.gstatic.com`, live im Netzwerkprotokoll geprüft | – | entfällt |
| Google Fonts lokal | Ja – alle Schriftdateien unter `/wp-content/uploads/fusion-gfonts/*.woff2` (574 Referenzen im Quelltext, live bestätigt) | Ja, Abschnitt „Google Fonts Lokal“ ist inhaltlich bereits korrekt (lokal, keine Google-Verbindung) | Stark kürzen, nicht entfernen |
| Bilder von www.adsimple.at | Ja – 6 `<img>`-Referenzen (3 Dateien × 2), aber ausschließlich auf der Datenschutzerklärung selbst (Generator-Grafiken), Lazy-Load über WP Rocket | Nicht als Datenverarbeitung thematisiert | Entfernen – neuer Entwurf bindet keine Drittanbieter-Bilder ein |
| Cookies (serverseitig) | Nein – 0 `Set-Cookie`-Header auf 11/11 Antworten (Chrome-UA, `curl`) | Ausführliches generisches Cookie-Kapitel (7 Unterkapitel: Arten, Zweck, Speicherdauer, Widerspruch, Cookie-Consent-Tool …) | Auf einen kurzen Ist-Stand-Absatz reduzieren |
| Kontaktformular | Nein – 0 `<form>`-Tags auf 11 Seiten | Ja, Abschnitt „Online Formulare“ vorhanden | Entfernen |
| reCAPTCHA | Nein – kein Skript von `google.com/recaptcha` geladen; Treffer für „recaptcha“ sind nur ungenutzte Theme-CSS-Klassen (`.grecaptcha-badge`) aus dem Formular-Modul des Theme | – | entfällt |
| iframes/sonstige Einbettungen | Nein – 0 `<iframe>` auf 11 Seiten | – | entfällt |
| Weitere Tracking-/Marketing-Skripte (GTM, Facebook-Pixel, LinkedIn-, Bing-, Hotjar-, Clarity-Tag) | Nein – keine der geprüften Signaturen gefunden; „hotjar“-, „hubspot“- und „mailchimp“-Treffer sind Font-Awesome-Icon-Klassen, keine echten Einbindungen | – | entfällt |
| Hosting move1 | Ja – move1 e.U., Ing. Mario Müllner, Bahnstraße 44, 2230 Gänserndorf; bereits so im Abschnitt „Webhosting-Provider Extern“ genannt | Ja, korrekt | Behalten, um Cloudflare-Vorschaltung ergänzen |
| Verantwortlicher | SCHMOLENGRUBER INSTALLATIONEN GmbH, Hauptstraße 18, 2241 Schönkirchen-Reyersdorf (Quelle: `/impressum/`) | Ja, im Wesentlichen korrekt, leicht abweichende Schreibweise | Schreibweise an Impressum angleichen, Firmenbuchnummer/UID ergänzen |
| Speicherdauer Server-Logfiles bei move1 | Nicht belegt | Ja, mit Pauschalwert „in der Regel 2 Wochen“ – das ist ein generischer AdSimple-Platzhalter, kein für move1 verifizierter Wert | Als offene Frage markieren statt Platzhalter zu übernehmen |
| Cache (WP Rocket) | Ja – laut Admin-Angabe aktiv, zusätzlich bestätigt durch HTML-Kommentar „Performance optimized by WP Rocket“ auf 11/11 Seiten und Lazy-Load-Skript im Netzwerkprotokoll | Nein | Neuer, kurzer Abschnitt |
| Avada/Fusion Builder, ManageWP Worker, Imagify | Ja, laut Admin-Angabe im Einsatz; keine sichtbare Verarbeitung von Besucherdaten im Frontend gemessen | Nein | Kurz erwähnen; für ManageWP/Imagify offene Frage markieren |
| „Ostheimer SEO“-Plugin | Ja, laut Admin-Angabe im Einsatz, laut Plugin-Readme ohne Tracking/Cookies – deckt sich mit der Messung (keine zusätzlichen Skripte/Cookies gefunden) | Nein | Nicht separat nennen, da keine eigene Datenverarbeitung nachweisbar |
| Externe Verlinkungen (Webdesign-Credit „ostheimer.at“ im Footer, RIS/WKO-Links im Impressum) | Ja – reine Links, kein Ressourcen-Ladevorgang | Nein | Kurzer Sammelsatz zu externen Links |

Zur Einordnung der Textmenge: Die aktuelle Live-Fassung hat laut eigener
Zählung des Hauptinhalts ca. 8.118 Wörter (PM-Angabe „ca. 8.100“ bestätigt
sich damit).

### 1.3 Rechercheergebnisse zu vier offenen Punkten (Nachtrag 22.09.2026)

Vier der ursprünglich offenen Punkte wurden zusätzlich anhand offizieller
Primärquellen recherchiert (Anbieter-Originaldokumente bzw. das amtliche
DPF-Teilnehmerregister, keine Blogs oder Drittzusammenfassungen). Diese Quellenbelege
sind reine Analyse-/Recherchenotizen für Andreas und gehören **nicht** in den
öffentlichen Text der Datenschutzerklärung – dort fließt nur das Ergebnis ein.

**1. Cloudflare Customer DPA – automatisch Bestandteil der Nutzungsbedingungen?**

Ja, belegt. Die Cloudflare Self-Serve Subscription Agreement (gilt auch für
Free-/Self-Serve-Kunden) bindet das Data Processing Addendum in Abschnitt 6.1 „Data
Processing“ per Verweis ein:

> „Cloudflare will handle such Personal Data in compliance with Cloudflare's Data
> Processing Addendum […] which is hereby incorporated by reference into this
> Agreement.“
> — Cloudflare Self-Serve Subscription Agreement, Abschnitt 6.1 „Data Processing“,
> https://www.cloudflare.com/terms/, abgerufen 22.09.2026

Voraussetzung ist laut demselben Absatz nur, dass die verarbeiteten „Customer
Content“-Daten personenbezogene Daten von EU-Betroffenen bzw. CCPA-Daten enthalten –
das trifft hier zu (IP-Adressen der Website-Besucher laufen über Cloudflare). Ein
gesonderter Vertragsabschluss ist nicht nötig; das DPA selbst bestätigt dieselbe
Struktur („Cloudflare … and the counterparty … have entered into an Enterprise
Subscription Agreement, Self-Serve Subscription Agreement or other written or
electronic agreement“, https://www.cloudflare.com/cloudflare-customer-dpa/,
abgerufen 22.09.2026).

**2. EU-US Data Privacy Framework – ist Cloudflare, Inc. aktiv gelistet?**

Ja, belegt, mit einer Präzisierung. Die Volltextsuche im amtlichen Teilnehmerregister
(https://www.dataprivacyframework.gov/list, Suche „Cloudflare“) wurde über den
eingebauten Browser in einem eigenen, neuen Tab durchgeführt (nicht im Tab „seed“),
der Tab wurde danach geschlossen. Ergebnis, ein Treffer:

> „Cloudflare, Inc. — San Francisco, CA — EU-U.S. Data Privacy Framework: Active -
> Re-certification under Review; Swiss-U.S. Data Privacy Framework: Active -
> Re-certification under Review; UK Extension to the EU-U.S. Data Privacy Framework:
> Active - Re-certification under Review“
> — dataprivacyframework.gov/list (Teilnehmersuche „Cloudflare“), abgerufen
> 22.09.2026

Cloudflare ist also gelistet, aber aktuell nicht mit schlichtem Status „Active“,
sondern „Active – Re-certification under Review“ (laufende Rezertifizierung, Teilnahme
nicht erloschen). Der öffentliche Text sollte diesen Status korrekt wiedergeben statt
pauschal „zertifiziert“ zu behaupten.

**3. ManageWP Worker – welche Daten, auch von Website-Besuchern?**

Ja, belegt. ManageWP (eine GoDaddy-Marke) sichert laut eigener Produktbeschreibung
Dateien und Datenbanktabellen der verbundenen Website (einzelne Dateien/Ordner/Tabellen
lassen sich ausschließen; Backups liegen verschlüsselt bis zu 90 Tage auf Amazon S3,
Standort US oder EU wählbar; Quelle: managewp.com/features/backup/ und
managewp.com/guide/backup/, abgerufen 22.09.2026). Zur Besucherdaten-Frage:

> „Our Privacy policy does not technically cover your end-users or site visitors.“
> — managewp.com/blog/managewp-and-gdpr-compliance, Abschnitt „Data Processing
> Addendum (DPA)“, abgerufen 22.09.2026

Ergänzend: „ManageWP is a GoDaddy brand. GoDaddy's Global Privacy Notice and the
following related policies and procedures apply to ManageWP processing of Personal
Data“ (managewp.com/privacy-policy/, abgerufen 22.09.2026). ManageWP behandelt also
den Website-Betreiber als Kunden und sich selbst ausdrücklich nicht als Verarbeiter
von Besucher-/Endnutzerdaten. Rein technisch enthält ein Datenbank-Backup trotzdem
alles, was in der Datenbank steht; da schmolengruber.at laut Abschnitt 1.2 keine
Formulare, Cookies oder Nutzerkonten hat, stehen dort aktuell auch keine Besucherdaten,
die ManageWP sichern könnte.

**4. Imagify – welche Daten, Besucherdaten ja/nein?**

Teilweise belegt. Laut Imagify-FAQ werden bei der Optimierung ausschließlich die
Bilddateien selbst an Server von WP Media übertragen und dort nur kurz
zwischengespeichert:

> „The image optimization process is performed on our servers. Once done, Imagify
> returns the optimized image to your server.“
> „images sent via the API or WordPress plugin are stored for one hour on our
> server“
> „We do not edit images' title or any other information“
> — imagify.io/faq/, abgerufen 22.09.2026

Eine ausdrückliche Aussage von WP Media/Imagify selbst, dass grundsätzlich „keine
Besucherdaten“ verarbeitet werden, konnte ich auf einer offiziellen Seite nicht
wörtlich finden (die Privacy-Policy-Seite von Imagify ist an dieser Stelle
unspezifisch) – dieser Teil bleibt also nicht durch eine ausdrückliche
Anbieter-Aussage belegt. Da laut FAQ nur Bilddateien übertragen werden (keine
Formular- oder Trackingdaten) und diese Website laut Abschnitt 1.2 ohnehin keine
Besucherdaten erhebt, die in ein Bild einfließen könnten, ist die praktische
Schlussfolgerung „keine Besucherdaten“ für diese Website aber tragfähig.

---

## 2. Änderungsliste gegenüber der Live-Fassung

**Entfernte bzw. stark gekürzte Abschnitte/Themenblöcke (19):**

1. „Einleitung und Überblick“ (generischer Werbetext des Generators)
2. „Anwendungsbereich“ (nennt Onlineshops, Social-Media-Auftritte, Apps – nichts davon betrifft diese Seite)
3. „Rechtsgrundlagen“ als eigener DSGVO-Grundkurs (Inhalt in Fließtext der jeweiligen Abschnitte integriert)
4. „Sicherheit der Datenverarbeitung“ (generische Absichtserklärung ohne Bezug zu konkreten Maßnahmen)
5. „TLS-Verschlüsselung mit https“ als eigenes Kapitel (auf einen Satz gekürzt)
6. „Online Formulare“ (es gibt kein Kontaktformular)
7. Cookie-Kapitel mit 7 Unterkapiteln (Was sind Cookies, Arten, Zweck, Daten, Speicherdauer, Widerspruchsrecht, Rechtsgrundlage, inkl. Verweis auf ein nicht vorhandenes „Cookie-Consent-Tool“)
8. „Webhosting Einleitung“ mit 5 Unterkapiteln (generische Erklärung „Was ist Webhosting“)
9. „Webdesign Einleitung“ mit 6 Unterkapiteln (beschreibt generische „Webdesign-Tools“, ohne die tatsächlich eingesetzte Software zu benennen)
10. „Google Fonts Lokal“ mit Unterkapitel „Was sind Google Fonts“ (auf einen Absatz gekürzt, da inhaltlich schon korrekt)
11. „Online-Kartendienste Einleitung“ mit 6 Unterkapiteln
12. „Google Maps Datenschutzerklärung“ mit 6 Unterkapiteln (beschreibt eine nicht vorhandene Einbettung samt Koordinaten-/Suchbegriff-Übertragung beim Laden der Seite)
13. Glossar „Erklärung verwendeter Begriffe“ mit 6 Einträgen (Auftragsverarbeiter, Einwilligung, personenbezogene Daten, Profiling, Verantwortlicher, Verarbeitung)
14. „Schlusswort“
15. Die generatortypische Kennzeichnung „Fassung 20.08.2024-122528901“ und die CSS-Klasse `adsimple-122528901` (Copy-&-Paste-Artefakt des Generators; 229 Vorkommen im Quelltext)
16. Sechs eingebettete Illustrationen von `www.adsimple.at`
17. Die 6 `<img>`-Referenzen auf adsimple.at als solche (siehe 16, hier als Datenfluss gezählt)
18. Alle Verweise, die den generischen AdSimple-Fließtext wörtlich referenzieren (z. B. „Cookie-Consent-Tool“, „Speicherdauer in der Regel 2 Wochen“)
19. Die generische Auflistung „Betroffene/Zweck/Verarbeitete Daten/Speicherdauer/Rechtsgrundlagen“-Kurzfassungen mit Emoji-Symbolen vor jedem Themenblock

**Neu ergänzte Abschnitte (7):**

1. Cloudflare als Auftragsverarbeiter mit Drittlandbezug (USA), inkl. Beleg zur EU-US-Data-Privacy-Framework-Zertifizierung
2. Cloudflare Email Obfuscation (Spamschutz für die E-Mail-Adresse)
3. Caching/Performance mit WP Rocket
4. Korrigierter Google-Maps-Abschnitt (reiner Link, Datenverarbeitung erst bei Klick)
5. Kurzer Absatz zu weiterer eingesetzter Software (Avada/Fusion Builder, ManageWP Worker, Imagify)
6. Tabellarische Übersicht „Empfänger/Auftragsverarbeiter“
7. Vier ausdrücklich markierte offene Punkte (`[OFFEN: …]`) statt erfundener oder pauschal übernommener Werte

**Der Gesamtumfang sinkt dadurch von ca. 8.100 auf ca. 1.500–1.700 Wörter**
(siehe Entwurf unten).

---

## 3. Vollständiger Entwurf

> Eigenständig formuliert, nicht aus der AdSimple-Vorlage übernommen.
> Dient als Rohtext für die WordPress-Seite; Formatierung (Überschriften,
> Absätze) kann beim Einpflegen 1:1 übernommen werden.

### Datenschutzerklärung

Wir freuen uns über Ihr Interesse an der SCHMOLENGRUBER INSTALLATIONEN
GmbH. Der Schutz Ihrer personenbezogenen Daten ist uns wichtig. Diese
Erklärung informiert Sie, welche Daten beim Besuch unserer Website
verarbeitet werden, zu welchem Zweck und auf welcher Rechtsgrundlage.

#### Verantwortlicher

SCHMOLENGRUBER INSTALLATIONEN GmbH
Hauptstraße 18, 2241 Schönkirchen-Reyersdorf, Österreich
Telefon: +43 2282 61402
E-Mail: office@schmolengruber.at
Firmenbuchnummer FN 505743s (Landesgericht Korneuburg), UID-Nummer
ATU74319249. Weitere Angaben finden Sie in unserem
[Impressum](/impressum/).

#### Ihre Rechte

Ihnen stehen gegenüber uns als Verantwortlichem folgende Rechte zu, soweit
die gesetzlichen Voraussetzungen vorliegen: Auskunft über die zu Ihrer
Person gespeicherten Daten (Art. 15 DSGVO), Berichtigung unrichtiger Daten
(Art. 16 DSGVO), Löschung (Art. 17 DSGVO), Einschränkung der Verarbeitung
(Art. 18 DSGVO), Datenübertragbarkeit (Art. 20 DSGVO) sowie Widerspruch
gegen die Verarbeitung (Art. 21 DSGVO). Eine erteilte Einwilligung können
Sie jederzeit mit Wirkung für die Zukunft widerrufen (Art. 7 Abs. 3 DSGVO).
Wenden Sie sich dazu formlos an die oben genannten Kontaktdaten.

Wenn Sie der Ansicht sind, dass die Verarbeitung Ihrer Daten gegen die
DSGVO verstößt, können Sie sich bei der österreichischen
Datenschutzbehörde beschweren:

Österreichische Datenschutzbehörde
Barichgasse 40–42, 1030 Wien, Österreich
Telefon: +43 1 52 152-0
E-Mail: dsb@dsb.gv.at

#### Hosting und Server-Logfiles

Diese Website wird technisch betrieben von move1 e.U. (Ing. Mario
Müllner), Bahnstraße 44, 2230 Gänserndorf. Auch unsere E-Mail-Adressen
werden über den Mailserver von move1 (`mail.move1.at`) betrieben.

Beim Aufruf unserer Website verarbeitet der Server automatisch technische
Zugriffsdaten, die Ihr Browser übermittelt – etwa IP-Adresse, Datum und
Uhrzeit des Zugriffs, aufgerufene Seite, übertragene Datenmenge,
verweisende URL (Referrer), Browsertyp und -version, Betriebssystem sowie
Statuscode der Antwort. Diese Server-Logfiles dienen der technischen
Bereitstellung der Website, der Fehleranalyse und der IT-Sicherheit.
Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an
einem sicheren und stabilen Betrieb unserer Website).

`[OFFEN: Wie lange move1 diese Server-Logfiles konkret speichert, ist uns
aktuell nicht bekannt und sollte bei move1 nachgefragt werden.]`

#### Cloudflare (vorgeschalteter Schutz- und Auslieferungsdienst)

Seit dem 22. September 2026 läuft der Zugriff auf unsere Website
zusätzlich über Cloudflare, ein weltweites Netzwerk zum Schutz vor
Angriffen und zur schnelleren Auslieferung von Inhalten (Content Delivery
Network, CDN). Betreiber ist Cloudflare, Inc., 101 Townsend St, San
Francisco, CA 94107, USA. Cloudflare verarbeitet dabei technische Daten
wie Ihre IP-Adresse, die aufgerufene URL, Zeitpunkt des Zugriffs,
User-Agent und Referrer, um Angriffe (etwa DDoS) abzuwehren, Inhalte über
ein weltweites Servernetz auszuliefern und die Verbindung
zu verschlüsseln. Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO
(berechtigtes Interesse an Schutz vor Angriffen und an einer stabil
erreichbaren Website).

Da Cloudflare, Inc. seinen Sitz in den USA hat, ist eine Verarbeitung
außerhalb der EU/des EWR möglich (Drittlandübermittlung). Cloudflare, Inc. ist
im offiziellen Teilnehmerregister des EU-U.S. Data Privacy Framework als
Teilnehmer für das EU-U.S. Data Privacy Framework, das Swiss-U.S. Data Privacy
Framework und die UK-Erweiterung gelistet (Status dort: „Active –
Re-certification under Review“, also mit laufender, aber nicht erloschener
Zertifizierung). Hilfsweise verweist Cloudflare in seinen Vertragsunterlagen
zusätzlich auf EU-Standardvertragsklauseln.

Mit Cloudflare, Inc. besteht außerdem ein Auftragsverarbeitungsvertrag nach
Art. 28 DSGVO: Cloudflares Standard-Auftragsverarbeitungsvertrag (Data
Processing Addendum) ist laut Cloudflares eigenen Nutzungsbedingungen
automatisch Bestandteil des mit uns bestehenden Vertrags, sobald
personenbezogene Daten verarbeitet werden – ein gesonderter Abschluss ist
nicht erforderlich.

**E-Mail-Adressen-Schutz.** Um die auf dieser Website angezeigte
E-Mail-Adresse vor dem automatisierten Auslesen durch Spam-Bots zu
schützen, wird sie über eine Verschleierungstechnik von Cloudflare
ausgeliefert: Im Quelltext erscheint sie verschlüsselt, ein kleines Skript
wandelt sie im Browser wieder in einen anklickbaren `mailto`-Link um. Dabei
werden keine zusätzlichen personenbezogenen Daten verarbeitet oder
gespeichert; die Technik dient ausschließlich dem Spamschutz.

#### Caching

Zur Beschleunigung des Seitenaufbaus setzen wir das WordPress-Plugin
WP Rocket ein. Es speichert fertig aufgebaute Seiten zwischen und lädt
Bilder erst nach, sobald Sie zu ihnen scrollen. Bei unserer Messung am
22.09.2026 wurden dadurch keine zusätzlichen Cookies gesetzt.
Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an
kurzen Ladezeiten).

#### Cookies

Bei unserer Messung am 22.09.2026 – Abruf aller öffentlichen Seiten dieser
Website ohne bestehende Anmeldung – hat der Server in keinem Fall ein
Cookie gesetzt, und auch im Browser selbst wurden bei einem frischen
Aufruf keine Cookies abgelegt. Diese Website verwendet nach aktuellem Stand
also keine Cookies für Statistik, Marketing oder Personalisierung. Sollte
sich das künftig ändern, etwa durch neue Funktionen, passen wir diese
Erklärung entsprechend an.

#### Kontaktaufnahme

Sie erreichen uns telefonisch oder per E-Mail; ein Kontaktformular bieten
wir auf dieser Website nicht an. Wenn Sie uns kontaktieren, verarbeiten
wir die von Ihnen dabei mitgeteilten Daten (z. B. Name, Telefonnummer,
E-Mail-Adresse, Inhalt Ihrer Anfrage) ausschließlich, um Ihr Anliegen zu
bearbeiten und zu beantworten. Rechtsgrundlage ist Art. 6 Abs. 1 lit. b
DSGVO, wenn Ihre Anfrage auf den Abschluss eines Vertrags abzielt, sonst
Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an der Beantwortung
Ihrer Anfrage).

#### Links zu Google Maps

Auf jeder Seite verlinken wir unter „Anfahrt anzeigen“ bzw. bei unserer
Adresse auf Google Maps. Betreiber ist Google Ireland Limited, Gordon
House, Barrow Street, Dublin 4, Irland. Google Maps ist nicht in unsere
Website eingebettet: Es findet keine Datenübertragung an Google statt,
solange Sie diesen Link nicht anklicken. Erst mit dem Klick verlassen Sie
unsere Website, und es gilt die Datenschutzerklärung von Google
(https://policies.google.com/privacy).

#### Schriftarten

Wir liefern die auf dieser Website verwendeten Schriftarten von unserem
eigenen Server aus. Beim Laden der Schriftarten findet daher keine
Verbindung zu Google-Servern statt, und es werden keine Daten an Google
übermittelt.

#### Weitere eingesetzte Software

Für Aufbau, Wartung und Absicherung dieser Website setzen wir außerdem
ein: das Theme bzw. den Page-Builder Avada/Fusion Builder, das
Wartungswerkzeug ManageWP Worker sowie die Bildoptimierung Imagify.

ManageWP Worker (GoDaddy) erstellt im Rahmen der Website-Wartung
verschlüsselte Sicherungskopien der Website (Dateien und Datenbank) und
überträgt diese an ManageWP. Nach Angaben von ManageWP deckt deren eigene
Datenschutzrichtlinie Website-Besucher ausdrücklich nicht ab, sondern nur
unsere Daten als Kunde des Dienstes; diese Website hat zudem – wie oben
beschrieben – weder Formulare noch Cookies noch Nutzerkonten, sodass in den
gesicherten Daten auch keine Besucherdaten enthalten sind.

Imagify (WP Media) optimiert Bilddateien dieser Website auf eigenen
Servern. Übertragen werden dabei ausschließlich die Bilddateien selbst;
sie werden nach der Optimierung innerhalb einer Stunde wieder vom
Imagify-Server gelöscht. Besucherdaten sind daran nicht beteiligt.

#### Externe Links

Vereinzelt verweisen wir auch an anderer Stelle auf externe Websites, etwa
im Footer auf die Website unseres Webdesigners oder im Impressum auf das
Firmenbuch bzw. die Wirtschaftskammer. Für Inhalt und Datenschutz dieser
fremden Seiten sind deren jeweilige Betreiber verantwortlich.

#### Speicherdauer

Wir speichern personenbezogene Daten nur so lange, wie es für den
jeweiligen Zweck erforderlich ist, oder so lange, wie uns gesetzliche
Aufbewahrungspflichten (etwa aus dem Unternehmensgesetzbuch oder der
Bundesabgabenordnung) dazu verpflichten. Konkrete Fristen sind, soweit uns
bekannt, in den jeweiligen Abschnitten oben genannt.

#### Empfänger/Auftragsverarbeiter im Überblick

| Empfänger | Zweck | Sitz | Rechtsgrundlage |
|---|---|---|---|
| move1 e.U. | Hosting, E-Mail | Österreich (Gänserndorf) | Art. 6 Abs. 1 lit. f DSGVO; AVV: `[OFFEN]` |
| Cloudflare, Inc. | Angriffsschutz, CDN | USA (Drittland) | Art. 6 Abs. 1 lit. f DSGVO; Data Privacy Framework (Status: Active – Re-certification under Review); AVV automatisch Bestandteil der Nutzungsbedingungen |

#### Änderungen dieser Datenschutzerklärung

Wir passen diese Datenschutzerklärung an, sobald sich unsere Website, die
eingesetzten Dienste oder die Rechtslage ändern.

Stand: 22. September 2026

---

## 4. Offene Fragen für Andreas

**Bereits recherchiert und belegt (Abschnitt 1.3), nur noch zur Kenntnisnahme:**

1. ~~Cloudflare-AVV~~ — geklärt: automatisch Bestandteil der Nutzungsbedingungen,
   kein gesonderter Abschluss nötig (Abschnitt 1.3, Punkt 1).
2. ~~DPF-Zertifizierung offiziell gegenprüfen~~ — geklärt: im amtlichen Register
   gelistet, Status „Active – Re-certification under Review“ (Abschnitt 1.3,
   Punkt 2).
3. ~~ManageWP Worker / Imagify~~ — geklärt, so weit von außen über offizielle
   Anbieterquellen feststellbar (Abschnitt 1.3, Punkte 3 und 4).

**Weiterhin offen, nur move1 kann sie beantworten (Mailentwurf vorbereitet, siehe
Abschnitt 6):**

4. **move1-AVV:** Besteht mit move1 e.U. ein schriftlicher
   Auftragsverarbeitungsvertrag nach Art. 28 DSGVO?
5. **Log-Speicherdauer bei move1:** Wie lange werden Server-Logfiles bei
   move1 konkret gespeichert? Die aktuelle Live-Fassung nennt hierzu nur
   einen generischen, nicht verifizierten Platzhalterwert („in der Regel 2
   Wochen“), den ich nicht ungeprüft übernehmen wollte.

**Weiterhin offen, unabhängig von move1:**

6. **Verzeichnis von Verarbeitungstätigkeiten (VVT):** Falls es intern
   bereits ein VVT gibt, sollte dieser Entwurf damit abgeglichen werden.

---

## 5. Hinweis

Dieser Entwurf ist eine technische und redaktionelle Grundlage, **keine
Rechtsberatung**. Er wurde auf Basis einer technischen Messung der Website
und der öffentlich zugänglichen Impressumsdaten erstellt, ersetzt aber keine
Prüfung durch eine rechtskundige Person. Vor Veröffentlichung sollte der
Text – insbesondere die mit `[OFFEN: …]` markierten Stellen sowie die
Angaben zu Rechtsgrundlagen und internationalen Datenübermittlungen – von
Andreas bzw. bei Bedarf von einer/einem Rechtsberater:in geprüft werden.
