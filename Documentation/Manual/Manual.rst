.. footer:: Manual nkwsubfeprojects $Id: Manual.rst 1719 2012-03-02 13:22:02Z pfennigstorf $

===============================
Projekte (EXT:nkwsubfeprojects)
===============================

Extension, die Projekte im Backend erfasst und im Frontend ausgibt.

.. contents:: Inhaltsverzeichnis

===========
Darstellung
===========

Bei der Darstellung existiert pro Domaene jeweils eine Listen- und eine Detailansicht. In der Detailansicht wird die Sidebar konsequent durch das Plugin genutzt, daher sollte das Backendlayout im TYPO3 so konfiguriert sein, dass diese nicht angezeigt wird.

============
Installation
============

Installation der Extension im Extension Manager. Danach die die Datenbankupdates durchfuehren, damit die Datenbankstruktur stimmt.

.. hint::
   Anschliessend auf der obersten Ebene des TypoScripts das mitgelieferte TypoScript einbinden und die Persistence Einstellungen zur StoragePid setzen.

=========
Erfassung
=========

======
Bilder
======

Bilder koennen ueber das Backendeingabefeld "Images" hinzugefuegt werden. Dort pro Logo / Bilddatei auf "Create New"
klicken und die Datei auswaehlen und mit einer Bildunterschrift versehen.

====================
Aufteilung (Plugins)
====================

Die Benennung der Plugins ist aufgrund der historischen Gegebenheiten (stammt aus piBase Extension) so erhalten geblieben.

##################
pi1 (Project List)
##################

Anzeige der Projekte als Liste mit Verlinkung auf eine Detailansicht (pi2).

Zur Filterung der Projekte kann nach dem Einbinden des Plugins als Content Element die Anzeige nach Projektstatus eingeschraenkt werden.
Moegliche Filterkriterien sind durch die Auswahl eines Flexformfeldes beim Bearbeiten des Content Elements moeglich:

- Geplant (1)
- Laufend (2)
- Abgeschlossen (3)
- Laufender Service (4)
- Abgeschlossen und laufender Dienst (5)
- Alle Projekte (x)

Zur Darstellung der alphabetischen Liste wurde ein Fluid Widget geschrieben, dass die Ausgabe steuert. Dieses Widget ist universell fuer jede Art von Liste einsetzbar.

.. image:: Img/pi1.png

#####################
pi2 (Project Details)
#####################

Anzeige der Projektdetails mit einer Sidebar, in der Fakten und Projektkeywords angezeigt werden.
Die Anzeige der Keywords beschraenkt sich derzeit auf die festen Keywords (s.u.), da hier auch noch eine Loesung gegen den Keywordwildwuchs und die Redundanz gesucht wird

Sofern vorhanden werden Institutionsbilder mit eingebunden. Die Institutionen werden in einer separaten Datenbanktabelle gespeichert und bei der Erfassung referenziert.

.. image:: Img/pi2.png

##########################
pi3 (Project Keyword List)
##########################

Projekte besitzen eine eigenstaendige Keywordtabelle, in der die sogenannten "festen" Keywords zentral gepflegt werden. Da diese Keywords in vielen Faellen nicht ausreichen, wurde zusaetzlich die Moeglichkeit geschaffen in einem Freitextfeld weitere Keywords anzugeben.

#############################
pi4 (Project Keyword Details)
#############################

Anzeige der Projekte zu einem bestimmten Keyword. Die Sortierung der Projekte erfolgt alphabetisch. Jedes angezeigte Projekt wird auf die Projektdetailseite (pi2) verlinkt.

##############################
pi5 (Project Institution List)
##############################

Liste aller Institutionen und Verlinkung zu der Detailseite (pi6), auf der weitere Informationen zu der Institution dargestellt werden

#################################
pi6 (Project Institution Details)
#################################


===========
Technisches
===========

Die Extension und Daten stammen aus der F&E Abteilung der SUB Göttingen und wurden ohne TYPO3 auf rdd.sub.uni-goettingen.de eingesetzt.
Ursprünglich war diese Extension piBase basiert, aufgrund vieler Anfälligkeiten bezüglich Workspaces wurde eine Migration auf Exbase und Fluid durchgeführt.

Im Kern besteht die Extension aus den Entitäten Projekte, Institutionen und Schlagworten.
Als Value Objekte stehen zusätzlich noch Personen und Gruppen zur Verfügung, die teils aufgelistet und referenziert werden.

Jede Entität besitzt einen eigenen Controller, jeder Controller hat eine list- und Detail Action.

Die Templates sind modular aufgebaut und besitzen ein gemeinsames Layout. Wiederkehrende Teile sind in Partials ausgelagert.

====
View
====

Der View wird in Fluid realisiert. Fuer die Darstellung der Listen ist die Einbindung der Extension tmpl_sub noetig, da dort das zentral genutzte Widget fuer die A-Z Darstellung der Komponenten hinterlegt ist.

##########
TypoScript
##########

Default TypoScript ist in Configuration/TypoScript/ vorhanden.

====
TODO
====

- Freie Keywords rendern und in die festen integrieren.
- Blackout Anzeige
- Nowrap bei englischen Daten

=========
Changelog
=========

2012-02-28 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Importer gefixt

2012-02-23 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Anzeige aehnlicher Keywords

2012-02-14 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Extbase revamping

2011-12-12 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Sichtbarkeit der Projekte (WWW-1008)

2011-11-25 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Korrektur der Projektdatenanzeige (WWW-846)

2011-11-23 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Suche im Backend TYPO3 4.6 kompatibel gestaltet (WWW-896)

2011-11-15 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Anzeige der Projektseiten Workspace-aware programmiert (WWW-846)

2011-11-11 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Einbindung von nkwlib in pi4 korrigiert (WWW-835)

2011-10-04 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Workspacekompatibilitaet hinzugefuegt (WWW-742)

2011-08-25 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Anpassung pi5 - Fehlerbehebung

2011-06-20 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Anpassung an statische Aufrufe der Methoden

2011-05-27 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* [Bugfix] Anzeige aller beteiligten Gruppen (WWW-675)

2011-05-05 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Kleinere Bugfixes
	* Statistik Modul deaktiviert

2011-05-03 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Duplicate Code entfernt (pi2)
	* Logos koennen bei den Institutionen hinterlegt werden und werden im FE angezeigt
	* Freies Eingabefeld fuer ehemalige Mitarbeiter (WWW-648)
	* Blacklistfeld hinzugefuegt (WWW-647)

2011-05-02 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Datenbankerweiterungen - Moeglichkeit Bilder einzutragen
	* Relationen ergaenzt
	* Refactoring pi2
	* Bilder koennen integriert werden in den Beschreibungsteil (WWW-641)

2011-04-07 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Bugfixes in der Ausgabe (WWW-643)
	* RTE Felder fuer Beschreibung (WWW-642)
	* Eingabe weiterer URLs (WWW-646)

2011-03-30 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Abhaengigkeit zu ke_stats gelockert

2011-03-18 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Kleine Dokumentation welches Plugin wofuer (README.txt)
	* Keine KE-Stats, wenn Backend User angemeldet (WWW-271)

2011-03-17 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
	* Ausblenden der Meldung der ehemaligen Mitarbeiter (WWW-616)

2010-12-07 - 0.0.26 - Nils K. Windisch <windisch@sub.uni-goettingen.de>
	* Impro: WWW-482 Use cHash (ext:nkwsubfeprojects)

2010-10-15 - 0.0.25 - Nils K. Windisch <windisch@sub.uni-goettingen.de>
	* USER_INT optimized

2010-09-20 - 0.0.24 - Nils K. Windisch <windisch@sub.uni-goettingen.de>
	* bug fix don't shoiw emtpy acronyms
	* bug fix add a title

2010-09-09 - 0.0.23 - Nils K. Windisch <windisch@sub.uni-goettingen.de>
	* bug fix in ext_emconf.php

2010-09-07 - 0.0.22 - Nils K. Windisch
	* removed debug output
	* bug fix table structure

2010-08-25 - 0.0.20 - Nils K. Windisch
	* ke_stats for projects
	* Bug Fix missing value