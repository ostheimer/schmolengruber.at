# Site-Review schmolengruber.at – 16. September 2026

Geprüft: Startseite, 8 Leistungsseiten, Impressum, Datenschutzerklärung.
Viewports: Desktop 1440 × 900 und Smartphone 390 × 844 (Chromium-Emulation, In-App-Browser).
Zusätzlich: kanonische HTML-Antworten per curl (11 Seiten), Lighthouse lokal (Mobil: Startseite,
Wärmepumpen, Datenschutz; Desktop: Startseite, Pelletskessel), Redirects, Header, Sitemap, Schema.

## Stand der offenen GitHub-Issues

| Issue | Status 16.09. | Befund |
|---|---|---|
| #4 SEO Meta-Descriptions | **offen, reproduziert** | Startseite + Wärmepumpen: 2× `meta description`. 6 Leistungsseiten: nur die automatisch zusammengesetzte Avada-Beschreibung („…Symbolbild1Beratung…“). Impressum/Datenschutz: keine. Verursacher der zweiten Ausgabe ist Avadas eigene Open-Graph-Ausgabe (Block nach den Favicons, vor `og:locale`), nicht Yoast. |
| #2 Symbolbilder fachliche Abnahme | offen, extern | Braucht Hersteller/Installateur. Technisch nichts zu tun. |

## Lighthouse

| Seite | Gerät | Perf | A11y | BP | SEO | LCP |
|---|---|---|---|---|---|---|
| Startseite | Mobil | 100 | 100 | 100 | 100 | 1,0 s |
| Wärmepumpen | Mobil | **81** | 100 | 100 | 100 | **4,8 s** |
| Datenschutz | Mobil | 98 | 95 | 100 | 92 | 2,2 s |
| Startseite | Desktop | 100 | – | – | – | 0,7 s |
| Pelletskessel | Desktop | 100 | – | – | – | 0,7 s |

## Befunde nach Priorität

### P1 – behebt messbare Probleme

1. **Doppelte/automatische Meta-Descriptions (#4).** Fix: Avada → Global Options → Advanced →
   Theme Features → „Open Graph Meta Tags“ aus; danach in Yoast für Startseite + 8 Leistungsseiten
   je eine Beschreibung (max. 155 Zeichen) eintragen; WP-Rocket-Cache leeren; curl-Readback.
   Nebeneffekt: Avada setzt auch `og:image` auf den 597 × 54-px-Schriftzug → in Yoast ein
   1200 × 630-Standardbild hinterlegen.
2. **Wärmepumpen-Hero 277 KB (1536 px, kein srcset)** → LCP 4,8 s mobil. Die anderen sieben
   Motive liegen bei 60–115 KB. Bild auf ~1200 px / Qualität 75 neu exportieren (Ziel < 100 KB);
   Karten-Bilder auf der Startseite (286 px Anzeige, 1536 px Quelle) ebenfalls verkleinern oder
   srcset ergänzen.
3. **Server: nur HTTP/1.1, keine Cache-Control/Expires auf statischen Dateien** (550 KB pro Besuch
   neu validiert). Lighthouse schätzt 620–760 ms Ersparnis durch HTTP/2. Hosting-Ebene:
   HTTP/2 aktivieren; WP Rocket → „Browser Caching“ bzw. `.htaccess`-Expires-Regeln prüfen
   (fehlen offenbar auf diesem Apache).

### P2 – Sichtbarkeit und Vertrauen

4. **Schema.org nur `Organization`**, kein `LocalBusiness`/`Plumber` mit Adresse, Telefon,
   Öffnungszeiten, Einzugsgebiet. Yoast: Organisation → Lokales Unternehmen, oder JSON-LD im
   Footer-Header ergänzen.
5. **Leistungsseiten inhaltlich dünn**: je ~130 Wörter, identischer 4-Schritte-Ablauf auf allen
   acht Seiten, keine FAQ, keine Förderhinweise (Wärmepumpe/Pellets: „Raus aus Öl und Gas“,
   Sanierungsbonus NÖ), keine Querverweise zwischen verwandten Leistungen, keine Referenzen.
6. **Startseite ohne Primär-CTA im Hero**: nur Fließtext „Vereinbaren Sie einen
   Besichtigungstermin“, Kontakt erst weiter unten (dann 3× Telefon). Kein Vertrauensblock
   (seit wann, Team, Region/Einzugsgebiet, Marken, Notdienst?). Mobiler Hero hat kein Bild.
7. **Datenschutzerklärung** ist AdSimple-Generik (Fassung 20.08.2024) und nennt Google Analytics,
   Google Maps, Google Fonts und Cookies – nichts davon ist auf der Seite messbar (Fonts lokal,
   keine Analytics, keine Karten-Einbettung). Zusätzlich lädt die Seite ein Bild von adsimple.at
   (Drittanbieter-Request ausgerechnet auf der Datenschutzseite; ohne alt). 8100 Wörter, mobil
   75 000 px lang → auf tatsächlich genutzte Dienste kürzen, Inhaltsverzeichnis.
8. **Keine Security-Header**: HSTS, X-Content-Type-Options, X-Frame-Options, Referrer-Policy
   fehlen. `.htaccess`, 4 Zeilen.

### P3 – Kosmetik

9. Footer-Öffnungszeiten: „Mo, Di, Mi“ bricht am Desktop um (Grid-Spalte 72 px) → 84 px oder
   „Mo–Mi“.
10. Impressum mobil: H1 64 px, H2 50 px; Leistungsseiten 30 px. Auf die Detail-Typografie
    angleichen.
11. Lighthouse-A11y: `aria-label` „Jetzt anrufen: 02282 61402“ (Anrufleiste) und
    „Wärmepumpen: mehr erfahren“ (Karten) beginnen nicht mit dem sichtbaren Text →
    label-content-name-mismatch. Reihenfolge drehen.
12. Font Awesome „brands“ (75 KB) wird auf jeder Seite geladen, ohne dass ein Marken-Icon
    verwendet wird → Avada Performance: Brands-Subset abschalten.
13. Einmal beobachtet, in zwei weiteren Läufen nicht reproduzierbar: Wärmepumpen-Karte blieb
    nach schnellem Scrollen grau (Lazyload-Request `ERR_ABORTED`). Optional erste Kartenreihe vom
    Lazyload ausnehmen.
14. Mobil erscheint die Telefonnummer auf der Startseite 4× (Header-Icon, blauer Kasten,
    Kontaktstreifen, Anrufleiste).

## In Ordnung

Kein horizontaler Überlauf auf 11 × 2 Kombinationen, genau eine H1 pro Seite, alle Bilder mit
alt, Redirects http/non-www → https://www., 404-Seite vorhanden, Sitemap/robots via Yoast,
Menü per Tastatur bedienbar, goo.gl-Maps-Link löst noch auf, keine Konsolenfehler.

## Empfohlene Reihenfolge

1. #4 + og:image (30 min, braucht WordPress-Login)
2. Wärmepumpen-Bild + Kartenbilder verkleinern (30 min, Mediathek)
3. Security-Header + Browser-Caching in `.htaccess`, HTTP/2 beim Hoster anfragen
4. LocalBusiness-Schema
5. Datenschutz kürzen, Impressum-Typo, Footer-Zeiten, aria-labels
6. Inhalte der Leistungsseiten ausbauen (größter Hebel für lokale Suche, aber Texte müssen vom
   Kunden freigegeben werden)
