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

## Security-Header und Browser-Caching – 16. September 2026

Kein FTP/SSH-Zugang; der WordPress-Stammordner ist laut Website-Zustand beschreibbar. Umsetzung über ein site-spezifisches Plugin `wp-plugins/schmolengruber-server-headers/` (Quelle im Repo, per Upload-Formular installiert, per REST aktiviert). Beim Aktivieren schreibt es mit `insert_with_markers()` einen Marker-Block „Schmolengruber Server Headers“ in die `.htaccess`, beim Deaktivieren entfernt es ihn wieder. Alle Regeln liegen in `IfModule mod_headers.c` / `mod_expires.c`. Zusätzlich sendet ein `send_headers`-Hook die Security-Header für PHP-Antworten.

Readback per curl: HTML, WebP, WOFF2 und Sitemap liefern `Strict-Transport-Security: max-age=31536000` (ohne includeSubDomains, weil Subdomains nicht geprüft sind), `X-Content-Type-Options: nosniff`, `X-Frame-Options: SAMEORIGIN`, `Referrer-Policy: strict-origin-when-cross-origin`, `Permissions-Policy`. Statische Dateien zusätzlich `Cache-Control: public, max-age=31536000, immutable`; HTML bewusst ohne. Kein `Expires`-Header sichtbar, mod_expires ist auf dem Host offenbar nicht geladen; `Cache-Control` reicht. Bewusst kein CSP, weil Avada und WP Rocket Inline-Skripte einsetzen.

final result: passed
