# Header – Design QA, 9. September 2026

## Nachtrag: Anrufleiste Version 1

Globaler Footer 158, Revision 5: feste mobile Anrufleiste mit „Jetzt anrufen“, 02282 61402 und tel:+43228261402. Referenz: `/Users/andreas/.codex/generated_images/01a0855a-de32-72a2-b798-5ca3455a74ed/exec-d678a647-e752-4021-81a9-c292d06e993b.png`. Referenz und Live-Aufnahme bei 390 × 844 gemeinsam im Task verglichen: weiße Leiste, Markenblau, zweizeilige Inter-Beschriftung, Telefonicon und 6-px-Ecken entsprechen der Auswahl. Kein lokaler Screenshotpfad vom Browser verfügbar.

Verifiziert: feste Position nach 2532 px Scrollen; Footer-Links bleiben erreichbar; offenes Menü endet oberhalb der Anrufleiste und scrollt intern. Sichtbar bei 320/390/600 px, verborgen bei 834/1440 px; kein horizontaler Überlauf. Genau eine Leiste auf Startseite und Neubau. Telefonziel gelesen, kein Anruf ausgelöst. Safe-Area-Abstand berücksichtigt, nicht auf physischem iPhone getestet. Drei eigene CSS-Klassen zur Safelist hinzugefügt. Viewport zurückgesetzt. Keine offenen P0/P1/P2-Befunde der Anrufleiste.

Menükorrektur vorab: Die zusätzliche Reparaturen-Leiste außerhalb des Burger-Menüs wurde auf Nutzerwunsch entfernt und auf Startseite/Neubau geprüft. Die unten dokumentierte ursprüngliche separate mobile Leiste ist damit überholt.

final result: passed

## Footer „Persönlich erreichbar“ – 15. September 2026

Source visual truth: `/Users/andreas/.codex/generated_images/01a0855a-de32-72a2-b798-5ca3455a74ed/exec-bdac7db4-31d4-41d3-b0a4-a23a75562cf0.png` (1604 × 980 Pixel; Designboard mit Desktop 1280 × 660 und Mobil 390 × 844).

Live implementation: https://www.schmolengruber.at/ – globale Avada-Footer-Sektion 158, Revisionen 9 und 10 dieser Umsetzung. Browser-rendered implementation screenshots wurden im CUA-Tooloutput dieses Tasks bei 1440 × 1000, 768 × 1024, 390 × 844 und 844 × 390 erfasst. Der Browser stellt keinen lokalen Screenshotpfad bereit; die Aufnahmen sind im Task eingebettet. Die ausgegebenen Screenshot-Pixel entsprechen den CSS-Viewportmaßen, ohne Geräte-Rahmen oder zusätzliche Dichte-Skalierung.

State: öffentliche Besucheransicht; Startseite, Pelletskessel- und Badezimmerseite am Seitenende. Mobil ist „Unsere Leistungen“ zunächst geschlossen, Desktop und Tablet zeigen die Links. Der feste Anrufbutton erscheint nur bei Smartphone hoch/quer.

### Vergleich und Evidenz

Quellboard und Live-Aufnahmen wurden visuell auf dieselbe Footerregion normalisiert. Der Desktop-Vollvergleich bestätigt den hellblauen Kontaktstreifen, die dreispaltige Hauptzone, die originale Wortmarke, Leistungslinks, Standort/Zeiten und die flache Rechtszeile. Der mobile Vollvergleich bestätigt dieselbe Reihenfolge wie im Board: Kontakt, Marke, Standort, einklappbare Leistungen, Rechtliches und transparenter Außenbereich des festen Anrufbuttons. Die Referenz ist ein skaliertes Konzeptboard; bewertet wurden Hierarchie, Raster, Abstände, Farben, Inhalt und Interaktionszustände ohne Behauptung pixelgenauer Gleichheit.

Fokussierte Vergleiche: Kontaktstreifen am Desktop vor und nach Korrektur; mobiler Standort-/Leistungsbereich; fester Anrufbutton in Hoch- und Querformat. Weitere Detailausschnitte waren nicht erforderlich, weil Logo, Icons, Links und Kleinschrift in den Viewportaufnahmen lesbar waren.

### Findings und Vergleichsverlauf

1. P2, behoben: WordPress fasste die beiden Kontaktlinks durch automatische Absatzformatierung in ein gemeinsames Grid-Kind zusammen. Telefon und E-Mail standen dadurch untereinander. Beide Links erhielten eigene blockbildende `.sch-footer__contact-item`-Container. Die erneute Aufnahme am identischen Viewport 1440 × 1000 zeigt drei ausgerichtete Grid-Kinder bei x=80, 617 und 921; Footerhöhe sank von 672 auf 614 Pixel.
2. Keine verbleibenden P0/P1/P2-Befunde. Der Kontaktstreifen folgt auf Seiten mit bestehendem Projekt-CTA unmittelbar auf einen weiteren Kontaktbereich. Seine Höhe wurde bewusst kompakt gehalten; dies entspricht der ausgewählten kontaktorientierten Variante und bleibt höchstens eine spätere P3-Reduktionsoption.

### Pflichtflächen

- Typografie: Poppins 700 für die 30-px-Kontaktüberschrift, Inter für Fließtext und Navigation. Computed styles: Überschrift 30/34,5 px, Text 16 px, Rechtszeile 11 px. Klare Hierarchie, passende Umbrüche und echte deutsche Umlaute.
- Layout und Rhythmus: 1280-px-Innenraster, drei Spalten am Desktop, zwei Spalten am Tablet, lineare mobile Reihenfolge. Kein horizontaler Überlauf in 55 Seiten-/Viewportkombinationen. Tablet-Footer 803 px, Smartphone-Footer 966 px, Desktop-Footer 614 px.
- Farben: Markenblau `#2164AD`, dunkles Blau `#17395D`, Text `#4F6073`, Linien `#D9E3EC`, Kontaktverlauf `#F2F8FC` nach `#E8F3FB`. Der feste Button ist `rgb(33, 100, 173)`; seine Außenfläche ist rechnerisch transparent.
- Bildqualität und Assets: originales Mediathek-Logo mit 1194 × 108 natürlichen Pixeln, proportional auf 360 × 33 gerendert. Bestehende Font-Awesome-Smartphone-/Briefsymbole; keine nachgezeichneten Logos oder Ersatzgrafiken.
- Copy und Inhalt: Telefonnummer, E-Mail, Adresse, Öffnungszeiten, acht Leistungsziele, Impressum, Datenschutzerklärung und „Webdesign von Ostheimer OG“ stimmen mit dem ausgewählten Konzept und den bestehenden Unternehmensdaten überein.

### Funktions- und Regressionsprüfung

- 11 Seiten × 5 Viewports = 55 Prüfungen: Startseite, acht Leistungsseiten, Impressum und Datenschutzerklärung in 1440 × 1000, 768 × 1024, 1024 × 768, 390 × 844 und 844 × 390.
- In allen Kombinationen: genau ein Footer, acht Leistungslinks, geladenes Logo, korrekter Ostheimer-Link, kein 404 und kein horizontaler Dokumentüberlauf.
- Headerregression: Desktopnavigation nur bei 1440 px; mobile Navigation bei Tablet und Smartphone. Burger-Menü per Enter geöffnet, 11 erreichbare Links bestätigt und wieder geschlossen.
- Footer-Akkordeon per Enter geöffnet und geschlossen; im geschlossenen Zustand haben Navigation und Links keine Layout-Rechtecke.
- Fester Anrufbutton: Desktop/Tablet ausgeblendet; Smartphone hoch und quer sichtbar, Smartphone-Icon `fas fa-mobile-alt`, Außenfläche transparent, Button in `#2164AD`.
- Browserkonsole: keine erfassten Fehler. WP-Rocket-Used-CSS nach Erstveröffentlichung und Seiten-Cache nach beiden Revisionen geleert; öffentliche Besucheransicht danach erneut geladen.

Open questions: keine. Verbleibende Grenze: Chromium-Viewportemulation, kein zusätzlicher Test auf einem physischen iPhone oder in Safari/Firefox.

final result: passed

## Leistungskarten und konsistente Icons – 14. September 2026

### Umsetzung

Die langen, abwechselnden Leistungsblöcke der Startseite wurden durch acht kompakte Leistungskarten ersetzt. Desktop zeigt ein Raster mit vier Spalten, Tablet zwei Spalten und Smartphone eine kompakte Liste. Jede Karte enthält Bild, Icon, Kurzbeschreibung und direkten Link. Der bisher pro Leistung wiederholte Telefon-/E-Mail-Block wurde durch einen gemeinsamen Kontaktbereich unter dem Raster ersetzt.

Der feste Icon-Satz wird in beiden Header-Sektionen, auf den Startseitenkarten und an der H1-Überschrift jeder Leistungsseite verwendet:

- Wärmepumpen: `fa-fan`
- Pelletskessel: `fa-fire`
- Gasgeräte: `fa-burn`
- Klimaanlagen: `fa-snowflake`
- Neubau: `fa-home`
- Sanierungen: `fa-tools`
- Badezimmer: `fa-bath`
- Reparaturen: `fa-wrench`

Betroffene WordPress-Inhalte: Startseite 2, Startseiten-Header 38, Leistungsseiten-Header 235 und globaler Footer 158. Frühere WordPress-Revisionen ermöglichen die Wiederherstellung.

### Verifikation

Die öffentliche Seite wurde nach jeder Korrektur mit Cache-Busting-URL neu geladen. Der abschließende Durchlauf umfasste neun URLs in fünf Viewports:

- Desktop: 1440 × 1000
- Tablet hochkant: 834 × 1112
- Tablet quer: 1194 × 834
- Smartphone hochkant: 390 × 844
- Smartphone quer: 844 × 390

Damit wurden 45 Seiten-/Viewport-Kombinationen geprüft. Für jede Kombination wurden 404-Status, horizontaler Überlauf, Headerbreite, aktiver Navigationsmodus, alle acht mobilen Leistungsziele, 14 Icon-Vorkommen in den beiden Menüvarianten, H1-Platzierung, Hauptinhalt und defekte Bilder kontrolliert. Auf der Startseite kamen acht Karten, korrekte Karten-Icons, Kartenbreiten und getrennte Kontaktaktionen hinzu. Ergebnis: keine Fehler im zweiten Durchlauf.

Zehn zusätzliche Interaktionstests deckten Startseite und repräsentative Leistungsseite in allen fünf Viewports ab. Desktop-Untermenüs öffneten und schlossen per Escape; Tablet und Smartphone öffneten Burger-Menü und Heizen-Gruppe, zeigten alle acht Leistungsziele, scrollten innerhalb des Viewports und schlossen wieder vollständig. Ergebnis: keine Fehler.

Der feste Anrufbutton wurde auf allen neun Seiten in beiden Smartphone-Ausrichtungen separat geprüft. Er ist sichtbar, fest positioniert, vollständig innerhalb des Viewports, verwendet `fa-mobile-alt`, zeigt die transparente Umgebung und verweist auf `tel:+43228261402`.

### Während der QA behoben

- Drei Font-Awesome-Zeichen waren zunächst als CSS-Steuerzeichen gespeichert und brachen dadurch die Kartenregeln ab. Die Escape-Sequenzen wurden korrigiert; Typografie, Kartenkörper und Kontaktleiste werden vollständig angewendet.
- Smartphone quer fiel bei 844 Pixeln auf die Tablet-Einleitung zurück und blendete den festen Anrufbutton aus. Ein kombinierter Breiten-, Höhen- und Orientierungs-Breakpoint zeigt nun die mobile Leistungsübersicht und den Anrufbutton.
- Die lange H1 „Klimaanlage und Klimaanlagenservice bei Schmolengruber Installationen“ lief auf 390 Pixeln aus dem verfügbaren Bereich. Der Titeltext erhielt ein eigenes schrumpfbares Element; die mobile Schriftgröße dieser Seite wurde auf 24 Pixel abgestimmt. Kein horizontaler Überlauf und keine Trennung innerhalb „Klimaanlagenservice“.

### Offene, nicht blockierende Auffälligkeiten

- GitHub-Issue #1: drei responsive H1-Varianten der Startseite gleichzeitig im DOM.
- GitHub-Issue #2: authentische, nicht KI-generierte Leistungsbilder fehlen; sieben Leistungsunterseiten besitzen kein eigenes Leistungsbild.
- GitHub-Issue #3: Wärmepumpen enthält vier Kontaktbuttons, die übrigen sieben Leistungsseiten keinen inhaltlichen Kontaktabschluss.

Visuelle Prüfung: ausgewählter Entwurf und Desktop-Umsetzung wurden im selben Tool-Ergebnis verglichen; zusätzliche Aufnahmen decken Tablet hoch/quer, Smartphone hoch/quer, mobile Kartenliste, Footer und die längste Leistungsüberschrift ab. Prüfung im Chromium-basierten Browser mit emulierten Viewports, nicht auf physischen Geräten oder Safari/Firefox.

Abschließender kanonischer Server-Readback ohne Query-Parameter: HTTP 200 auf Startseite und allen acht Leistungsseiten; Startseite enthält acht Karten, alle Unterseiten liefern den aktualisierten Icon-Code und die jeweils richtige Pfadzuordnung. Ein zuvor im In-app-Browser beobachteter Altstand auf Startseite und Neubau war lokaler Browsercache, nicht die öffentliche Serverantwort; deshalb war keine globale Cache-Löschung erforderlich.

final result: passed

## Ziel und Umsetzung

Quelle: `/Users/andreas/.codex/generated_images/01a0855a-de32-72a2-b798-5ca3455a74ed/exec-79cdb3bf-eecc-4e2f-94e9-e649ebde9b7e.png` (1374 × 1160 px Designboard).

Live-Umsetzung: https://www.schmolengruber.at/ in Avada Header 38 und Header Leistungsseite 235. Aktuelle Revisionen nach Umsetzung: 104 und 10. Frühere Revisionen ermöglichen die Wiederherstellung. Kein lokales Theme-Repository vorhanden; Änderungen erfolgten über den authentifizierten WordPress-Editor.

Bewusste, vom Nutzer bestätigte Anpassungen gegenüber dem Board: nur eine Kategorie gleichzeitig öffnen; Reparaturen separat direkt erreichbar. Bestehender Seiteninhalt bleibt außerhalb des Header-Auftrags. Kontakt öffnet eine E-Mail an office@schmolengruber.at; Anrufen verwendet tel:+43228261402.

## Visuelle Evidenz

Browser-Screenshots im Task: Desktop 1440 × 900, Tablet 834 × 1000, Mobil 390 × 844 und 320 × 740. Desktop und Mobil wurden gemeinsam mit dem Quellboard im selben Tool-Ergebnis ausgegeben und verglichen. Screenshot-Dateipfad: nicht vom Browser zurückgegeben; die Aufnahmen sind im Task eingebettet. Der unterstützte In-app-Content-Export ist nicht verfügbar.

Vergleich beschränkt auf den Header, ohne Boardbeschriftung und ohne Hero. Das Board enthält verkleinerte Ansichten mit nominellen Breiten 1440/834/390; daher struktureller Vergleich ohne pixelgenaue Gleichheitsbehauptung. Live-Aufnahmen entsprechen den CSS-Viewportgrößen. Desktopzustand: Heizen offen, andere Kategorien geschlossen. Mobilzustand: Menü und Heizen offen. Tablet: zweispaltige Kategorieanordnung, Heizen offen. Alle Beschriftungen und Abstände sind in den Aufnahmen lesbar; zusätzliche Detailausschnitte waren nicht nötig.

## Befunde und Korrekturen

- P1, behoben: WP Rocket lieferte zuvor erzeugtes Used CSS ohne die neuen Header-Regeln aus. Used-CSS-Cache über die vorhandene WordPress-Aktion geleert; danach war der Header korrekt sichtbar. Alle 22 eigenen Header-Klassen wurden zusätzlich unter Erhalt vorhandener Einträge in die CSS-Safelist aufgenommen. Die spätere asynchrone Fertigstellung des Used CSS ist nicht separat nachgewiesen; die öffentlich ausgelieferte Original-CSS-Darstellung wurde geprüft.
- P2, behoben: WordPress erzeugte zusätzliche Absätze um Links. Dadurch war die erste Headerfassung 177 px hoch und Reparaturen/Kontakt standen zu eng. Auf den Header begrenzte Absatznormalisierung und robustere Nachfahrenselektoren korrigierten dies; erneute Desktopaufnahme zeigt 140 px Headerhöhe und getrennte Bedienelemente.
- Keine verbleibenden P0/P1/P2-Befunde im beauftragten Header.

## Pflichtflächen

- Typografie: bestehendes Inter mit Arial-Fallback, 14–16 px Navigationsschrift, Gewicht 600, gut lesbare deutsche Umlaute; große Seitentitel unverändert.
- Layout: kompakte weiße Kopfzeile, dezente Utility-Leiste am Desktop; mobile Kontakt-/Menütasten und direkter Reparaturlink. 48 px Untermenüzeilen, mindestens 44 px mobile Schaltflächen. Keine horizontale Überschreitung bei 320, 390, 600, 834, 1051, 1100, 1240 px.
- Farben: vorhandenes Markenblau #244f7d, weiße Flächen, helle Trennlinien und blaue Fokusmarkierung; keine neue Markenpalette.
- Bildqualität: originales Logo aus der Mediathek, proportional dargestellt; bestehende Font-Awesome-Icons statt nachgezeichneter Assets.
- Inhalt: vier Kategorien mit sieben zugeordneten Leistungen plus Reparaturen als eigenständiger Link; alle acht bestehenden Ziele erhalten. Adresse und Öffnungszeiten im mobilen Menü verfügbar. Ostheimer-Footerlink auf allen acht besuchten Leistungsseiten vorhanden.

## Funktionsprüfung

- Enter/Leertaste öffnen Menüs; Auswahl einer anderen Kategorie schließt die vorherige.
- Escape schließt zuerst die Kategorie und setzt Fokus auf deren Auslöser; danach kann das mobile Gesamtmenü geschlossen werden.
- Außenklick schließt das Desktopmenü.
- Alle acht Leistungsseiten durch echte Navigationsklicks besucht: Wärmepumpen, Pelletskessel, Gasgeräte, Klimaanlagen, Badezimmer, Neubau, Sanierungen, Reparaturen. Korrekte Seitentitel und jeweils genau ein neuer Header bestätigt.
- Mobile Navigation zu Neubau erfolgreich; Zielseite startet mit geschlossenem Menü.
- Aktuelle Leistungslinks erhalten aria-current="page".
- Keine erfassten Browser-Konsolenfehler im abschließenden Abruf.
- Temporäre Viewport-Overrides zurückgesetzt.

## Grenzen und Folgearbeit

Prüfung im Chromium-basierten Browser mit emulierten Viewports, nicht auf physischen Geräten oder in Safari/Firefox. Keine Änderung oder erneute Bewertung des übrigen Seitencontents. Keine verbleibende notwendige Header-Korrektur.

## Mobile Leistungsübersicht – 10. September 2026

Source visual truth: `/var/folders/fj/mhk5l83n4nj51sjhcg6784rh0000gn/T/codex-clipboard-5786900b-825c-4e3a-92a4-35d263183134.png` (891 × 1600 Pixel, entspricht proportional ca. 390 × 700 CSS-Pixel).
Implementation: https://www.schmolengruber.at/ – WordPress Header 38, Revision 112. Screenshots direkt im CUA-Tooloutput dieser Aufgabe; kein lokaler Screenshotpfad verfügbar.
State: Startseite oben, Menü geschlossen; zusätzliche Tastaturprüfung mit sichtbarem Fokus.

Vergleich: Referenz und Live-Screenshot gemeinsam im selben Tooloutput betrachtet, gleiche mobile Seitenansicht ohne Browser-Chrome. Vergleich proportional auf 390 Pixel Breite, kein pixelgenauer Rastervergleich. Alle Texte, Links und Symbole waren im vollständigen Screenshot lesbar; kein zusätzlicher Detailausschnitt erforderlich.

Fidelity surfaces:
- Typography: bestehende Poppins/Inter, klare Überschriftenhierarchie, echte Umlaute; kompaktere mobile Abstände und 30–32 Pixel H1 für reale Browserhöhen.
- Layout: vier Gruppen mit Trennlinien, separate Reparaturen-Zeile, schwebender Anrufbutton. Bei 390 × 660 endet Reparaturen bei y=581,67, Anrufbutton beginnt bei y=585,80; keine Überdeckung. Bei 320 × 568 ist Scrollen erforderlich, Inhalte bleiben erreichbar.
- Colors: Logoblau #2164AD für Links und bestehende Call-Aktion; Dock-Hintergrund per computed style transparent.
- Assets: Original-Logo bleibt erhalten; vorhandene Font-Awesome-Bibliothek für Feuer, Schneeflocke, Badewanne, Haus und Werkzeug. Gefüllte Icons statt der gezeichneten Outline-Icons im Entwurf sind eine bewusste Anpassung an das bestehende Icon-System (P3).
- Copy: Standort, gewählte Überschrift, Unterzeile und alle acht Leistungen entsprechen dem gewählten Aufbau. Keine neuen unbelegten Werbeaussagen.

Comparison history:
1. P2: Reparaturen am Ende zunächst vom fixen Anrufbutton überlagert. Intro-/Zeilenabstände reduziert, zusätzliche Regel für kurze Displays. Erneute Screenshots 390 × 700 und 390 × 660 sowie DOM-Rechtecke bestätigen vollständige Sichtbarkeit.
2. P2: Theme-Mobil-Breakpoint zeigte neue Übersicht auch bei 834 Pixeln. Explizite Grenze bei 600 Pixeln eingeführt und bisherigen Intro-Block oberhalb davon erhalten. Nachprüfung 600/601/834/1440 bestätigt korrekte Trennung. Desktop-Intro und Header-Navigation inhaltlich unverändert übernommen.

Interaction checks:
- Alle acht Leistungslinks tatsächlich angeklickt und anhand URL plus sichtbarer Seitenüberschrift geprüft: Wärmepumpen, Pelletskessel, Gasgeräte, Klimaanlagen, Badezimmer, Neubau, Sanierungen, Reparaturen.
- Tastaturfokus der Leistungslinks sichtbar; Burger per Enter geöffnet und per Escape geschlossen.
- Kein horizontaler Overflow bei 320, 390, 600, 601, 834 und 1440 Pixeln.
- Console error log: keine erfassten Fehler während der Linkprüfung.
- WP-Rocket-Safelist um neue Klassen ergänzt und benutztes CSS nach Änderungen geleert.

Open questions: keine.
Remaining limitation: Browser-Viewport-Prüfung, kein zusätzlicher Test auf einem physischen iPhone. Sehr kleine Bildschirmhöhen erfordern normales Scrollen.
Implementation checklist: umgesetzt, Links geprüft, Breakpoints geprüft, Cache aktualisiert.

final result: passed

## Veröffentlichung der Symbolbilder und Leistungsseiten – 14. September 2026

Aktueller Stand ersetzt die offenen Bild-/CTA-/H1-Befunde des früheren Abschnitts.

### Live umgesetzt

- Acht Leistungsseiten als statischer Avada-Inhalt veröffentlicht (IDs 63, 68, 76, 83, 88, 126, 96, 99), keine nachträgliche JavaScript-Ersetzung des Seiteninhalts.
- Einheitliche Darstellung: kurzer Titel und kanonisches Icon, Bild, Projektablauf, Text/Vorteile und Telefon-/E-Mail-Kontaktabschluss.
- Startseitenkarten mit denselben acht Motiven; weißes transparentes Original-Logo und „Symbolbild“ als responsive HTML/CSS-Overlays. Das Badezimmerbild im Desktop-Hero ist ebenfalls ersetzt und gekennzeichnet.
- Neubau und Sanierung erhielten zwei vereinfachte Ersatzmotive, da die vorherigen generierten Leitungsnetze nicht plausibel waren.
- Startseite hat jetzt eine einzige semantische H1; sichtbare responsive Einleitungen bleiben erhalten. Karten-CSS ist aus dem Seiteninhalt nach Header38 verschoben.
- WordPress-Absatzumbruch um die Startseiten-Kontaktlinks durch gezielte CSS-Regeln berücksichtigt: die Buttons haben wieder getrennte Abstände.
- Avada-Zeilenüberbreite auf den Detailseiten behoben; lange Titel „Neubauinstallationen“ und „Sanierungsarbeiten“ auf „Neubau“ und „Sanierungen“ gekürzt.
- WP-Rocket-Used-CSS und Seiten-Cache geleert. Vorher war öffentlich noch älteres CSS aktiv. Nach Bereinigung wurde die Besucheransicht ohne Anmeldung kontrolliert.

### Prüfung

Startseite + acht Leistungsseiten in 1440×1000, 768×1024, 1024×768, 390×844 und 844×390: 45 Layoutprüfungen, jeweils H1-Anzahl 1, Bilder geladen und kein horizontaler Dokumentüberlauf. Zusätzlich 45 Menüprüfungen mit geöffneter Kategorie „Heizen“; richtige Unterlinks und Icons, kein Seitenüberlauf. Escape schließt die übergeordnete Navigation; ein geschlossenes Elternmenü kann den internen Untermenüstatus behalten. Smartphone-Anrufleiste sichtbar in Hoch- und Querformat, Tablet/Desktop ohne feste Leiste. Impressum und Datenschutzerklärung zusätzlich in allen fünf Größen auf H1 und horizontalen Überlauf geprüft.

Visuelle Aufnahmen im Task: Desktop-Startseitenkarten und Kontaktbuttons; Smartphone-Leistungsfinder, geöffnetes Menü, Kartenliste und Reparaturseite; Tablet-Pelletseite inklusive Kontaktabschluss; Tablet-Querformat Neubau vor/nach Korrektur. Abschließende Regression nach Änderung der Avada-Zeilenränder und beider Titel: erneut alle 45 Kombinationen geprüft, keine negativen Artikelränder, abgeschnittenen Kontaktlinks, Bildladefehler oder horizontalen Überläufe. Browseremulation, keine physische Geräte-/Safari-Prüfung. Telefon- und E-Mail-Ziele gelesen, keine Kommunikation ausgelöst.

Kanonischer Server-Readback aller elf Seiten: HTTP 200, je eine H1, statischer Detailartikel auf allen acht Leistungsseiten, neun Symbolbild-Kennzeichnungen auf der Startseite und jeweils eine auf den Leistungsseiten. Siehe `design-assets/deployment/server-readback.json` und die öffentlichen `*-live.html`-Snapshots. WordPress-Revisionen sind der Wiederherstellungsweg für die bearbeiteten Inhalte.

### Richtigkeit und offene Befunde

Die Motive sind als Symbolbilder visuell plausibel und konsistent; keine Aussage, dass alle technischen Anschlüsse oder Installationsdetails fachlich zertifiziert bzw. identisch zum Herstellerfoto sind. Herstellerreferenzen ETA PU, Buderus Logatherm WLW MBB AR und Bosch Gas-Brennwerttechnik wurden herangezogen. Technische Abnahme und konkrete Bosch-Angebotszuordnung bleiben in Issue #2 offen.

Issue #1 (H1) und #3 (Kontakt-CTAs) geschlossen. Neues Issue: doppelte Meta-Description auf Startseite/Wärmepumpen sowie automatisch zusammengesetzte Beschreibungen auf den übrigen Leistungsseiten. Sichtbare Layout-Abnahme und SEO-Metadaten-Abnahme werden getrennt ausgewiesen.

Die Datei `service-design-injection.html` ist ein alter Entwurf und wurde nicht als Live-JavaScript eingebaut. `deployment/build.cjs` materialisiert die statischen Detailseiten; `deployment/final.css` ist der öffentliche finale CSS-Readback. PNG-Entwürfe und alte Ersatzbilder sind Arbeitsdateien, nicht automatisch Bestandteil der Live-Auswahl.

## Symbolbild-Kennzeichnung – Anpassung 14. September 2026

Auf Nutzerwunsch nur noch auf den großen Bildern der Leistungsunterseiten: 9 px, normale Schreibweise und Schriftstärke, 60 Prozent Deckkraft, kein Kasten/Rahmen. Auf Startseiten-Hero und Leistungskarten ausgeblendet; Logo-Wasserzeichen bleibt bestehen. Header38/235 live gespeichert, WP-Rocket-CSS/Seiten-Cache bereinigt. 45 Kombinationen (Startseite und acht Unterseiten × fünf bisherige Viewports) bestätigen die Sichtbarkeit, 9 px/0.6 und keinen horizontalen Überlauf. Desktop-Pelletseite zusätzlich visuell geprüft.

## Mobile Icon-Kreise – Anpassung 14. September 2026

Die Icon-Kreise der acht Startseitenkarten besitzen in Smartphone-Hoch- und Querformat einen halbtransparenten weißen Hintergrund (80 Prozent), eine transparente Kontur und einen schwächeren Schatten. Der Abstand zum linken und unteren Bildrand beträgt jeweils exakt 5 px. Header38 live gespeichert, WP-Rocket-CSS/Seiten-Cache bereinigt. Alle acht Karten bei 390 × 844 und 844 × 390 geprüft; Abstände und Hintergrund stimmen, kein horizontaler Überlauf.

## Layoutkorrekturen – 15. September 2026

Live veröffentlicht: Leistungsseiten-Header 235, Revision 23; Startseite 2, Revision 63; globaler Footer 158, Revision 11.

- Die Desktopnavigation der Leistungsseiten wechselt bis einschließlich 1120 Pixel auf den mobilen Header. Bei 1120 Pixel ist nur das mobile Menü sichtbar; bei 1121 Pixel erscheint die Desktopnavigation mit 100,9 Pixel Abstand zum Logo und ohne Überlauf.
- Alle acht Leistungsüberschriften bleiben als vollständiges Wort in einer Zeile. Für 901 bis 1120 Pixel wechselt der Detail-Hero auf eine Spalte; ab 1121 Pixel ist die Überschrift auf maximal 50 Pixel begrenzt. Bei höchstens 360 Pixel werden Schrift und Icon gezielt verkleinert.
- Die dunkelblaue Projektbox steht auf der Startseite jetzt direkt nach der Abschnittseinleitung und vor den acht Leistungskarten.
- Der automatisch eingefügte leere WordPress-Absatz im Footer-Kontaktraster ist ausgeblendet. Die sichtbaren Inhalte sind vertikal zentriert; gemessene Abweichung vom Mittelpunkt: 0,5 Pixel auf Desktop und Tablet, 1,5 Pixel auf Smartphone.

Responsive-Prüfung: Startseite, acht Leistungsseiten, Impressum und Datenschutzerklärung bei 1440 × 1000, 768 × 1024, 1024 × 768, 390 × 844 und 844 × 390. Ergänzende Prüfungen der neun Inhaltsseiten bei der gemeldeten Größe 1512 × 824 und bei 320 × 568. Insgesamt 73 Seiten-/Viewportmessungen: keine horizontale Überbreite, keine abgeschnittene oder getrennte Leistungsüberschrift, alle acht Startseitenkarten einzeilig, richtiger Headermodus und korrekte Sichtbarkeit des festen Smartphone-Anrufbuttons. Visuelle Kontrollen umfassten Klimaanlagen-Hero, Startseiten-Leistungsbereich sowie Footer auf Desktop und Smartphone. Keine Browser-Konsolenfehler.

WP-Rocket-Used-CSS und Seiten-Cache wurden nach der Veröffentlichung geleert; das Vorladen wurde gestartet. Abschließender kanonischer Abruf ohne Query-Parameter bestätigte alle elf Seiten, die neue Reihenfolge auf der Startseite, die einzeiligen Titel und die Footer-Korrektur.

final result: passed

## SEO-Plugin-Migration Yoast → Ostheimer SEO – 16. September 2026

Ablauf mit Parallelbetrieb, alle Schreibzugriffe über REST-API bzw. die Formular-Endpunkte des angemeldeten Admins, keine Klickstrecken.

1. Baseline: kanonischer Readback aller 11 Seiten (title, description, canonical, robots, og:*, JSON-LD) plus Sitemaps und robots.txt → `design-assets/seo-migration/before-yoast.json`. Skript: `design-assets/seo-migration/readback.py`.
2. Ostheimer SEO 1.2.1 aus dem WordPress.org-Verzeichnis über `wp/v2/plugins` installiert und aktiviert, Yoast 28.1 blieb aktiv. Der Konfliktschutz des Plugins hielt das Frontend stumm; Readback mit beiden Plugins war identisch zur Baseline (`during-parallel.json`).
3. Yoast-Import (`admin-post.php?action=native_seo_import`, overwrite=1): 11 Einträge geprüft, 13 Werte übernommen (11 Descriptions, 2 SEO-Titel). Alle 11 Descriptions gegen die Live-Ausgabe verglichen: identisch. Titel-Templates und Trenner „-“ aus Yoast übernommen.
4. Site-Darstellung auf „Lokales Unternehmen“ gestellt: HomeAndConstructionBusiness (Plumber ist im Plugin nicht wählbar), Name Schmolengruber Installationen GmbH, Hauptstraße 18, 2241 Schönkirchen-Reyersdorf, Niederösterreich, AT, Telefon +43 2282 61402, office@schmolengruber.at, Einzugsgebiet Bezirk Gänserndorf. Öffnungszeiten kennt das Plugin noch nicht (Folgeaufgabe im Plugin-Repo). Social-Fallback-Bild: Mediathek-ID 784 (badezimmer-symbolbild.webp, 1536 × 1024).
5. Yoast per `wp/v2/plugins` deaktiviert (nicht gelöscht), WP-Rocket-Seiten-Cache, Used CSS und Performance-Hints geleert.
6. Readback nach dem Wechsel (`final.json`) gegen Baseline: title, description, canonical, robots auf allen 11 Seiten identisch; je genau ein canonical und ein JSON-LD-Block. Unterschiede: `article:modified_time` entfällt; `og:image` ist jetzt auf allen Seiten das Fallback-Bild statt des ersten Inhaltsbilds (Impressum hatte vorher keines, Datenschutz ein AdSimple-Icon); JSON-LD `Organization` → `HomeAndConstructionBusiness` mit Adresse, Telefon, E-Mail, Einzugsgebiet.
7. Sitemaps: `/sitemap_index.xml` und `/page-sitemap.xml` antworten jetzt 404, `/sitemap.xml` leitet per 301 auf `/wp-sitemap.xml` (11 URLs, vollständig). robots.txt ist die Core-Fassung mit `Sitemap: https://www.schmolengruber.at/wp-sitemap.xml`; der Yoast-Block mit `Disallow: /wp-json/` ist weg.

Nachtrag: Sitemap in der Search Console getauscht und Yoast gelöscht, Readback danach unverändert. Offen: Weiterleitung `sitemap_index.xml` → `wp-sitemap.xml` braucht `.htaccess`-Zugriff (Apache) oder die Plugin-Funktion aus der Folgeaufgabe. Einstellungsseite des Plugins erscheint auf Englisch, weil das deutsche Sprachpaket noch nicht im Verzeichnis freigegeben ist.

final result: passed

## Wärmepumpen-Bild verkleinert – 18. September 2026

Ziel: mobiler LCP der Wärmepumpen-Seite (Briefing: 4,8 s, Lighthouse mobil) durch ein kleineres Symbolbild verbessern, ohne Ausschnitt, Seitenverhältnis oder Alt-Text zu ändern.

### Austausch

- Alt: `waermepumpe-buderus-symbolbild.webp`, Anhang-ID 772, 1536 × 1024. Ausgelieferte Größe per HTTP-Header 284.580 Bytes (278 KB, deckt sich mit dem Briefing); die WP-REST-Metadaten (`media_details.filesize`) melden davon abweichend 307.138 Bytes — vermutlich ein veralteter Metadatenwert, nicht die tatsächlich ausgelieferte Datei. Anhang 772 bleibt unverändert im Medienarchiv erhalten, nicht gelöscht.
- Neu: `waermepumpe-buderus-symbolbild-v2.webp`, Anhang-ID 854, 1536 × 1024, 91.188 Bytes (−67,9 % gegenüber der ausgelieferten Alt-Größe). Hochgeladen per `POST /wp-json/wp/v2/media` aus dem Blob der committeten Datei (Commit `db7505f`, per raw.githubusercontent.com verifiziert: 200, exakt 91.188 Bytes, 1536 × 1024). `alt_text`, `title` und `caption` von Anhang 772 übernommen (Titel „waermepumpe-buderus-symbolbild“, Alt-Text und Caption jeweils leer wie im Original).
- Der sichtbare Alt-Text „Symbolbild einer Buderus Luft-Wasser-Wärmepumpe“ stammt aus dem im Seiteninhalt hinterlegten `alt`-Attribut des Bildblocks, nicht aus der Medienbibliothek, und blieb durch die reine URL-Ersetzung unverändert.

### Geänderte Seiten

Nur Inhalt ersetzt, keine weiteren Änderungen:

| Seite | ID | Ersetzte Stellen | Revisions-ID davor |
|---|---|---|---|
| Startseite | 2 | 1 | 840 |
| Wärmepumpen | 63 | 1 | 796 |

Auf beiden Seiten kam die alte URL vor dem Eingriff genau einmal in `content.raw` vor und war danach mit 0 Treffern vollständig ersetzt; keine Vorkommen von `772` (z. B. `wp-image-772`) in einer der beiden Seiten gefunden, also keine ID-Referenzen zu bereinigen.

Cache geleert: `purge_cache&type=all`, `rocket_clean_saas`, `rocket_clean_performance_hints` — alle drei Aufrufe HTTP 200 mit Redirect zurück auf `/wp-admin/`.

### Readback (curl, kanonisch ohne Query-Parameter, `Mozilla/5.0`)

| Prüfung | Startseite `/` | `/waermepumpen/` |
|---|---|---|
| Alte Datei im HTML | 0× | 0× |
| Neue Datei im HTML | 2× (lazy `img` + `noscript`-Fallback, dasselbe Bild) | 2× (dito) |
| `width="1536" height="1024"` am Bild | unverändert vorhanden | unverändert vorhanden |
| H1-Anzahl | 1 | 1 |
| `meta name="description"`-Anzahl | 1 | 1 |
| Direkter Abruf neue Bild-URL | HTTP 200, `Content-Length: 91188`, `Cache-Control: public, max-age=31536000, immutable` | (dieselbe Datei) |

WP-Rocket-Preload-Hint (`<link rel="preload" as="image">`) auf das neue Bild: bei drei aufeinanderfolgenden Abrufen von `/waermepumpen/` nach der Cache-Leerung nicht vorhanden — auf der Seite erscheinen aktuell nur Font-Preloads, kein Bild-Preload. Nicht erzwungen, wie vorgegeben; das ist ein reines Beobachtungsergebnis, keine Fehlerbehebung im Auftrag.

### Lighthouse mobil, `/waermepumpen/`, Performance-Kategorie

| Lauf | Score | LCP |
|---|---|---|
| 1 | 0,81 | 4,2 s (4163 ms) |
| 2 | 0,84 | 4,2 s (4160 ms) |
| 3 | 0,82 | 4,2 s (4166 ms) |
| **Median** | **0,82** | **4,2 s (4163 ms)** |

Vorher (Briefing, nicht in dieser Session gemessen): LCP 4,8 s. Nachher gemessen: Median 4,2 s, also rund 0,6 s schneller. Das LCP-Element ist im ersten Lauf per `network-requests`-Audit bestätigt die neue Bilddatei (`transferSize` 91.727, `resourceSize` 91.188 Bytes, Priorität „High“) — die Bildverkleinerung wirkt sich also direkt auf das gemessene LCP-Element aus, auch wenn LCP-Zeit weiterhin von anderen Faktoren (Serverantwort, Renderpfad) mitbestimmt wird.

### Grenzen

- Kein „vorher“-Lighthouse-Lauf in dieser Session; der Vergleichswert 4,8 s stammt aus dem Auftrag.
- Kein Nachweis, warum der WP-Rocket-Bild-Preload-Hint fehlt; dessen Erzeugung hängt an echten Seitenaufrufen (RUM) und war nicht Teil des Auftrags, das zu beheben.
- Discrepancy der REST-`filesize`-Metadaten des alten Anhangs (307.138 Bytes) gegenüber der tatsächlich ausgelieferten Größe (284.580 Bytes) nicht weiter untersucht.

final result: passed

## Security-Header und Browser-Caching – 16. September 2026

Kein FTP/SSH-Zugang; der WordPress-Stammordner ist laut Website-Zustand beschreibbar. Umsetzung über ein site-spezifisches Plugin `wp-plugins/schmolengruber-server-headers/` (Quelle im Repo, per Upload-Formular installiert, per REST aktiviert). Beim Aktivieren schreibt es mit `insert_with_markers()` einen Marker-Block „Schmolengruber Server Headers“ in die `.htaccess`, beim Deaktivieren entfernt es ihn wieder. Alle Regeln liegen in `IfModule mod_headers.c` / `mod_expires.c`. Zusätzlich sendet ein `send_headers`-Hook die Security-Header für PHP-Antworten.

Readback per curl: HTML, WebP, WOFF2 und Sitemap liefern `Strict-Transport-Security: max-age=31536000` (ohne includeSubDomains, weil Subdomains nicht geprüft sind), `X-Content-Type-Options: nosniff`, `X-Frame-Options: SAMEORIGIN`, `Referrer-Policy: strict-origin-when-cross-origin`, `Permissions-Policy`. Statische Dateien zusätzlich `Cache-Control: public, max-age=31536000, immutable`; HTML bewusst ohne. Kein `Expires`-Header sichtbar, mod_expires ist auf dem Host offenbar nicht geladen; `Cache-Control` reicht. Bewusst kein CSP, weil Avada und WP Rocket Inline-Skripte einsetzen.

final result: passed

## Avada-CSS-Regression – 22./23. September 2026

### Befund

Jede Seite lieferte seit einem Zeitpunkt zwischen 19:08 und ca. 19:25 Uhr am 22.09. rohes HTML von ca. 1,4–1,5 MB (~193–199 KB br-komprimiert) statt der vorherigen ~0,3 MB. Ursache: `<style id="fusion-stylesheet-inline-css">` im `<head>` mit rund 1,12 MB Avada-Dynamic-CSS, obwohl Avada → Optionen → Leistung → „CSS Compiling Method“ auf **Datei** steht. Erwartet wäre eine kompilierte Datei unter `wp-content/uploads/fusion-styles/`, kein Inline-Block dieser Größe. Betroffen sind alle 11 Seiten der Sitemap, stichprobenhaft an `/` und `/pelletskessel/` mit mobilem und Desktop-UA gemessen.

Direkter Hinweis aus Avada selbst (Optionen → Leistung → Dynamisches CSS & JS, unterhalb „Cache Server IP“): „**IMPORTANT NOTE: JS Compiler is disabled. File does not exist or access is restricted.**“ – derselbe Compiler-Mechanismus, der auch das CSS in Dateiform schreiben soll, meldet für sein Geschwisterverzeichnis (`uploads/fusion-scripts`) explizit ein Zugriffs-/Existenzproblem. `wp-content/uploads/fusion-styles/` und `wp-content/uploads/fusion-scripts/` antworten beide mit HTTP 404 (nicht 403 wie das übergeordnete, existierende `uploads/`-Verzeichnis), was für nicht angelegte Unterverzeichnisse statt für eine reine Listing-Sperre spricht.

### Eingriff

1. **Avada Cache zurücksetzen**: Button in Optionen → Leistung → Dynamisches CSS & JS. Der reguläre Klickpfad scheitert im automatisierten Browser strukturell, weil die Aktion vor der Ausführung einen nativen `confirm()`-Dialog („Are you sure you want to reset all Avada caches?“) erfordert, den der Browser-Automation-Kontext grundsätzlich mit „Abbrechen“ beantwortet (per Log bestätigt, zweimal). Deshalb wurde exakt derselbe Vorgang ausgelöst, den der Klick nach einem „Ja“ ausgeführt hätte: derselbe `jQuery.post`-Aufruf an `admin-ajax.php` mit `action: fusion_reset_all_caches` und dem echten, aus der Seite gelesenen Nonce. HTTP 200; Rückgabewert „0“, was bei dieser WordPress-Aktion (kein explizites `wp_die()` mit Payload im Handler) das reguläre Verhalten ist – die eigene Erfolgsmeldung des Buttons prüft den Rückgabewert ebenfalls nicht, sondern zeigt nach Abschluss des Requests immer „Alle Avada Caches wurden zurückgesetzt.“ Keine weiteren Avada-Optionen geändert.
2. **WP Rocket leeren**: aus `#wpadminbar` per `fetch` `action=purge_cache&type=all`, `action=rocket_clean_saas` (Used CSS) und `action=rocket_clean_performance_hints`, je mit dem echten Nonce der Seite. Alle drei HTTP 200 mit Redirect zurück auf die Referrer-Seite.
3. **Warmlauf**: alle 11 Sitemap-Seiten (`wp-sitemap-posts-page-1.xml`) je zweimal anonym per curl abgerufen, mobiler und Desktop-UA, mit Wartezeit dazwischen – 44 Requests insgesamt, alle HTTP 200.
4. **Wartefenster**: `/` danach über rund 13 Minuten in Abständen von 60–90 s erneut abgerufen (6 Prüfpunkte zwischen 23:05 und 23:13 Uhr) und die Länge von `fusion-stylesheet-inline-css` mit einem DOTALL-korrekten Parser gemessen (ein erster Versuch mit `grep -E` ohne Mehrzeilen-Unterstützung hätte fälschlich „0“ gemeldet und wurde verworfen, bevor er gemeldet wurde).

### Vorher/Nachher

| Seite | UA | Übertragen vorher | Übertragen nachher | Roh vorher | Roh nachher | Avada-Inline-CSS vorher | Avada-Inline-CSS nachher |
|---|---|---|---|---|---|---|---|
| `/` | mobil | 198.069 B | 197.417 B | 1.465.454 B | 1.468.134 B | 1.118.924 B | 1.118.924 B |
| `/` | desktop | 198.738 B | 196.711 B | 1.461.130 B | 1.463.710 B | 1.118.924 B | 1.118.924 B |
| `/pelletskessel/` | mobil | 193.367 B | 193.015 B | 1.420.828 B | 1.423.508 B | 1.118.930 B | 1.118.930 B |
| `/pelletskessel/` | desktop | 193.755 B | 193.735 B | 1.421.205 B | 1.423.188 B | 1.118.930 B | 1.118.930 B |

Der Avada-Inline-CSS-Block ist vor und nach dem Eingriff auf Byte genau gleich groß (auf `/pelletskessel/` durchgängig 6 Byte größer als auf `/`, seitenspezifischer Inhalt, aber unverändert über die gesamte Messreihe). Kein `<link rel="stylesheet">` auf eine kompilierte Avada-Datei im `<head>`, weder vorher noch nachher. WP-Rocket-Used-CSS (`wpr-usedcss`, separater Mechanismus) hat sich wie erwartet neu aufgebaut (~199–212 KB je nach Seite/UA) – dieser Teil der Kette funktioniert; nur Avadas eigene Dynamic-CSS-Kompilierung zur Datei bleibt aus.

### Sichtprüfung

Anonyme Screenshots von `/` und `/pelletskessel/` bei 1440 × 900 und 390 × 844 (Headless Chrome, frisches Profil): Header, Navigation, Hero, Bild und Content-Karten sehen auf allen vier Aufnahmen unauffällig aus, keine fehlenden Stile oder verschobenen Karten. Eine anfängliche Auffälligkeit – bei 390 × 844 wirkten Navigationselemente und Textzeilen am rechten Rand abgeschnitten – erwies sich bei Gegenprobe im Browser-Pane (`document.documentElement.scrollWidth` = `clientWidth` = 390, kein horizontaler Überlauf) als Artefakt des alten `--screenshot`-Flags von Headless Chrome, nicht als echtes Layoutproblem.

### Lighthouse mobil, v13.5.0, je 3 Läufe

| Seite | Score (Median) | LCP (Median) | FCP (Median) | Dokumentgröße (Median, Lighthouse-Netzwerkmessung) |
|---|---|---|---|---|
| `/` | 0,87 | 3,90 s | 1,95 s | 574,2 KB |
| `/waermepumpen/` | 0,83 | 4,49 s | 1,85 s | 569,9 KB |

Vergleichswert 22.09. für `/` (13.5.0, 3 Läufe, laut Auftrag): LCP 3,9 s, FCP 2,0 s – praktisch identisch zu den hier gemessenen 3,90 s / 1,95 s. Das bestätigt, dass sich der Zustand seit der ursprünglichen Messung nicht verändert hat; für `/waermepumpen/` liegt kein Vergleichswert aus derselben Messreihe vor. Nachrichtlich: Die letzte Wärmepumpen-Messung aus dem Bildverkleinerungs-Eintrag vom 18.09. (vor dieser Regression, andere Ausgangslage) hatte LCP-Median 4,2 s; die hier gemessenen 4,49 s liegen leicht darüber, was zur beschriebenen Verschlechterung passt, aber kein sauberes Vorher/Nachher-Paar für genau diese Regression ist. „Reduce unused CSS“ meldet im ersten Homepage-Lauf geschätzte 168 KiB Einsparung – konsistent mit dem übergroßen Inline-Block.

### Grenzen

- Der Eingriff hat die Ursache nicht behoben. Avada kann laut eigener Meldung nicht in `uploads/fusion-scripts` schreiben (und vermutlich analog nicht in `uploads/fusion-styles`); beide Pfade liefern HTTP 404 statt einer bestehenden, aber leeren/gesperrten Datei. Kein FTP/SSH-Zugriff in dieser Session, um Verzeichnis oder Berechtigungen direkt zu prüfen oder anzulegen – laut Auftrag an dieser Stelle bewusst kein weiterer Eingriff, nur lesende Prüfung.
- WordPress-eigener Website-Zustand-Bericht meldet das übergeordnete „Uploads-Verzeichnis“ als „Beschreibbar“ – das ist eine Prüfung des Basisverzeichnisses, keine Aussage über die (fehlenden) Unterverzeichnisse `fusion-styles`/`fusion-scripts` selbst.
- Auffällig, aber nicht Teil dieses Auftrags: Avada zeigt aktuell Version 7.16.1 (Versionsverlauf: zuvor 7.13.3, 7.14.0, 7.15.6), während die Problembeschreibung von 7.15.6 ausging. Ob ein zwischenzeitliches Auto-Update zeitlich mit dem Beginn der Regression (19:08–19:25 Uhr) zusammenfällt, wurde nicht untersucht.
- Kein Zugriff auf Server-Logs oder PHP-Fehlerprotokolle, um die genaue Fehlerursache (Berechtigungen, offener `open_basedir`, Kontingent, o. Ä.) zu bestätigen.
- Sichtprüfung per Headless-Chrome-CLI, keine echten Geräte.

final result: failed

## Avada-CSS als Datei – 23. September 2026

### Diagnose

Avada-Systemstatus (`avada-status`) liefert nur Versionshistorie, Umgebungs- und Plugin-Daten, keine eigene Dynamic-CSS-Diagnose. Die relevanten Angaben liegen in Avada → Optionen → Leistung → Dynamisches CSS & JS: `fusion_options[css_cache_method]` ist per DOM-Wert bestätigt auf `file` gesetzt (Radio-Button „Datei" aktiv, kein UI-Fake). Im selben Bereich zeigt der JS-Compiler-Hinweis unverändert: „**IMPORTANT NOTE: JS Compiler is disabled. File does not exist or access is restricted.**" Für den CSS-Compiler gibt es keinen gleichwertigen Text-Hinweis in der UI, das Verhalten (stiller Fallback auf Inline, nie eine Datei) ist aber identisch.

`wp-content/uploads/fusion-styles/` und `wp-content/uploads/fusion-scripts/` antworten beide mit HTTP 404 (curl, anonym). Website-Zustand → Bericht → Dateisystem-Berechtigungen meldet WP-Hauptverzeichnis, `wp-content`, Uploads-, Plugins-, Themes- und Must-Use-Plugins-Verzeichnis als „Beschreibbar"; nur das Schriften-Verzeichnis „Existiert nicht" (nicht betroffen). Damit ist die Grundvoraussetzung für den Beschreibbar-Zweig erfüllt – die übergeordneten Verzeichnisse sind schreibbar, nur die konkreten Unterordner `fusion-styles`/`fusion-scripts` entstehen nie.

WordPress-Kern 6.8.10, PHP 8.4.11, Avada 7.16.1 (Avada Builder 3.16.1, Avada Core 5.16.1), WP Rocket 3.23.3.3.

### Eingriff

Gemäß Auftrag nur die eine Avada-Option angefasst, sonst nichts:

1. `css_cache_method` auf **Datenbank** gestellt, gespeichert, nach Seiten-Reload per DOM-Wert verifiziert (`checked: db = true`).
2. Unmittelbar danach zurück auf **Datei** gestellt, gespeichert, nach Reload erneut verifiziert (`checked: file = true`).
3. Aus dem Kontext von `#wpadminbar` per `fetch` `action=purge_cache&type=all` und `action=rocket_clean_saas` mit den echten, aus der Seite gelesenen Nonces aufgerufen – beide HTTP 200 mit Redirect zurück auf die Referrer-Seite.
4. Alle 11 Sitemap-Seiten (`wp-sitemap-posts-page-1.xml`) anonym per curl abgerufen, je mit mobilem und Desktop-UA (22 Requests, alle HTTP 200).
5. Kontrollschleife auf `/pelletskessel/` über 30 Minuten in 5-Minuten-Abständen (Hintergrundprozess, kein Sekundentakt): `wpr-usedcss` erscheint ab Minute 5 wieder zuverlässig (~201–212 KB je nach Seite) – die WP-Rocket-Pipeline selbst funktioniert. Der Avada-Inline-Block bleibt über alle sieben Messpunkte hinweg vorhanden und byteidentisch (1.423.481–1.423.508 B roh, Schwankung im Rahmen normaler dynamischer Inhalte), kein `<link>` auf eine fusion-styles-Datei zu keinem Zeitpunkt.

Keine sichtbar kaputte Seite danach (volles Avada-Inline-CSS bleibt ja erhalten), daher kein zusätzlicher WP-Rocket-Cache-Reset nötig.

### Vorher/Nachher

| Seite | UA | Übertragen vorher | Übertragen nachher | Roh vorher | Roh nachher | Avada-Inline vorher | Avada-Inline nachher | wpr-usedcss vorher | wpr-usedcss nachher |
|---|---|---|---|---|---|---|---|---|---|
| `/` | mobil | 197.280 B | 197.497 B | 1.468.134 B | 1.468.134 B | 1.118.924 B | 1.118.924 B | 212.283 B | 212.283 B |
| `/` | desktop | 183.317 B | 183.546 B | 1.270.583 B | 1.270.583 B | 1.118.924 B | 1.118.924 B | nicht vorhanden | nicht vorhanden |
| `/pelletskessel/` | mobil | 192.680 B | 192.719 B | 1.423.508 B | 1.423.508 B | 1.118.930 B | 1.118.930 B | 201.766 B | 201.766 B |
| `/pelletskessel/` | desktop | 193.711 B | 194.046 B | 1.423.188 B | 1.423.188 B | 1.118.930 B | 1.118.930 B | 201.458 B | 201.458 B |

Rohgröße und Avada-Inline-CSS-Länge sind vorher/nachher in jeder Zeile exakt gleich; nur die br-komprimierte Übertragungsgröße schwankt um 200–300 B, normales Kompressionsrauschen. Weder vorher noch nachher ein `<link rel="stylesheet">` auf eine kompilierte Avada-Datei im `<head>`. Auffällig: `wpr-usedcss` fehlt auf der Desktop-Variante von `/` durchgehend (vorher wie nachher) – ein bestehendes, vom heutigen Eingriff unabhängiges Verhalten, nicht weiter untersucht, da außerhalb des Auftragsumfangs.

### Sichtprüfung

Anonyme Screenshots (Headless Chrome, frisches Profil je Aufnahme) von `/` und `/pelletskessel/` bei 1440 × 900 und 390 × 844: Header, Navigation, Hero/Bild und Leistungskarten zeigen auf beiden 1440-Aufnahmen keine fehlenden Stile. Bei 390 × 844 wirken Navigationseinträge und Textzeilen am rechten Rand abgeschnitten – exakt dasselbe Bild wie im Eintrag vom 22./23.9., dort bereits als Artefakt des `--screenshot`-CLI-Flags identifiziert und per `scrollWidth`/`clientWidth`-Gegenprobe im Browser-Pane widerlegt (kein echter horizontaler Überlauf). Diese Gegenprobe wurde heute nicht wiederholt, da unverändert derselbe bekannte Effekt.

### Lighthouse mobil, v13.5.0, je 3 Läufe

| Seite | Score (Median) | LCP (Median) | FCP (Median) | Dokumentgröße (Median, `total-byte-weight`) |
|---|---|---|---|---|
| `/` | 0,86 | 3,96 s | 2,04 s | 574,5 KB |
| `/waermepumpen/` | 0,84 | 4,28 s | 1,97 s | 569,8 KB |

Vergleichswert 22.09. (Auftrag): Startseite Score 0,87 / LCP 3,90 s / FCP 1,95 s; Wärmepumpen Score 0,83 / LCP 4,49 s. Die heutigen Werte liegen innerhalb der üblichen Lauf-zu-Lauf-Schwankung um diese Referenz – keine messbare Verbesserung durch den Eingriff, wie angesichts der byteidentischen Vorher/Nachher-Werte zu erwarten war.

### Support-Anfragen (Entwürfe, nicht gesendet)

Vollständiger Text beider Anfragen in `/private/tmp/claude-501/-Users-andreas-GitHub-schmolengruber-at/727ce70c-d468-4e69-8378-0b38932a3fe5/scratchpad/avada-file/support-texts.txt` und im Bericht an den Auftraggeber. Kurzfassung: WP Rocket – RUCSS erzeugt Used CSS korrekt, entfernt aber Avadas Inline-Block nicht mehr, Verweis auf das ähnliche Issue wp-media/wp-rocket#5980. ThemeFusion – Dynamic CSS bleibt trotz „File"-Modus inline, `fusion-styles`/`fusion-scripts` entstehen nie, obwohl das übergeordnete Uploads-Verzeichnis laut Website-Zustand beschreibbar ist; Frage nach der genauen Schreibrechte-Prüfung und einem Debug-Weg.

### Grenzen

- Der Eingriff hat die Ursache nicht behoben, wie schon beim Versuch vom 22./23.9. mit `fusion_reset_all_caches`. Zwei unabhängige Mechanismen (kompletter Avada-Cache-Reset und gezielter Datenbank→Datei-Sprung der Compiling-Methode) haben beide keine Datei erzeugt – das spricht für ein strukturelles Schreibproblem auf Avada-Seite, nicht für einen reinen Cache-Stand.
- Kein FTP/SSH-Zugriff in dieser Session; Website-Zustand prüft nur das übergeordnete Uploads-Verzeichnis, nicht die konkreten (fehlenden) Unterordner `fusion-styles`/`fusion-scripts`.
- Laut Auftrag ausschließlich die eine Avada-Option angefasst – kein erneuter „Alle Avada Caches zurücksetzen", keine anderen Plugins oder Optionen ausprobiert.
- Kein Zugriff auf Server- oder PHP-Fehlerprotokolle zur Bestätigung der genauen Fehlerursache.
- Sichtprüfung per Headless-Chrome-CLI, keine echten Geräte; die 390-px-Auffälligkeit wurde als bekanntes Artefakt eingestuft, aber heute nicht erneut per Gegenprobe verifiziert.

final result: failed

## Support-Anfragen und Herkunft der Updates – 24./25. September 2026

Bezug: Issue #6 (Avada-CSS 1,1 MB inline, WP Rocket entfernt es seit 22.09. nicht mehr).

### Support-Anfragen

- **Avada:** am 24.09.2026 über My Avada → Submit a Ticket abgeschickt, Bestätigung „Your ticket has been submitted.“. Version 7.16.1, Seite und Website https://www.schmolengruber.at/, Hosting „move1 (Austria), Apache“, Nachricht wie in #6. WordPress- und FTP-Zugangsdaten bewusst nicht mitgeschickt.
- **WP Rocket:** am 24.09.2026 über das Help-Center-Formular abgeschickt, Thema „I'm having trouble with Remove Unused CSS“, Website schmolengruber.at aus dem Kundenkonto. Bestätigung „Thank you! … normally within 24 hours“. Das reCAPTCHA hat Andreas selbst gelöst.
- Stand 25.09.: In office@ostheimer.at und im Gmail-Konto ist weder eine Eingangsbestätigung noch eine Antwort von WP Rocket oder Avada angekommen. Die Kundenkonten laufen offenbar auf eine andere Adresse.

### Herkunft der Updates vom 22.09.

Die WordPress-Auto-Updates sind für Avada, Avada Builder/Core und WP Rocket ausgeschaltet (Plugins-Liste und Themes-Daten im Admin gelesen). Der ManageWP-Verlauf (Konto office@ostheimer.at) zeigt, Ortszeit:

| Uhrzeit | Aktion |
|---|---|
| 20:54 | WP Rocket 3.23.1 → 3.23.3.3 und Imagify 2.3.0 → 2.3.4 über ManageWP |
| 21:07 | Manuelle ManageWP-Sicherung „Vor Avada 7.16.1 2026-09-22“ (A1-Anschluss) |
| 21:08:47 | Avada-Theme-Dateien neu geschrieben, Update auf 7.16.1 außerhalb von ManageWP |
| 21:48 | Twenty Twenty-Four 1.5 → 1.6 über ManageWP |

Folgerung: Die Startseite war nach dem WP-Rocket-Update laut Lighthouse noch ~60 KB groß und wurde erst nach dem Avada-Update ~200 KB. Das spricht für Avada 7.16.1 als Auslöser, ist aber nicht bewiesen. Die ManageWP-Sicherung von 21:07 ist ein Rückweg auf Avada 7.15.6; ein Restore würde alles seit dem 22.09. abends zurücksetzen und käme nur als Test auf einer Kopie oder mit ausdrücklicher Freigabe in Frage.

Offen: Antworten beider Hersteller, Antwort von move1 zu Auftragsverarbeitungsvertrag und Log-Speicherdauer (Mail am 23.09. gesendet).

final result: pending

## Neue Datenschutzerklärung – 28. September 2026

Auftrag: den freigegebenen Entwurf aus `docs/datenschutz-entwurf-2026-09.md`
(nur Abschnitt 3 „Vollständiger Entwurf") auf Seite 183
(`/datenschutzerklaerung/`) veröffentlichen. Nichts anderes an der Seite
geändert; Meta-Description (Ostheimer SEO) unangetastet gelassen.

### Ersetzt

Vorheriger Rohinhalt (88.974 Zeichen, AdSimple-Generatortext) vollständig
ersetzt. Struktur wie bisher übernommen: `fusion_builder_container` →
`fusion_builder_row` → `fusion_builder_column` mit unverändertem
`[fusion_title size="1"]Datenschutzerklärung[/fusion_title]` (die einzige H1
der Seite) und einem neuen `fusion_text`-Inhalt (19.267 Zeichen) nach
demselben Markup-Muster wie das Impressum (h2-Abschnitte, `<p>`, `<a>`,
`mailto:`/`tel:`-Links, eine HTML-Tabelle). Backup des alten Rohinhalts unter
`/private/tmp/claude-501/-Users-andreas-GitHub-schmolengruber-at/727ce70c-d468-4e69-8378-0b38932a3fe5/scratchpad/dse/before-183.txt`,
Revision vor der Änderung: ID 700 (9.9.2026, 11:29 Uhr). Speichern per
`POST /wp-json/wp/v2/pages/183`, beide Male HTTP 200. Cache über
`#wpadminbar`-Links (`purge_cache&type=all`, `rocket_clean_saas`) geleert,
jeweils HTTP 200.

### Readback (anonym, curl, `Mozilla/5.0`, ohne Query-Parameter)

| Prüfung | Erwartet | Ergebnis |
|---|---|---|
| `/datenschutzerklaerung/` HTTP-Status | 200 | 200 |
| `/impressum/` HTTP-Status | 200 | 200 |
| `/` HTTP-Status | 200 | 200 |
| Anzahl `<h1` | genau 1 | 1 (aus dem unveränderten `fusion_title`) |
| Anzahl `<meta name="description"` | genau 1 | 0 |
| „Cloudflare" im Text | vorhanden | vorhanden |
| „Google Analytics" | 0× | 0× |
| „adsimple" | 0× | 0× |
| „[OFFEN" | 0× | 0× |
| `<img>` mit externer Quelle im Hauptinhalt | keine | keine (0 `<img>` im Hauptinhalt; die 3 `<img>` der Seite sind das Logo im Header, gleiche Domain) |
| Links im Hauptinhalt ohne 4xx/5xx | alle | `tel:`-Links nicht per HTTP prüfbar; `/impressum/` 200; `https://policies.google.com/privacy` 200 (HEAD); die beiden `/cdn-cgi/l/email-protection#…`-Links (Cloudflares E-Mail-Verschleierung für die neuen `mailto:`-Adressen) antworten mit 404 auf direkten `curl`-Aufruf – Gegenprobe auf `/impressum/` zeigt exakt dasselbe Verhalten für dessen eigenen, unveränderten `mailto:`-Link; das ist der normale, aus Abschnitt 1 des Entwurfs bekannte clientseitige Cloudflare-Mechanismus (funktioniert nur mit JS-Decoder im echten Browser), kein defekter Link |

Die fehlende Meta-Description ist keine Regression: `<meta name="description"`
fehlt auch auf `/impressum/` und fehlte schon vorher auf Seite 183 (geprüft an
den vor der Änderung gespeicherten Rohfassungen) – das SEO-Plugin liefert für
keine der beiden Seiten eine, unabhängig von diesem Eingriff. Nicht verändert,
also auftragsgemäß „unverändert gelassen".

### Sichtprüfung

Anonyme Screenshots (Headless Chrome, frisches Profil) bei 1440 × 900 und
390 × 844 stimmen im Kopfbereich (Überschriftengrößen, Abstände, Typografie)
sichtbar mit dem gleich aufgebauten Impressum überein. Eine erste
390-px-Aufnahme zeigte Überschriften und Tabellenzellen am rechten Rand
abgeschnitten; Gegenprobe im Browser-Pane
(`document.documentElement.scrollWidth === clientWidth === 390`) bestätigte
für die Überschriften den bereits im Eintrag „Avada-CSS-Regression" vom
22./23.9. dokumentierten Artefakt-Effekt des `--screenshot`-CLI-Flags (kein
echter Seitenüberlauf). Für die Tabelle ergab dieselbe Gegenprobe jedoch einen
echten Befund: `body { overflow-x: hidden }` schnitt die 652 px breite Tabelle
in einem nur 330 px breiten Spaltenbereich sichtbar ab (rechter Tabellenrand
bei x = 682 gegenüber 390 px Viewportbreite), statt sie scrollbar zu machen.
Korrektur: Tabelle in `<div style="overflow-x:auto; max-width:100%;
-webkit-overflow-scrolling:touch;"><table style="min-width:600px;">…`
gewrappt, erneut gespeichert (19.267 Zeichen) und Cache erneut geleert.
Erneute Prüfung im Browser-Pane bei 390 × 812: Wrapper hat jetzt
`overflow-x:auto`, `clientWidth 330` gegen `scrollWidth 652`, die Seite selbst
bleibt bei `scrollWidth === clientWidth === 390` – kein Seitenüberlauf mehr,
Tabelle ist innerhalb ihres eigenen Rahmens waagrecht scrollbar (Scrollleiste
sichtbar, Kopfzeilen „Empfänger/Zweck/Sitz/Rechtsgrundlage" und beide Zeilen
per Scroll vollständig erreichbar).

### Rückweg

Nicht benötigt. Für den Fall: `POST
/wp-json/wp/v2/pages/183/revisions/700/restore` oder Zurückschreiben von
`before-183.txt` per `POST /wp-json/wp/v2/pages/183`, danach Cache leeren.

### Grenzen

- Keine automatische Prüfung, ob externe Links (`policies.google.com`) dauerhaft
  erreichbar bleiben; nur Momentaufnahme.
- Sichtprüfung per Headless-Chrome-CLI und Browser-Pane-Emulation, kein Test
  auf einem physischen Gerät.
- Fehlende Meta-Description nicht behoben (außerhalb des Auftrags – nur Seite
  183, nicht das SEO-Plugin).

### Nachtrag 29.09.2026: erneut veröffentlicht auf web02

29.09.: auf dem richtigen Server (web02) erneut veröffentlicht, weil die
Veröffentlichung vom 28.09. auf einem veralteten Server hinter derselben IP
gelandet war. Die Angaben zu Revision, Readback und Meta-Description im
Eintrag vom 28.09. oben beziehen sich auf jenen Server. Der Stand dort wurde
am 29.09. weder geprüft noch verändert.

**Vorher (web02, 29.09. vor dem Eingriff):** `x-host: web02`, Seite 183
`modified` 2026-09-09T11:29:41, jüngste Revision **700**, Rohinhalt
88.974 Zeichen (AdSimple-Fassung, 223 Treffer „adsimple" in der
ausgelieferten Seite). Backup des Rohinhalts unter
`/private/tmp/claude-501/-Users-andreas-GitHub-schmolengruber-at/727ce70c-d468-4e69-8378-0b38932a3fe5/scratchpad/dse/before-183-web02.txt`
(SHA-256 `daae61a2…0894`, im Browser aus `content.raw` von web02 gebildet und
mit der Datei abgeglichen; byte-identisch mit `before-183.txt` vom 28.09.).

**Eingriff:** Nur Seite 183, nur `content`, per `POST
/wp-json/wp/v2/pages/183` (HTTP 200). Neuer Rohinhalt 19.275 Zeichen
(SHA-256 `4d5670de…64d5`), aus Abschnitt 3 des Entwurfs mit einem Skript
erzeugt und gegen die Quelle geprüft (Klartext des HTML identisch mit dem
Quelltext, Stand-Datum „29. September 2026"); Container, Row, Column und das
bestehende `fusion_title` (einzige H1) unverändert aus dem Altinhalt
übernommen. Nach dem Speichern per `GET` zurückgelesen: gespeicherter
Rohinhalt hat denselben SHA-256, `modified` 2026-09-29T21:21:28,
neue Revision **864**, Meta-Feld `_native_seo_description` unverändert.
Cache: `purge_cache&type=all` und `rocket_clean_saas` über die
`#wpadminbar`-Links, beide HTTP 200.

Gegenüber dem Inhalt vom 28.09. drei Abweichungen (sonst gleich):
Stand-Datum 29.09.; die zwei schließenden Anführungszeichen „…“ sind jetzt
typografisch wie in der Quelle (am 28.09. gerade `"`); der Link zu Google
zeigt die volle Adresse `https://policies.google.com/privacy` als Text.

**Readback (anonym, curl, `Mozilla/5.0`, ohne Query-Parameter; zusätzlich
direkt am Ursprung mit `--resolve www.schmolengruber.at:443:195.202.154.211`):**

| Prüfung | Erwartet | über Cloudflare | direkt am Ursprung |
|---|---|---|---|
| `/datenschutzerklaerung/` HTTP-Status | 200 | 200 | 200 |
| `x-host` | web02 | web02 | web02 |
| `/` und `/impressum/` HTTP-Status | 200 | 200, 200 | 200, 200 |
| Anzahl `<h1` | 1 | 1 („Datenschutzerklärung") | 1 |
| Anzahl `<meta name="description"` | 1 | 1 | 1 |
| „Cloudflare" | vorhanden | 12× | 12× |
| „Google Analytics" / „adsimple" / „[OFFEN" | 0× | 0× / 0× / 0× | 0× / 0× / 0× |
| „Stand: 29. September 2026" | 1× | 1× | 1× |
| Bilder | keine externen | keine im Hauptinhalt; 3 `<img>` der Seite (Logo) auf eigener Domain, kein externes `src`/`srcset` | gleich |
| Links im Hauptinhalt | ohne 4xx/5xx | `/impressum/` 200; `https://policies.google.com/privacy` 200 (GET und HEAD); `tel:` nicht per HTTP prüfbar; die zwei `/cdn-cgi/l/email-protection#…`-Links (Cloudflare-Verschleierung) ausgenommen | dort stehen die `mailto:`-Links im Klartext |
| Klartext Hauptinhalt gegen Entwurf | gleich | – | gleich (8.969 Zeichen) |

Vorher lieferte `/datenschutzerklaerung/` auf web02 ebenfalls genau ein
`<meta name="description"` (Text aus `_native_seo_description`); die Meta-Description
wurde nicht angefasst.

**Sichtprüfung:** Headless Chrome, frisches Profil, anonym, bei 1440 × 900
sowie ganzseitig (Überschriften, Absätze, Links, Tabelle, Stand-Zeile, Footer
unauffällig; Tabelle ohne Rahmen, der folgende h2 sitzt dicht darunter, wie am
28.09.) und bei 390 × 844: die CLI-Aufnahme ist am rechten Rand abgeschnitten,
das bekannte Artefakt des `--screenshot`-Flags (siehe Eintrag vom 22./23.9.).
Gegenprobe im Browser-Pane bei 390 × 844: `scrollWidth === clientWidth === 390`,
größter rechter Überschriftenrand 360 px, Tabellenwrapper `overflow-x:auto`
mit `clientWidth 330` gegen `scrollWidth 652`, also kein Seitenüberlauf und die
Tabelle im eigenen Rahmen scrollbar. Die Pane-Sitzung war als Admin
angemeldet (Admin-Leiste sichtbar), der Hauptinhalt ist derselbe.

**Rückweg:** nicht benötigt. Für den Fall: `before-183-web02.txt` per `POST
/wp-json/wp/v2/pages/183` zurückschreiben (Feld `content`), danach Cache leeren.

**Grenzen:** Kein Test auf einem physischen Gerät; `tel:`-Links und die
per JavaScript entschlüsselten E-Mail-Links nicht per HTTP prüfbar; externe
Links nur als Momentaufnahme; Cloudflare-Edge nicht gesondert geleert
(`cf-cache-status: DYNAMIC`, HTML wird dort nicht zwischengespeichert).

final result: passed

## Avada-Test: WP Rocket Optimize CSS Delivery – 4. Oktober 2026

Bezug: Issue #6, Avada-Support-Ticket 3461539988 (Vorschlag: in WP Rocket → Dateioptimierung „Optimize CSS Delivery“ ausschalten und prüfen, ob das Problem bleibt). Test von Andreas freigegeben. Zeiten Ortszeit, Messungen anonym per curl mit mobilem UA (Pixel 5), Arbeitsdateien im Scratchpad `avada-test/`.

### Befund

**Ausgeschaltet schreibt Avada seine CSS-Datei, eingeschaltet nicht.** Mit „Optimize CSS Delivery“ aus (und Seiten- sowie Avada-Cache geleert) liefert die Startseite einen `<link>` auf `/wp-content/uploads/fusion-styles/692f2f3678f48709066410d85432c3ca.min.css?ver=3.16.1` (HTTP 200) und keinen `fusion-stylesheet-inline-css`-Block mehr; das Verzeichnis `uploads/fusion-styles/` existiert danach (HTTP 403 statt vorher 404). Beim Wiedereinschalten (sonst nichts geändert) gibt Avada schon bei der ersten Anfrage wieder den 1,1-MB-Inline-Block aus und keinen Stylesheet-Link, obwohl die Datei weiter mit 200 erreichbar ist und die Avada-Option weiter auf „Datei“ steht. Das blieb über die gesamte Beobachtung von 30 Minuten (sechs Messpunkte im 5-Minuten-Abstand) unverändert.

Auslöser ist damit `remove_unused_css`: Im Formular war `async_css` schon vorher 0 und `async_css_mobile` blieb unverändert 1. Mit `?nowprocket` (WP Rocket überspringt seine Ausgabeverarbeitung) steht der Inline-Block weiterhin in der Seite (1.118.924 B, kein Link). Das spricht dafür, dass die Entscheidung in Avadas PHP-Ausgabe fällt und nicht in WP Rockets nachträglicher HTML-Verarbeitung; bewiesen ist es damit nicht.

Verzweigung laut Auftrag: **Zweig „Avada schreibt die Datei“**, danach Vergleich beider Zustände. Entscheidung: **Einstellung bleibt an (Ausgangszustand).**

### Ablauf

1. Vorher gelesen (`/wp-admin/options-general.php?page=wprocket`): `optimize_css_delivery` (UI-Checkbox) an, `remove_unused_css=1`, `async_css=0`, `async_css_mobile=1`, Safelist 39 Zeilen (`.sch-header` … `.sch-legacy-mobile`). Rückweg-Datei: `avada-test/baseline-wprocket.txt`.
2. 09:06 ausgeschaltet: `FormData` des Formulars `#wprocket_options` an `options.php`, nur `remove_unused_css=0`, `async_css=0` gesetzt und die UI-Checkbox weggelassen (wie bei abgewählter Checkbox; die Seite setzt dabei per JS ebenfalls beide Werte auf 0). Nach Neuladen gelesen: Checkbox aus, `remove_unused_css=0`, `async_css=0`, `async_css_mobile=1`, Safelist unverändert 39 Zeilen, 63 statt 64 Formularfelder (nur die Checkbox fehlt).
3. WP Rocket „Cache leeren und vorladen“ (`purge_cache&type=all`), dann Avada-Cache zurückgesetzt (`fusion_reset_all_caches` mit dem Nonce von `#fusionredux-form-wrapper`, HTTP 200, Rückgabe „0“ wie am 22.09.), danach WP Rocket erneut geleert.
4. Gemessen (siehe Tabellen), Lighthouse 3 × je Seite.
5. 09:10 wieder eingeschaltet (`remove_unused_css=1`, `async_css=0`, Checkbox an), nach Neuladen gelesen und verglichen: alle Werte wie in Schritt 1, 64 Felder, Safelist 39 Zeilen. Cache geleert, Messung sofort und danach 30 Minuten lang alle 5 Minuten; Lighthouse 3 × je Seite im Endzustand; Screenshots.
6. `x-host: web02` vor und nach jedem Speichern/Reset sowie bei jedem Messpunkt (insgesamt über 20 Prüfungen), nie eine Abweichung.

### Messwerte (mobil, Startseite `/` und `/pelletskessel/`)

| Zustand | Seite | Roh | Übertragen (br) | Avada-Inline-CSS | Avada-Datei | `wpr-usedcss` | Stylesheet-Links im Head |
|---|---|---|---|---|---|---|---|
| Vorher (an) | `/` | 1.468.134 B | 197.261 B | 1.118.924 B | keine | 212.283 B | 0 |
| Vorher (an) | `/pelletskessel/` | 1.423.508 B | 193.107 B | 1.118.930 B | keine | 201.766 B | 0 |
| Aus | `/` | 138.956 B | 28.976 B | 0 | `692f…3ca.min.css`: 200, 1.197.595 B roh, 163.651 B gzip | 0 | 2 (block-library + Avada-Datei) |
| Aus | `/pelletskessel/` | 105.638 B | 25.554 B | 0 | `5cdd…23c.min.css`: 200, 1.198.198 B roh, 163.752 B gzip | 0 | 2 |
| Wieder an, +0 bis +30 min | `/` | 1.468.134 B (alle Punkte) | 197.0–197.6 KB | 1.118.924 B (alle Punkte) | keine im HTML, Datei weiter 200 | 212.283 B (alle Punkte) | 0 |
| Wieder an, +0 bis +30 min | `/pelletskessel/` | 1.423.508 B (alle Punkte) | 192.8–193.2 KB | 1.118.930 B (alle Punkte) | keine im HTML, Datei weiter 200 | 201.766 B (alle Punkte) | 0 |

Die Datei kommt mit `cache-control: public, max-age=31536000, immutable` und läuft über Cloudflare (zweiter Abruf `HIT`, gzip). Gegenprobe der Messung: `grep` auf die gespeicherten HTML-Dateien bestätigt 0 Treffer für `fusion-stylesheet-inline-css` im Zustand „aus“ und je einen im Zustand „an“. Ein erster Messlauf hatte die Rohgröße fälschlich aus `size_download` gelesen (das ist die Übertragungsgröße); der Fehler fiel an der Gleichheit von Roh und Übertragen auf, das Skript wurde korrigiert und alle gemeldeten Werte stammen aus dem korrigierten Lauf.

### Lighthouse mobil, v13.5.0, je 3 Läufe, Median

| Zustand | Seite | Score | LCP | FCP | Dokument + CSS laut Lighthouse |
|---|---|---|---|---|---|
| An (Endzustand) | `/` | 0,86 (0,86 / 0,86 / 0,87) | 3,93 s | 1,92 s | Dokument 211.971 B, Summe 587.795 B |
| An (Endzustand) | `/waermepumpen/` | 0,84 (0,83 / 0,86 / 0,84) | 4,35 s | 1,86 s | – |
| Aus | `/` | 0,80 (0,81 / 0,80 / 0,79) | 4,67 s | 2,30 s | Dokument 31.489 B + Avada-CSS 164.335 B + block-library 15.955 B, Summe 587.653 B |
| Aus | `/waermepumpen/` | 0,80 (0,73 / 0,80 / 0,80) | 4,83 s | 2,72 s | – |
| Referenz 23.09. (an) | `/` / `/waermepumpen/` | 0,86 / 0,84 | 3,96 s / 4,28 s | – | – |

Der Endzustand deckt sich mit der Referenz vom 23.09. Der ausgeschaltete Zustand ist beim HTML 91 % kleiner (139 KB statt 1,47 MB roh), aber nicht beim Gesamtgewicht des Erstaufrufs: die 1,2 MB große Avada-Datei (164 KB gzip) steht jetzt als eigene, renderblockierende Anfrage daneben und die ungenutzten Regeln werden nicht mehr entfernt. Ergebnis: LCP +0,74 s auf der Startseite und +0,48 s auf `/waermepumpen/`, Score −0,06 bzw. −0,04. Besser wäre „aus“ nur bei Wiederholungsaufrufen (Datei ist ein Jahr cachebar); das wurde nicht gemessen. Deshalb bleibt der Ausgangszustand.

### Endzustand

WP Rocket → Dateioptimierung → **Optimize CSS Delivery: an**, Methode Remove Unused CSS (`remove_unused_css=1`, `async_css=0`, `async_css_mobile=1`), Safelist unverändert (39 Zeilen), 64 Formularfelder wie vorher. Gelesen am 04.10. um 09:41 nach frischem Laden der Einstellungsseite. Avada-Option „CSS Compiling Method“ unverändert **Datei**. Die beiden erzeugten Dateien unter `uploads/fusion-styles/` liegen weiter dort (Antwort 200), werden aber nicht ausgeliefert. Die Seiten sind wie vor dem Test: ca. 1,47 MB roh, ca. 197 KB übertragen.

### Sichtprüfung (Endzustand, anonym)

Puppeteer-core mit dem installierten Chrome, frisches Profil je Aufnahme, Viewport-Emulation statt `--screenshot`-Flag (daher ohne den bekannten Randartefakt): `/` und `/pelletskessel/` bei 1440 × 900 und 390 × 844. Kopfzeile, Navigation, Hero, Bild, Leistungsliste, Prozessleiste und Anruf-Leiste vollständig gestaltet, keine fehlenden Stile; `scrollWidth` = `clientWidth` (1440 bzw. 390), keine fehlgeschlagenen Requests und keine Antworten ≥ 400.

### Antwort an Avada (Entwurf, nicht gesendet)

> Test result: with "Optimize CSS Delivery" switched off, Avada writes its CSS file. With it switched on, Avada outputs the 1.1 MB inline block again.
>
> Setup: Avada 7.16.1, WP Rocket 3.23.3.3, "CSS Compiling Method" = File throughout.
>
> 1. WP Rocket > File Optimization > "Optimize CSS Delivery" off (sets remove_unused_css and async_css to 0), saved.
> 2. Purged the WP Rocket cache and ran "Reset Avada Cache".
> 3. Fetched the pages anonymously.
>
> With the option off, https://www.schmolengruber.at/ links /wp-content/uploads/fusion-styles/692f2f3678f48709066410d85432c3ca.min.css?ver=3.16.1 (HTTP 200, 1,197,595 bytes, 163,651 bytes gzip) and has no fusion-stylesheet-inline-css block. The HTML drops from 1,468,134 to 138,956 bytes (197 KB to 29 KB transferred). The directory uploads/fusion-styles exists now (it returned 404 before).
>
> With the option switched back on (nothing else changed), the very next request again contains the 1,118,924-byte inline block and no stylesheet link, although the file from step 2 is still there (HTTP 200) and the setting is still File. It stayed like that for 30 minutes. It is the same with ?nowprocket in the URL, so the decision seems to be made in Avada's own output, not by WP Rocket's HTML processing afterwards.
>
> We cannot leave the option off: without Remove Unused CSS the 1.2 MB file is render-blocking, and Lighthouse mobile on the home page goes from score 0.86 / LCP 3.9 s to 0.80 / LCP 4.7 s. Until the update to 7.16.1 on 22 Sept the home page was about 60 KB, right after it about 200 KB.
>
> Two questions:
> 1. What exactly does Avada 7.16.1 check to fall back to inline output when WP Rocket's Remove Unused CSS is active (option, filter, constant)?
> 2. Is there a supported filter or setting to keep the file output while Remove Unused CSS stays on?
>
> Thanks, Andreas Ostheimer

### Grenzen

- Im Zustand „aus“ nur mobil per curl und Lighthouse gemessen, keine Desktop-Messung und keine eigene Sichtprüfung (nur die Lighthouse-Läufe haben die Seite gerendert); dieser Zustand war etwa vier Minuten live (09:06 bis 09:10).
- Nicht getrennt getestet, ob „aus“ allein ohne den Avada-Cache-Reset reicht. Dass „an“ trotz vorhandener Datei Inline liefert, spricht aber dafür, dass der Schalter ausschlaggebend ist und nicht der Reset.
- Kein Zugriff auf Avada-Quelltext oder PHP-Logs; ob Avada die Option, einen Filter oder eine Konstante von WP Rocket prüft, ist offen (Frage 1 an den Support). Der `?nowprocket`-Test ist ein Indiz, kein Beweis.
- Vorteil für Wiederholungsaufrufe im Zustand „aus“ (Browser-Cache der Avada-Datei) nicht gemessen. Lighthouse: je drei simulierte Läufe, im Zustand „aus“ auf `/waermepumpen/` ein Ausreißer (0,73).
- Die Frage nach der Schreibprüfung von `uploads/fusion-styles` entfällt vorerst, weil die Datei entsteht und das Verzeichnis angelegt wird. Der Hinweis „JS Compiler is disabled. File does not exist or access is restricted.“ in den Avada-Optionen wurde heute nicht erneut geprüft.

final result: pending

## Serverfrage geklärt (Antwort move1, 06.10.2026)

Bezug: Issue #7 (Stand der Server-Dateien am 28.09.). Hinter der Ursprungs-IP 195.202.154.211 stehen zwei Server in einem HA-Verbund, web01 und web02. Richtig ist **web02**, erkennbar am Antwort-Header `x-host: web02`.

- web02 wurde 2023 für die Seite auf schnellerer Hardware eingerichtet. web01 ist der Hauptserver und inzwischen ebenfalls schnell.
- Die Hochverfügbarkeit läuft auf VM-Ebene.
- Der Abgleich der Dateien von web02 nach web01 war gestört. Laut Mario ist er behoben; er hat das am 05.10. mit den Backups von Fr, Sa und So geprüft. Unterschiede gab es nur bei `fusion-gfonts` und im Cache.
- Die alte Kopie gibt es nicht mehr. web01 bleibt im HA-Verbund.
- Eigene Messung 06.10. um 11:29: 10 von 10 Abrufen kamen von web02.
- **Regel bleibt:** `x-host` vor und nach jedem Speichern prüfen. Wer speichert, während web01 einspringt, verliert die Änderung. Am 28.09. gingen so alle Admin-Änderungen des Tages verloren.

## Updates 06.10.2026: Avada 7.16.2, WP Rocket 3.23.5.1, WordPress 7.1.2

Bezug: Issue #6. Freigabe von Andreas am 06.10.2026, Zeiten Ortszeit. Die drei Updates liefen **einzeln in dieser Reihenfolge**, nach jedem Schritt wurde nachgemessen. Messungen anonym per curl (`Mozilla/5.0`), Lighthouse 13.5.0 mobil, Sichtprüfung mit Puppeteer-core und dem eingebauten Browser. Rohdaten liegen im Scratchpad der Sitzung, die Readbacks in `design-assets/seo-migration/`.

### Backup

ManageWP, manuell, Name **„Vor Updates 2026-10-06 (Avada 7.16.2, WP Rocket 3.23.5.1, WP 7.1.2)“**, fertig am 06.10.2026 um 11:49, 292,99 MB (WordPress 6.8.10, Avada 7.16.1). Zusätzlich existierte das geplante Backup von 03:51. Zurückgespielt wurde nichts.

### Ablauf

| Zeit (ca.) | Schritt |
|---|---|
| 11:35–11:46 | Ausgangslage: x-host, Readback, HTML-Kennzahlen, WP-Rocket-Einstellungen gelesen, Lighthouse 2 ×, Screenshots |
| 11:49 | Backup fertig |
| bis 11:53 | Avada 7.16.1 → 7.16.2, danach Avada Builder 3.16.1 → 3.16.2 und Avada Core 5.16.1 → 5.16.2 (von Avada angefordert, zum selben Release), WP Rocket „Cache leeren und vorladen“ 11:53 |
| 12:02 | WP Rocket 3.23.3.3 → 3.23.5.1, Cache leeren 12:03 |
| 12:07 | WordPress 6.8.10 → 7.1.2–de_DE (die Datenbank wurde dabei automatisch aktualisiert, es gab keinen eigenen Dialog „Datenbank aktualisieren“), **Ursprungsabruf von web01, STOPP**, danach freigegeben |
| 12:11 | Cache leeren, Builder-Test der Startseite, Nachmessen |

### Gesamttabelle

Startseite „gecacht“ = URL ohne Query-Parameter, so liefert WP Rocket die Seite aus dem Seitencache aus. „Frisch“ = mit `?nc=<zufall>`, das umgeht den Cache und enthält auch kein `wpr-usedcss`.

| Messpunkt | Vorher | Avada | WP Rocket | WordPress |
|---|---|---|---|---|
| x-host (6 über Cloudflare + 4 am Ursprung) | 10/10 web02 | 10/10 (vor, nach Theme, nach Begleit-Plugins) | 10/10 (vor, nach Update, nach Cache leeren) | vor dem Update 10/10, **direkt danach 9/10: 1 Ursprungsabruf von web01**, dann 10/10 |
| Versionen | Avada 7.16.1, Builder 3.16.1, Core 5.16.1, WP Rocket 3.23.3.3, WP 6.8.10 | Avada 7.16.2, Builder 3.16.2, Core 5.16.2 | WP Rocket 3.23.5.1 | WP 7.1.2 |
| HTML Startseite, gecacht | 1.463.788 B | 1.485.715 B | 1.485.715 B | 1.483.690 B |
| HTML Startseite, frisch | 1.246.238 B | 1.268.165 B | 1.268.165 B | 1.270.939 B |
| `fusion-stylesheet-inline-css` | ja (1) | ja (1) | ja (1) | ja (1) |
| `wpr-usedcss` (gecacht) | ja (1) | ja (1) | ja (1), sofort nach dem Cache-Leeren | ja (1) |
| Link auf `uploads/fusion-styles/` | nein | nein | nein | nein |
| `<meta name="description"` | 1 | 1 | 1 | 1 |
| Lighthouse Lauf 1 (Performance / LCP) | 0,85 / 4,1 s | 0,86 / 3,9 s | 0,85 / 4,1 s | 0,86 / 4,0 s |
| Lighthouse Lauf 2 (Performance / LCP) | 0,86 / 3,9 s | 0,86 / 3,9 s | 0,86 / 3,9 s | 0,87 / 3,9 s |
| Readback gecacht gegen Vorstufe | Basis | 20 Abweichungen auf 5 Seiten (alte Cache-Kopien, siehe unten) | 0 | 0 |
| Readback frisch gegen Vorstufe | – | 0 gegen gecacht | 0 | 0 |
| Seiten mit Status ≠ 200 oder „kritischer Fehler“ (11) | 0 | 0 | 0 | 0 |
| Sitemaps (`sitemap_index`, `page-sitemap`, `post-sitemap`) | 301, 301, 301 | 301 | 301 | 301 |
| WP-Rocket-Einstellungen (nur gelesen) | `remove_unused_css=1`, `async_css=0`, `async_css_mobile=1`, `minify_css=0`, `minify_js=0`, `delay_js=1`, `defer_all_js=1`, `lazyload=1` | unverändert | unverändert, neu das Formularfeld `cdn_state=rocketcdn_free` | unverändert |
| Auffälligkeiten | – | 5 Seiten mit neuer SEO-Ausgabe (siehe unten) | keine | ein web01-Treffer (siehe unten) |

Der Readback prüft pro Seite Status, Titel, Description, Canonical, Robots, Open-Graph-/Twitter-Tags und JSON-LD (11 Seiten) sowie die drei Dateien `sitemap_index.xml`, `page-sitemap.xml`, `wp-sitemap.xml` und `robots.txt`. Bei den WP-Rocket-Einstellungen wurden alle Formularfelder verglichen; geändert haben sich nur `minify_css_key` und `minify_js_key`, die das Cache-Leeren neu erzeugt, und ab 3.23.5.1 kam das Feld `cdn_state` hinzu.

### Veraltete Cache-Kopien ohne SEO-Ausgabe (05./06.10.)

Beim Readback nach dem Avada-Update wichen **5 Seiten** vom Ausgangszustand ab: `/waermepumpen/`, `/klimaanlage-und-klimaanlagenservice/`, `/neubauinstallationen/`, `/sanierungsarbeiten/`, `/impressum/`.

- **Vorher (gecachte Fassung, gemessen am 06.10. vor 11:44):** Titel mit Gedankenstrich „–“, keine Meta-Description, keine Open-Graph-Tags, kein JSON-LD. Das ist die Ausgabe ohne Ostheimer SEO.
- **Nachher (nach dem ersten Cache-Leeren um 11:53):** Titel mit „-“, Description, 10 Open-Graph-Tags und JSON-LD. Das entspricht `final.json` der SEO-Migration. Canonical, Robots und Status blieben auf allen 11 Seiten gleich.
- **Vermutung:** WP Rocket hat auf diesen Seiten veraltete Cache-Kopien ausgeliefert; das Leeren hat sie neu erzeugt. Dasselbe Muster hatte der PM am 05.10. auf `/kleine-reparaturen-und-installationen/` gesehen. Die Abweichung kommt nach dieser Einschätzung nicht von Avada.
- **Ursache offen.** Belegen lässt sich das nicht, weil vor dem Avada-Update kein Readback ohne Cache gemacht wurde. Seitdem wird bei jedem Schritt zusätzlich die frische Ausgabe (`?nc=`) gemessen: sie war in allen Stufen identisch mit der gecachten Fassung.
- **Überwachung läuft:** Ein Prüfskript des PM schaut 24 Stunden lang alle 10 Minuten auf Cache und frische Ausgabe. Nachverfolgung im neuen Issue „Zeitweise Antworten von web01 und Cache-Kopien ohne SEO-Ausgabe“.
- **Ergebnis der Überwachung (06.10. 12:01 bis 07.10. 12:35):**
  - 144 Läufe mit je 11 Seiten, gemessen wurden die gecachte und die frische Fassung.
  - Alle 3.167 Antworten hatten `x-host: web02`.
  - Alle 1.584 gecachten und 1.583 frischen Fassungen hatten Meta-Description und JSON-LD. Ein frischer Abruf (`/sanierungsarbeiten/`, 06.10. 16:31) lief nach 40 s ins Timeout.
  - WP Rocket hat den Cache in dieser Zeit dreimal neu aufgebaut, alle Seiten wieder mit SEO-Ausgabe. Die Neuaufbauten liefen um 21:11 UTC, um 07:12 UTC und für `/` und `/pelletskessel/` um 08:05 UTC; die Lebensdauer liegt also bei rund 10 Stunden.
  - Das Muster vom 05./06.10. hat sich nicht wiederholt.
  - Damals haben zwei Neuaufbauten Kopien ohne SEO-Ausgabe erzeugt: am 05.10. um 15:17 UTC und am 06.10. früh, rund 10 Stunden nach dem Leeren um 22:42.
  - Am 05.10. hat move1 am Abgleich zu web01 gearbeitet. Ein Zusammenhang ist möglich, aber nicht belegt.
  - Beim nächsten Update daher vorher und nachher die frische Fassung messen und die Überwachung erneut laufen lassen.

### web01-Treffer nach dem Kern-Update (06.10. ca. 12:07)

Direkt nach dem WordPress-Update kam bei der x-host-Prüfung **ein Ursprungsabruf von vier** von web01 (Cloudflare 6 von 6 web02). Das war ein STOPP nach den Regeln dieses Auftrags. Danach:

- Eigene Wiederholung ca. 12:08: 12 von 12 Ursprungsabrufen und 3 von 3 über Cloudflare web02, alle mit `generator` „WordPress 7.1.2“. Weitere vollständige Prüfungen um 12:10, 12:11 und nach dem Builder-Test jeweils 10 von 10.
- Der PM hat anschließend 120 Abrufe direkt am Ursprung gemacht: 120 von 120 web02 (Ostheimer SEO 1.5.0, Avada 7.16.2).
- **Vermutung des PM, nicht belegt:** Der Wartungsmodus während des Kern-Updates (503) hat die HA kurz auf web01 umschalten lassen.
- **Nicht aufgezeichnet:** Größe und Inhalt der web01-Antwort; das Skript hat nur den Header gespeichert. Ob der Abgleich der Dateien nach web01 zu diesem Zeitpunkt schon den neuen Stand hatte, ist offen.
- In derselben Minute wurde `wp-admin/update-core.php` geöffnet, bevor das Ergebnis der Prüfung gelesen war (ein reines Lesen, nichts gespeichert). Welcher Server es beantwortet hat, ist unbekannt.

### Builder-Test der Startseite (nach dem Kern-Update)

12:11, direkt davor x-host am Ursprung 4 von 4 web02. `post.php?post=2&action=edit` geöffnet: Der Avada Builder lädt (Schalter „Back-end Builder“, Metaboxen „Avada Builder Settings“, „Avada Builder“, „Library“, „Saved Containers/Columns/Elements“, `FusionPageBuilderApp` geladen), kein „kritischer Fehler“, keine Konsolenfehler. **Ohne Speichern verlassen**, es erschien kein „Seite verlassen?“-Dialog. Die Bearbeitungssperre (`_edit_lock`) kann dabei geschrieben worden sein; das war freigegeben.

### Lighthouse mobil, v13.5.0, 2 Läufe je Stufe, Startseite

| Stufe | Lauf 1 | Lauf 2 | FCP | Gesamtgröße laut Lighthouse |
|---|---|---|---|---|
| Vorher | 0,85 / LCP 4,1 s | 0,86 / 3,9 s | 2,1 s | 574 KiB |
| Avada | 0,86 / 3,9 s | 0,86 / 3,9 s | 2,0 s | 577 KiB |
| WP Rocket | 0,85 / 4,1 s | 0,86 / 3,9 s | 2,0 s | 577 KiB |
| WordPress | 0,86 / 4,0 s | 0,87 / 3,9 s | 1,8–2,0 s | 577 KiB |

Alle Werte liegen im Rahmen der Referenz vom 04.10. (0,86 / LCP 3,93 s); TBT 0 ms, CLS 0.

### Sichtprüfung

Anonym mit Puppeteer-core und frischem Profil je Aufnahme: `/` und `/waermepumpen/` bei 1440 × 900 und 390 × 844, vollständige Seite, vor jedem Update und nach jeder Stufe. Je Aufnahme `scrollWidth` = `clientWidth`, keine Antworten ≥ 400, kein „kritischer Fehler“. Seitenhöhen in allen Stufen gleich (2635, 3396, 1912, 3161 px). Die PNG-Prüfsummen sind nach WP Rocket und nach WordPress bei allen vier Aufnahmen gleich dem Ausgangszustand; nach Avada war nur die Aufnahme `/` Desktop in den Bytes anders, im Bild war kein Unterschied zu erkennen. Dazu im eingebauten Browser (angemeldet, mit Admin-Leiste) Start- und Wärmepumpen-Seite mobil und der Kopfbereich auf Desktop: Kopfzeile, Navigation, Hero, Bild und Anrufleiste vollständig gestaltet.

### Ergebnis für Issue #6

Der **Inline-Block bleibt** mit Avada 7.16.2, WP Rocket 3.23.5.1 und WordPress 7.1.2: `fusion-stylesheet-inline-css` 1, `wpr-usedcss` 1, kein Link auf `uploads/fusion-styles/`. Die Startseite ist gecacht 1,48 MB groß (vorher 1,46 MB), Lighthouse unverändert bei 0,85 bis 0,87 und LCP 3,9 bis 4,1 s. Die Updates haben das CSS-Problem weder behoben noch verschlechtert.

### Grenzen

- Der Inline-Block wurde in jeder Stufe nur wenige Minuten beobachtet (nach Avada ca. 5 Minuten, dann nach jedem Schritt ein bis zwei Messungen), nicht wie am 04.10. über 30 Minuten.
- Lighthouse: zwei simulierte Läufe je Stufe auf der Startseite, keine Messung von `/waermepumpen/`.
- Die Sichtprüfung im eingebauten Browser war wegen der Breite des Browser-Fensters nur teilweise bei 1440 Breite möglich; die vollständigen Desktop-Aufnahmen stammen von Puppeteer. Kein Test auf einem physischen Gerät.
- Die WP-Rocket-Einstellungen wurden nur gelesen, nicht gespeichert. Ein Feld mehr (`cdn_state`) im Formular nach 3.23.5.1 wurde nicht weiter geprüft.
- Zwei Befunde bleiben offen: die Ursache der veralteten Cache-Kopien und der einmalige web01-Treffer. Beide laufen im neuen Issue weiter.
- Der Zustand des Dateiabgleichs web02 → web01 nach dem Kern-Update wurde nicht geprüft; das klärt der PM mit move1.

final result: passed
