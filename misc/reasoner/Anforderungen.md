# Anforderungen Recommender-Modul

## Hintergrund

- Loesungen und deren Anwendung verursachen Aufwand
- Nutzen bei Fertigungsgenauigkeit steht dem gegenueber
- Aufwand und Nutzen gem. Bewertungsmethode inkl. Randbedingungen vgl.

## Funktionale Anforderungen

- Der Recommender muss die Definition von *Entscheidungsregeln* ermoeglichen
- Der Recommender muss die *Bewertungsdaten* aus dem Domain Manager-Modul nutzen
- Der Recommender muss die *Konfiguration* von Aufwaenden einer Loesung ermoeglichen
- Der Recommender muss anhand *unternehmensspez. Aufwaende* und *unternehmensunabh. Aufwaende* den *Gesamtaufwand* ermitteln (s. Bewertungsmetrik)
- Der Recommender muss Loesungen ermitteln, deren *Nutzen* groeßer als der *Aufwand* ist

## Nicht-funktionale Anforderungen

- Der Recommender muss die Bewertungsmetrik technisch umsetzen
- Der Recommender muss Eingaben fuer die Bewertungsmetrik abfragen (Eingangsvektor)
- Der Recommender muss Loesungen vergleichend darstellen koennen