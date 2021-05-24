# TYPO3-Extension "simpledataedittest"
#### Version: 20210418
#### Vorbemerkung
Beim Erstellen der Dokumentation ist die deutsche Version führend.
Die englische Version wird mittels des Google-Translator immer nachrangig erstellt. Der Vergleich des Versionsdatum erlaubt die Prüfung, ob die Übersetzung dem aktuellen Stand entspricht.

#### Zu den Versionsnummern oder 10.0.2 = MajorNr.MinorNr.PatchNr
Die Extension ist abhängig von der jeweiligen TYPO3-Hauptversion.
Die Major-Versionnummer ist deshalb nicht eingenständig, sondern orientiert sich an der Hauptversion von TYPO3.
Die Version mit Minor-Nummer x.0 ist auch mit der nächst tieferen TYPO3-Veresion lauffähig.
Für die hier beschriebene Extension `simpledataedittest` gilt, dass die Minor-Nummer immer kleiner oder gleich zur Minor-Nummer der Extension `simpledateedit` sein muss.

## Das Fun-Modul Factorize
Schon in meiner Studienzeit hat mich das Thema 'interessiert, wie man die Faktoren eines Produkte berechnen könnte.
Wenn man sich das Einmaleins anschaut, stellt man fest, dass die Endziffer in jedem ungradzahligen Produkt nur bei wenigen Endzifferkombinationen möglich ist.
Die 1 erhält man  mit den Endziffern *1\*1*, X3\*X7 und X9\4*X9. Ähnliches gilt für die Endziffern 3,7 und 9. Die anderen Endziffern sind mit den Teilern 2 und/oder assoziiert.
Im Dezimal-System *erhält\* man* leider zu wenige Bedingungen, um im Sinne von N-Gleichungen mit N-Unbekannten ein auflösbares System zu erhalten.
Aber im Dual-System, also dem System der Computer, wird die Situation.
Wie man leicht zeigen kann,  bestimmt sich im Binärsystem die Länge des Produkts aus der Summe der Länge seiner Faktoren.
Wie man auch leicht zeigen kann, kann durch einen Übertrag die Länge um maximal ein Bit länger sein als die Summe der Längen der beiden Produkte.
Man kommt also in die Nähe von N-Gleichungen für N-Unbekannte.
Weil ich keine Mathematiker bin und ich mit Rechnung mit Modulo in Gleichungssystemen
nicht auskennen, habe ich mangels Kompetenz & Wissen das Problem nicht versucht, analytisch zu lösen.
Statt einer analytischen Lösung habe ich einfach einen (rekursiven = Horror)  Algorithumus programmiert, der versucht, die Idee der Endziffern-Ableitung für die Faktorisierung auszunutzen.
In meinem optimistischen Wahn habe ich das System gleich so programmiert,
dass auch Produkte von 4kBit ohne PHP-Zusatzmodule für große Integer prinzipiell lösbar wären.

Ich habe irgendwann einmal gelernt, dass man lineare N Gleichungen mit N Unbekannten immer lösen kann. Gilt das auch, wenn in den Gleichungen mit Modulo gerechnet wird?
Oder alternativ: Gilt das auch für Ungleichungen?
Gibt es ein Programm, dass symbolisch solche  Berechnungen löst?

In meine Naivität habe ich einen Faktorsierungs-Algorithmus geschrieben, der rekursive die Produkte zu bestimmen versucht.

Mein Gleichungsproblem:
Die Zahl 143 ist das Produkt von 11*13. In Binär-Darstellung lautet die Gleichung.
1101 * 1011 = 10001111 = A*B = C
Wenn man gemäß ihrer Position die Bits in der Zahl durch a0,a1, … darstellt und wenn das Rechenzeichen % das Abrunden des Modulo-Ergebnisses auf eine ganze Zahl meint, erhält man folgende Gleichungen:
* d0 = a0 * b0
* c0 = d0 % 2
* d1 = a1 * b0 + a0 * b1                             + d0/2
* c1 = d1 % 2
* d2 = a2 * b0 + a1 * b1 + a0 * b1                   + d0/4 + d1/2
* c2 = d2 % 2
* d3 = a3 * b0 + a2 * b1 + a1 * b2 + a0 * b3 + d0/8  + d1/4 + d2/2
* c3 = d3 % 2
* d4 = a3 * b1 + a2 * b2 + a1 * b3                   + d0/16 + d1/8 + d2/4 + d3/2
* c4 = d4 % 2
* d5 = a3 * b2 + a2 * b3                             + d0/32 + d1/16 + d2/8 + d3/4 + d4/2
* c5 = d5 % 2
* d6 = a3 * b3                                       + d0/64 + d1/32 + d2/16 + d3/8 + d4/4 + d5/2
* c6 = d6 % 2
* d7 =                                               + d0/128 + d1/64 + d2/32 + d3/16 + d4/8 + d5/4 + d6/2
* c7 = d7

Man könnte das System vielleicht auch in Ungleichungen umschreiben, wenn das Bit jeweils als Zweier-Potenz und dem Index als Exponenten auffasst. (also z.B. a2 = a[2]*2^2 mit a[2] aus {0,1})


Es gibt einige Gleichungen, die schon bekannt sind.
* a0 = 1
* b0 = 1
* a3 = 1
* b3 = 1
Auch die Gleichung
Da die Potenzregeln auch für den Binärcode gelten, ist klar, das die Bitlänge des Produkts (k hier:8 ) sich entweder die Summe der Bitlängen der Faktoren (m,n hier jeweils 4) bestimmt. Es gilt
m+n = k (wenn es einen Übertrag gibt)
m+n = k-1 (ohne Übertrag)
Man beachte, dass gilt Index/Potenz = Länge -1

#### Anmerkung
In meiner Naivität habe ich in PHP einen Faktorsierungs-Algorithmus programmiert, der rekursive die Faktoren zu einem Produkte zu bestimmen versucht. Man beachte, dass mit zunehmender Bitlänge die Zahl der möglichen Kombinationen Faktor-Kombinationen wächst.  Die mitgeloggten Statistiken deuten aber an, dass man mit zunehmender Bitlänge die Zahl der Berechnungen explodiert.
2141041196059 = 997 * 2147483647 ist eine 40 Bit-Zahl


## Vorwort
Das Herauslösen von den Tests bei der Extension `simpledataedit` war mir wichtig.
Ich nahm dafür in Kauf, dass die hier vorliegende Test-Extension nur halbfertig ist.
Wie die vorliegende Test-extension erahnen lässt, ist mein eigentliches Ziel eine Extension, die das Frontend-Editing für Datenbankstrukturen erlaubt, die auch von Extbase gelesen werden können.


## Wer tut was womit wie wo und wann?
Die Extension zeigt am Beispiel, wie man den Viewhelper `editor` der Extension `simpledataedit` in Templates verwenden kann.
Sie wurde mit dem Extensionbuilder erstellt und stellt alle möglichen Datenfälle dar, die man vermutlich im Frontend bearbeiten wollen würde.

## Wie installiert man die Extension?
Hier geht man ganz klassisch vor.
1. Installiern bzw. Hineinkopieren in `typo3conf/ext`-Ordner via Backend oder Composer oder direkt.
1. Aktivieren vom Typoscript im TypoScript-Template
1. Starten sie einmalig das Installtoll/Upgrade bzw. im Backend im Modul Admintools>Upgrade das UpdateScript mit `simpleeditfdatatest` im Titel.


### Integratoren: Wie teste ich das Frontend-Editing?
#### Wie teste ich mit einem Standard-Element
Um auch in einem Live-System und bei klassichem Upload von Extension via Backend dem User out-of-the-box einen störungsfreien Test zu ermöglichen,
bringt die Extension ein eigenes Backend-Layout mit.

Für den Test muss auch das exemplarische TypoScript eingebunden werden.

1. Legen sie eine Testseite an
1. Legen sie ein TypoScript-Erweiterungstemplate für die Seite an und laden sie dort für den Test das Typoscript dieser Extension hinein
1. Stellen sie auf der Testseite das Backend-Layout dieser Extension ein.
1. Legen sie das TYPO3-Text-Element an und tragen sie einen Text in den Header ein.

#####Hintergrund
Das Backend-Layout definiert eine Testspalte mit dem ColPos-Wert (7387).
Nach dem Aktivieren des Test-TypoScripts dieser Extension wird auf einer Testseite in der Spalte (7387)
das `header`-Feld in einem speziellen Template für das TYPO3 `Text-only`-Contentelement editierbar gemacht.
Damit es sichtbar ist, darf das `header`-Feld  nicht leer sein.
(siehe Code *simpledataedittest/Resources/Private/Templates/FluidElements/Text.html*)

Die anderen TYPO3-Content-Elementen, bis auf das für Plugins zuständige List-Element, sind nicht für Tests vorbereitet und zeigen in der TestSpalte nur einen Fehlerhinweis an.
Die Plugins werden wie bisher angezeigt.

# Plugin currently not working

#### Wie teste ich mit dem Plugin?
In TYPO3 nutzt man oft eigene Extensions für spezielle Anwendungsfälle.
Das Plugin simuliert
1. Legen sie eine Testseite an
1. Legen sie ein TypoScript-Erweiterungstemplate für die Seite an und laden sie dort für den Test das Typoscript dieser Extension hinein
1. Stellen sie auf der Testseite das Backend-Layout dieser Extension ein.
1. Aktivieren sie das Plugin Liste

##### Hinweise
1. Bei der Installation werden keinen Daten initialisiert.
1. Sie können entweder selbst einige Elemente anlegen.
Wenn sie eine SQL-Datenbank verwenden, können sie aber auch über Installtool das Update-Script dieser Test-Extension aufrufen.
Es wird über SQL-Queries seine Test-Tabellen leeren und erneut mit validen Daten füllen.
1. Wenn sie für die Test-Daten einen eigenen System-Ordner anlegen, dann sollten sie die ID der Seite des System-Ordners bei den Extensions-Constanten hinterlegen.
Per Default werden die Datensätze auf der Seite mit der ID 1 hinterlegt.
1. Die Testdatensätze sind für die Zukunfgt ausgelegt. Für einige Datenfelder sollen in Zukunft noch eigene Editoren programmiert werden.

## Beispiel für Entwickler: Wie integriere ich eine eigene Frontend-Editor-Klasse?
Die Extension hat nicht den Anspruch, für jeden Frontediting-Wunsch eine Lösung out-of-the-box anzubieten.
Über die Interface-Klasse sollte Entwicklern  aber leicht möglich sein, eigene Editor-Varianten zu erstellen.
Am Beispiel der Kopie der FrontendKlasse `plainTextEditor` aus der Basis-Extension `simpledataedit` wird diese Klasse unter einem zweiten Namen in dem System verfügbar gemacht.
Es soll nur zeigen, wie einfach man eigene Erweiterungen integrieren kann.
