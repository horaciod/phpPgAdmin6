<?php

    /**
     * Dutch Language file for WebDB.
     *
     * @maintainer Hugo Jonker [hugo@gewis.win.tue.nl]
     *
     * $Id: dutch.php,v 1.18 2007/04/24 11:42:07 soranzo Exp $
     */

    $lang['applang']    = 'Nederlands';
    $lang['applocale']  = 'nl-NL';
    $lang['applangdir'] = 'ltr';

    $lang['strlogin']         = 'Login';
    $lang['strnotables']      = 'Geen tabellen gevonden.';
    $lang['strppahome']       = 'phpPgAdmin Homepage';
    $lang['strpgsqlhome']     = 'PostgreSQL Homepage';
    $lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
    $lang['strlocaldocs']     = 'PostgreSQL Documentatie (lokaal)';
    $lang['strreportbug']     = 'Meldt een fout';
    $lang['strviewfaq']       = 'Bekijk FAQ';
    $lang['strviewfaq_url']   = 'http://phppgadmin.sourceforge.net/doku.php?id=faq';
    $lang['strnotable']       = 'Geen tabel gevonden.';
    $lang['strnoviews']       = 'Geen views gevonden.';
    $lang['strnofunctions']   = 'Geen functies gevonden.';
    $lang['strowner']         = 'Eigenaar';
    $lang['straction']        = 'Actie';
    $lang['stractions']       = 'Acties';
    $lang['strname']          = 'Naam';
    $lang['strtable']         = 'Tabel';
    $lang['strtables']        = 'Tabellen';
    $lang['strview']          = 'View';
    $lang['strviews']         = 'Views';
    $lang['strdefinition']    = 'Definitie';
    $lang['strtriggers']      = 'Triggers';
    $lang['strrules']         = 'Regels';
    $lang['strsequence']      = 'Sequence';
    $lang['strsequences']     = 'Sequences';
    $lang['strfunction']      = 'Functie';
    $lang['strfunctions']     = 'Functies';
    $lang['stroperators']     = 'Operatoren';
    $lang['strtypes']         = 'Types';
    $lang['straggregates']    = 'Aggregaten';
    $lang['strproperties']    = 'Eigenschappen';
    $lang['strbrowse']        = 'Bekijk';
    $lang['strdrop']          = 'Verwijder';
    $lang['strdropped']       = 'Verwijderd';
    $lang['strnull']          = 'Null';
    $lang['strnotnull']       = 'Niet Null';
    $lang['strprev']          = 'Vorige';
    $lang['strnext']          = 'Volgende';
    $lang['strfailed']        = 'mislukt';
    $lang['strnotloaded']     = 'Deze PHP-installatie is zonder ondersteuning van dit type database gecompileerd.';
    $lang['strcreate']        = 'Creëer';
    $lang['strcomment']       = 'Commentaar';

    $lang['strlength']       = 'Lengte';
    $lang['strdefault']      = 'Standaard';
    $lang['stralter']        = 'Wijzig';
    $lang['strcancel']       = 'Cancel';
    $lang['strprivileges']   = 'Privileges';
    $lang['strtrue']         = 'True';
    $lang['strfalse']        = 'False';
    $lang['strinsert']       = 'Voeg in';
    $lang['strselect']       = 'Selecteer';
    $lang['strdelete']       = 'Verwijder';
    $lang['strupdate']       = 'Vernieuw';
    $lang['strrule']         = 'Regel';
    $lang['strreferences']   = 'Referenties';
    $lang['strtrigger']      = 'Triggers';
    $lang['stryes']          = 'Ja';
    $lang['strno']           = 'Nee';
    $lang['stredit']         = 'Edit';
    $lang['strinvalidparam'] = 'Ongeldige parameters.';

// Error handling
    $lang['strsqlerror']    = 'SQL fout:';
    $lang['strinstatement'] = 'In statement:';
    $lang['strimport']      = 'Importeer';

// Users
    $lang['struser']     = 'Gebruiker';
    $lang['strgroup']    = 'Groep';
    $lang['strusername'] = 'Gebruikersnaam';
    $lang['strpassword'] = 'wachtwoord';
    $lang['strsuper']    = 'Superuser?';
    $lang['strcreatedb'] = 'Creëer DB?';
    $lang['strexpires']  = 'Verloopt';
    $lang['strnousers']  = 'Geen gebruikers gevonden.';

// Databases
    $lang['strdatabase']          = 'Database';
    $lang['strdatabases']         = 'Databases';
    $lang['strdata']              = 'Data';
    $lang['strconfirm']           = 'Bevestig';
    $lang['strexpression']        = 'Uitdrukking';
    $lang['strellipsis']          = '...';
    $lang['strexpand']            = 'Uitvouwen';
    $lang['strcollapse']          = 'Inklappen';
    $lang['strnodatabases']       = 'Geen Databases gevonden.';
    $lang['strdatabaseneedsname'] = 'U dient uw database een naam te geven.';

// Views
    $lang['strviewneedsname'] = 'U dient uw view een naam te geven.';
    $lang['strviewneedsdef']  = 'U dinet uw view te definiëren.';

// Sequences
    $lang['strnosequences'] = 'Geen sequences gevonden.';
//$lang['strsequencename'] = 'sequence_naam';
    $lang['strlastvalue']   = 'laatste_waarde';
    $lang['strincrementby'] = 'verhoog_met';
    $lang['strmaxvalue']    = 'max_waarde';
    $lang['strminvalue']    = 'min_waarde';
    $lang['strcachevalue']  = 'cache_waarde';
    $lang['strlogcount']    = 'log_cnt';
    $lang['striscycled']    = 'is_cyclisch';
    $lang['strreset']       = 'Reset';

// Indicies
    $lang['strindexname']  = 'Index Naam';
    $lang['strtabname']    = 'Tab Naam';
    $lang['strcolumnname'] = 'Kolom Naam';
    $lang['struniquekey']  = 'Unieke sleutel';
    $lang['strprimarykey'] = 'Primaire sleutel';

// Tables
    $lang['strfield']          = 'veld';
    $lang['strfields']         = 'velden';
    $lang['strtype']           = 'type';
    $lang['strvalue']          = 'waarde';
    $lang['strshowalltables']  = 'Toon alle tabellen';
    $lang['strunique']         = 'uniek';
    $lang['strprimary']        = 'Primair';
    $lang['strkeyname']        = 'sleutel naam';
    $lang['strnumfields']      = 'aantal velden';
    $lang['strcreatetable']    = 'Creëer tabel';
    $lang['strtableneedsname'] = 'U dient uw tabel een naam te geven.';
    $lang['strtableneedscols'] = 'U dient uw tabel een geldig aantal kolommen te geven.';
    $lang['strexport']         = 'exporteer';
    $lang['strconstraints']    = 'constraints';
    $lang['strcolumns']        = 'kolommen';

// Functions
    $lang['strreturns']           = 'Retourneert';
    $lang['strarguments']         = 'Argumenten';
    $lang['strlanguage']          = 'taal';
    $lang['strfunctionneedsname'] = 'U dient uw functie een naam te geven.';
    $lang['strfunctionneedsdef']  = 'U dient uw functie te definiëren.';

// Triggers
    $lang['strtriggers']      = 'Triggers';
    $lang['strnotriggers']    = 'Geen triggers gevonden.';
    $lang['strcreatetrigger'] = 'Creëer trigger';

// Types
    $lang['strtype']           = 'Type';
    $lang['strtypes']          = 'Types';
    $lang['strcascade']        = 'CASCADE';
    $lang['strnotypes']        = 'Geen types gevonden.';
    $lang['strcreatetype']     = 'Creëer type';
    $lang['strconfdroptype']   = 'Weet u zeker dat u het type "%s" wilt verwijderen?';
    $lang['strtypedropped']    = 'Type verwijderd.';
    $lang['strtypedroppedbad'] = 'Verwijdering van het type mislukt.';
    $lang['strtypecreated']    = 'Type gecreëerd';
    $lang['strtypecreatedbad'] = 'Type creatie mislukt.';
    $lang['strshowalltypes']   = 'Toon alle types';
    $lang['strinputfn']        = 'Invoer functie';
    $lang['stroutputfn']       = 'Uitvoer functie';
    $lang['strpassbyval']      = 'Passed by val?';
    $lang['stralignment']      = 'Alignment';
    $lang['strelement']        = 'Element';
    $lang['strdelimiter']      = 'Scheidingsteken';
    $lang['strstorage']        = 'Opslag';
    $lang['strtypeneedsname']  = 'U dient uw type een naam te geven.';
    $lang['strtypeneedslen']   = 'U dient uw type een lengte te geven.';

// New translations
    $lang['strintro']                = 'Welkom bij phpPgAdmin.';
    $lang['straccount']              = 'Account';
    $lang['strchangepassword']       = 'Verander wachtwoord';
    $lang['strpasswordchanged']      = 'Wachtwoord veranderd.';
    $lang['strpasswordchangedbad']   = 'Wachtwoord veranderen mislukt.';
    $lang['strpasswordshort']        = 'Wachtwoord is te kort.';
    $lang['strpasswordconfirm']      = 'Wachtwoord verschilt van bevestigings-wachtwoord.';
    $lang['strloginfailed']          = 'Inloggen mislukt';
    $lang['strserver']               = 'Server';
    $lang['strlogout']               = 'Log uit';
    $lang['strcreated']              = 'Aangemaakt';
    $lang['strok']                   = 'OK';
    $lang['strsave']                 = 'Bewaar';
    $lang['strrows']                 = 'rij(en)';
    $lang['strrowsaff']              = 'rij(en) gewijzigd.';
    $lang['strexample']              = 'bijv.';
    $lang['strback']                 = 'Terug';
    $lang['strqueryresults']         = 'Query resultaten';
    $lang['strshow']                 = 'Toon';
    $lang['strempty']                = 'Leeg';
    $lang['strencoding']             = 'Encoding';
    $lang['strsql']                  = 'SQL';
    $lang['strgo']                   = 'Go';
    $lang['stradmin']                = 'Admin';
    $lang['strvacuum']               = 'Vacuum';
    $lang['stranalyze']              = 'Analyzeer';
    $lang['strclusterindex']         = 'Cluster';
    $lang['strreindex']              = 'Reindex';
    $lang['strrun']                  = 'Run';
    $lang['stradd']                  = 'Voeg toe';
    $lang['strevent']                = 'Event';
    $lang['strwhere']                = 'Where';
    $lang['strgrantbad']             = 'U dient minstens een gebruiker of groep en minstens een privilege op te geven.';
    $lang['stralterprivs']           = 'Wijzig privilege';
    $lang['strinstead']              = 'Do Instead';
    $lang['strwhen']                 = 'zodra';
    $lang['strformat']               = 'Format';
    $lang['strbadconfig']            =
        'Het bestand config.inc.php is verouderd. U kunt een verbeterde versie afleiden van het bestand config.inc.php-dist.';
    $lang['strbadschema']            = 'Ongeldig schema gespecificeerd.';
    $lang['strbadencoding']          = 'Het zetten van de client encoding in de database is mislukt.';
    $lang['strnodata']               = 'Geen rijen gevonden.';
    $lang['strtablename']            = 'Tabelnaam';
    $lang['strtableneedsfield']      = 'U dient ten minste één veld te specificeren.';
    $lang['strtablecreated']         = 'Tabel aangemaakt.';
    $lang['strtablecreatedbad']      = 'Het aanmaken van de tabel is mislukt.';
    $lang['strconfdroptable']        = 'Weet u zeker dat u de tabel "%s" wilt verwijderen?';
    $lang['strtabledropped']         = 'Tabel verwijderd.';
    $lang['strtabledroppedbad']      = 'Verwijderen van de tabel is mislukt.';
    $lang['strconfemptytable']       = 'Weet u zeker dat u alle rijen uit tabel "%s" wilt verwijderen?';
    $lang['strtableemptied']         = 'Alle rijen uit de tabel verwijderd.';
    $lang['strtableemptiedbad']      = 'Verwijderen van rijen is mislukt.';
    $lang['strinsertrow']            = 'Voeg een rij toe';
    $lang['strrowinserted']          = 'Rij toegevoegd.';
    $lang['strrowinsertedbad']       = 'Toevoegen van rij is mislukt.';
    $lang['streditrow']              = 'Wijzig rij';
    $lang['strrowupdated']           = 'Rij geupdate.';
    $lang['strrowupdatedbad']        = 'Het updaten van de rij is mislukt.';
    $lang['strdeleterow']            = 'Verwijder rij';
    $lang['strconfdeleterow']        = 'Weet u zeker dat u deze rij wilt verwijderen?';
    $lang['strrowdeleted']           = 'Rij verwijderd.';
    $lang['strrowdeletedbad']        = 'Verwijderen van de rij mislukt.';
    $lang['strsaveandrepeat']        = 'Save & Repeat';
    $lang['strfieldneedsname']       = 'U dient het veld een naam te geven';
    $lang['strselectneedscol']       = 'U moet ten minste één kolom als uitvoer tonen';
    $lang['straltercolumn']          = 'Wijzig kolom';
    $lang['strcolumnaltered']        = 'Kolom gewijzigd.';
    $lang['strcolumnalteredbad']     = 'Wijzigen van de kolom is mislukt.';
    $lang['strconfdropcolumn']       = 'Weet u zeker dat u de kolom "%s" wilt verwijderen uit tabel "%s"?';
    $lang['strcolumndropped']        = 'Kolom verwijdert.';
    $lang['strcolumndroppedbad']     = 'Verwijderen van de kolom is mislukt.';
    $lang['straddcolumn']            = 'Voeg kolom toe';
    $lang['strcolumnadded']          = 'Kolom toegevoegd.';
    $lang['strcolumnaddedbad']       = 'Toevoegen van de kolom is mislukt.';
    $lang['strschemaanddata']        = 'Schema & Data';
    $lang['strschemaonly']           = 'Enkel schema';
    $lang['strdataonly']             = 'Enkel data';
    $lang['strusers']                = 'gebruikers';
    $lang['struserupdated']          = 'gebruiker geupdate.';
    $lang['struserupdatedbad']       = 'gebruikerupdate mislukt.';
    $lang['strshowallusers']         = 'Toon alle gebruikers';
    $lang['strusercreated']          = 'Gebruiker aangemaakt.';
    $lang['strconfdropuser']         = 'Weet u zeker dat u de gebruiker "%s" wilt verwijderen?';
    $lang['struserdropped']          = 'Gebruiker verwijderd.';
    $lang['struserdroppedbad']       = 'Verwijdering van de gebruiker mislukt.';
    $lang['strgroups']               = 'Groepen';
    $lang['strnogroup']              = 'Groep niet gevonden.';
    $lang['strnogroups']             = 'Geen groepen gevonden.';
    $lang['strcreategroup']          = 'Maak groep aan';
    $lang['strshowallgroups']        = 'Toon alle groepen';
    $lang['strgroupneedsname']       = 'U moet een naam opgeven voor uw groep.';
    $lang['strgroupcreated']         = 'Groep aangemaakt.';
    $lang['strgroupcreatedbad']      = 'Het aanmaken van de groep is mislukt.';
    $lang['strconfdropgroup']        = 'Weet u zeker dat u de groep "%s" wilt verwijderen?';
    $lang['strgroupdropped']         = 'Groep verwijderd.';
    $lang['strgroupdroppedbad']      = 'Verwijdering van de groep is mislukt.';
    $lang['strmembers']              = 'Leden';
    $lang['strprivilege']            = 'Rechten';
    $lang['strnoprivileges']         = 'Dit object heeft standaard eigenaar rechten.';
    $lang['strgrant']                = 'Sta toe';
    $lang['strrevoke']               = 'Ontzeg';
    $lang['strgranted']              = 'Rechten toegevoegd.';
    $lang['strgrantfailed']          = 'Rechten toevoegen is mislukt.';
    $lang['strshowalldatabases']     = 'Toon alle databases';
    $lang['strnodatabase']           = 'Geen database gevonden.';
    $lang['strcreatedatabase']       = 'Maak database aan';
    $lang['strdatabasename']         = 'Database naam';
    $lang['strdatabasecreated']      = 'Database aangemaakt.';
    $lang['strdatabasecreatedbad']   = 'Het aanmaken van de database is misluk.';
    $lang['strconfdropdatabase']     = 'Weet u zeker dat u de database "%s" wilt verwijderen?';
    $lang['strdatabasedropped']      = 'Database verwijderd.';
    $lang['strdatabasedroppedbad']   = 'Database verwijdering is mislukt.';
    $lang['strentersql']             = 'Type hieronder de uit te voeren SQL:';
    $lang['strsqlexecuted']          = 'SQL uitgevoerd.';
    $lang['strvacuumgood']           = 'Vacuum klaar.';
    $lang['strvacuumbad']            = 'Vacuum mislukt.';
    $lang['stranalyzegood']          = 'Analyze klaar.';
    $lang['stranalyzebad']           = 'Analyze mislukt.';
    $lang['strshowallviews']         = 'Toon alle views';
    $lang['strnoview']               = 'Geen views gevonden.';
    $lang['strcreateview']           = 'Maak view aan';
    $lang['strviewname']             = 'View naam';
    $lang['strviewcreated']          = 'View aangemaakt.';
    $lang['strviewcreatedbad']       = 'Aanmaken van de View mislukt.';
    $lang['strconfdropview']         = 'Weet u zeker dat u de view "%s" wilt verwijderen?';
    $lang['strviewdropped']          = 'View verwijderd.';
    $lang['strviewdroppedbad']       = 'Verwijderen van de view mislukt.';
    $lang['strviewupdated']          = 'View geupdate.';
    $lang['strviewupdatedbad']       = 'View updaten mislukt.';
    $lang['strshowallsequences']     = 'Toon alle sequences';
    $lang['strnosequence']           = 'Geen sequence gevonden.';
    $lang['strcreatesequence']       = 'Maak sequence aan';
    $lang['strstartvalue']           = 'Start waarde';
    $lang['strsequenceneedsname']    = 'U dient een naam op te geven voor de sequence.';
    $lang['strsequencecreated']      = 'Sequence aangemaakt.';
    $lang['strsequencecreatedbad']   = 'Aanmaken van de sequence mislukt.';
    $lang['strconfdropsequence']     = 'Weet u zeker dat u de sequence "%s" wilt verwijderen?';
    $lang['strsequencedropped']      = 'Sequence verwijderd.';
    $lang['strsequencedroppedbad']   = 'Verwijdering van de sequence mislukt.';
    $lang['strindexes']              = 'Indices';
    $lang['strshowallindexes']       = 'Toon alle indices';
    $lang['strnoindex']              = 'Geen index gevonden.';
    $lang['strnoindexes']            = 'Geen indices gevonden.';
    $lang['strcreateindex']          = 'Maak index aan';
    $lang['strindexneedsname']       = 'U dient een naam op te geven voor de index.';
    $lang['strindexneedscols']       = 'Indices dienen uit minimaal één kolom te bestaan.';
    $lang['strindexcreated']         = 'Index aangemaakt';
    $lang['strindexcreatedbad']      = 'Het aanmaken van de index is mislukt.';
    $lang['strconfdropindex']        = 'Weet u zeker dat u de index "%s" wilt verwijderen?';
    $lang['strindexdropped']         = 'Index verwijderd.';
    $lang['strindexdroppedbad']      = 'Verwijdering van de index mislukt.';
    $lang['strindextype']            = 'Type van de index';
    $lang['strtablecolumnlist']      = 'Kolommen in tabel';
    $lang['strindexcolumnlist']      = 'Kolommen in index';
    $lang['strshowallrules']         = 'Toon alle Rules';
    $lang['strnorule']               = 'Geen rule gevonden.';
    $lang['strnorules']              = 'Geen rules gevonden.';
    $lang['strcreaterule']           = 'Maak rule aan';
    $lang['strrulename']             = 'Rule naam';
    $lang['strruleneedsname']        = 'U dient een naam op te geven voor de rule.';
    $lang['strrulecreated']          = 'Rule aangemaakt.';
    $lang['strrulecreatedbad']       = 'Het aanmaken van de rule is mislukt.';
    $lang['strconfdroprule']         = 'Weet u zeker dat u de rule "%s" op "%s" wilt verwijderen?';
    $lang['strruledropped']          = 'Rule verwijderd.';
    $lang['strruledroppedbad']       = 'Verwijdering van de rule mislukt.';
    $lang['strshowallconstraints']   = 'Toon alle constraints';
    $lang['strnoconstraints']        = 'Geen constraints gevonden.';
    $lang['strcreateconstraint']     = 'Maak constraint aan';
    $lang['strconstraintcreated']    = 'Constraint aangemaakt.';
    $lang['strconstraintcreatedbad'] = 'Het aanmaken van de constraint is mislukt.';
    $lang['strconfdropconstraint']   = 'Weet u zeker dat u de constraint "%s" op "%s" wilt verwijderen?';
    $lang['strconstraintdropped']    = 'Constraint verwijderd.';
    $lang['strconstraintdroppedbad'] = 'Verwijdering van de constraint mislukt.';
    $lang['straddcheck']             = 'Voeg Check toe';
    $lang['strcheckneedsdefinition'] = 'Check constraint moeten gedefiniëerd zijn.';
    $lang['strcheckadded']           = 'Check constraint toegevoegd.';
    $lang['strcheckaddedbad']        = 'Toevoegen van check constraint mislukt.';
    $lang['straddpk']                = 'Voeg primaire sleutel toe';
    $lang['strpkneedscols']          = 'Primaire sleutel dient minsten éé te hebben.';
    $lang['strpkadded']              = 'Primaire sleutel toegevoegd.';
    $lang['strpkaddedbad']           = 'Toevoegen van primaire sleutel is mislukt.';
    $lang['stradduniq']              = 'Voeg unieke sleutel toe.';
    $lang['struniqneedscols']        = 'Unieke sleutel dient minstens één kolom te hebben.';
    $lang['struniqadded']            = 'Unieke sleutel toegevoegd.';
    $lang['struniqaddedbad']         = 'Toevoegen van unieke sleutel mislukt.';
    $lang['straddfk']                = 'Voeg Foreign sleutel toe';
    $lang['strfkneedscols']          = 'Foreign sleutel dient minstens één kolom te hebben.';
    $lang['strfkneedstarget']        = 'Foreign sleutel dient een doeltabel te hebben.';
    $lang['strfkadded']              = 'Foreign sleutel toegevoegd.';
    $lang['strfkaddedbad']           = 'Toevoegen van foreign sleutel mislukt.';
    $lang['strfktarget']             = 'Doeltabel';
    $lang['strfkcolumnlist']         = 'Kolommen in sleutel';
    $lang['strshowallfunctions']     = 'Toon alle functies';
    $lang['strnofunction']           = 'Geen functies gevonden.';
    $lang['strcreatefunction']       = 'Maak functie aan';
    $lang['strfunctionname']         = 'Functie naam';
    $lang['strfunctioncreated']      = 'Functie aangemaakt.';
    $lang['strfunctioncreatedbad']   = 'Het aanmaken van de functie is mislukt.';
    $lang['strconfdropfunction']     = 'Weet u zeker dat u de functie "%s" wilt verwijderen?';
    $lang['strfunctiondropped']      = 'Functie verwijderd.';
    $lang['strfunctiondroppedbad']   = 'Verwijdering van de functie mislukt.';
    $lang['strfunctionupdated']      = 'Functie geupdate.';
    $lang['strfunctionupdatedbad']   = 'Het updaten van de functie is mislukt.';
    $lang['strshowalltriggers']      = 'Toon alle triggers';
    $lang['strnotrigger']            = 'Geen trigger gevonden.';
    $lang['strtriggerneedsname']     = 'U dient een naam op te geven voor de trigger.';
    $lang['strtriggerneedsfunc']     = 'U dient een functie op te geven voor de trigger.';
    $lang['strtriggercreated']       = 'Trigger aangemaakt.';
    $lang['strtriggercreatedbad']    = 'Het aanmaken van de trigger is mislukt.';
    $lang['strconfdroptrigger']      = 'Weet u zeker dat u de trigger "%s" op "%s" wilt verwijderen?';
    $lang['strtriggerdropped']       = 'Trigger verwijderd.';
    $lang['strtriggerdroppedbad']    = 'Verwijdering van trigger mislukt.';
    $lang['strnotype']               = 'Geen type gevonden.';
    $lang['strtypename']             = 'Type naam';
    $lang['strschema']               = 'Schema';
    $lang['strschemas']              = 'Schema\'s';
    $lang['strshowallschemas']       = 'Toon alle schema\'s';
    $lang['strnoschema']             = 'Geen schema gevonden.';
    $lang['strnoschemas']            = 'Geen schema\'s gevonden.';
    $lang['strcreateschema']         = 'Maak schema aan';
    $lang['strschemaname']           = 'Schema naam';
    $lang['strschemaneedsname']      = 'U dient een naam op te geven voor het schema.';
    $lang['strschemacreated']        = 'Schema aangemaakt';
    $lang['strschemacreatedbad']     = 'Het aanmaken van het schema is mislukt.';
    $lang['strconfdropschema']       = 'Weet u zeker dat u het schema "%s" wilt verwijderen?';
    $lang['strschemadropped']        = 'Schema verwijderd.';
    $lang['strschemadroppedbad']     = 'Verwijdering van het schema mislukt.';
    $lang['strtopbar']               = '%s draaiend op %s:%s -- U bent ingelogd als gebruiker "%s"';
    $lang['strtimefmt']              = 'jS M, Y g:iA';
    $lang['strondelete']             = 'ON DELETE';
    $lang['stronupdate']             = 'ON UPDATE';

// These were missing after using the language conversion tool :(

    $lang['strfirst']              = '<< Eerste';
    $lang['strlast']               = 'Laatste >>';
    $lang['strexplain']            = 'Verklaring';
    $lang['strfind']               = 'Zoek';
    $lang['stroptions']            = 'Opties';
    $lang['strrefresh']            = 'Ververs';
    $lang['strdownload']           = 'Download';
    $lang['strrownotunique']       = 'Geen unieke identifier voor deze rij.';
    $lang['strselectallfields']    = 'Selecteer alle velden';
    $lang['strtablealtered']       = 'Tabel gewijzigd.';
    $lang['strtablealteredbad']    = 'Tabel wijzigen mislukt.';
    $lang['strcreateuser']         = 'Creëer gebruiker';
    $lang['strusercreatedbad']     = 'Gebruiker creëren mislukt.';
    $lang['straddmember']          = 'Voeg groepslid toe';
    $lang['strmemberadded']        = 'Groepslid toegevoegd.';
    $lang['strmemberaddedbad']     = 'Toevoegen groepslid mislukt.';
    $lang['strdropmember']         = 'Verwijder groepslid';
    $lang['strconfdropmember']     = 'Weet u zeker dat u "%s" uit groep "%s" wilt verwijderen?';
    $lang['strmemberdropped']      = 'Groepslid verwijderd.';
    $lang['strmemberdroppedbad']   = 'Verwijderen van groepslid mislukt.';
    $lang['strgrantor']            = 'Grantor';
    $lang['strasterisk']           = '*';
    $lang['strsequencereset']      = 'Sequence reset.';
    $lang['strsequenceresetbad']   = 'Sequence reset mislukt.';
    $lang['strproglanguage']       = 'Programmeertaal';
    $lang['strtriggeraltered']     = 'Trigger gewijzigd.';
    $lang['strtriggeralteredbad']  = 'Trigger wijziging mislukt.';
    $lang['strdomain']             = 'Domein';
    $lang['strdomains']            = 'Domeinen';
    $lang['strshowalldomains']     = 'Toon alle domeinen';
    $lang['strnodomains']          = 'Geen domeinen gevonden.';
    $lang['strcreatedomain']       = 'Creëer domein';
    $lang['strdomaindropped']      = 'Domein verwijderd.';
    $lang['strdomaindroppedbad']   = 'Verwijderen van domein mislukt.';
    $lang['strconfdropdomain']     = 'Weet u zeker dat u het domein "%s" wilt verwijderen?';
    $lang['strdomainneedsname']    = 'U dient een naam op te geven voor uw domein.';
    $lang['strdomaincreated']      = 'Domein gecreëerd.';
    $lang['strdomaincreatedbad']   = 'Domeincreatie mislukt.';
    $lang['strdomainaltered']      = 'Domein gewijzigd.';
    $lang['strdomainalteredbad']   = 'Wijzigen van het domein mislukt.';
    $lang['stroperator']           = 'Operator';
    $lang['strshowalloperators']   = 'Toon alle operators';
    $lang['strnooperator']         = 'Geen operator gevonden.';
    $lang['strnooperators']        = 'Geen operators gevonden.';
    $lang['strcreateoperator']     = 'Creëer operator';
    $lang['stroperatorname']       = 'Naam van de operator';
    $lang['strleftarg']            = 'Linkerargument type';
    $lang['strrightarg']           = 'Rechterargument type';
    $lang['stroperatorneedsname']  = 'U dient een naam op te geven voor uw operator.';
    $lang['stroperatorcreated']    = 'Operator gecreëerd';
    $lang['stroperatorcreatedbad'] = 'Operator creatie mislukt.';
    $lang['strconfdropoperator']   = 'Weet u zeker dat u de operator "%s" wilt verwijderen?';
    $lang['stroperatordropped']    = 'Operator verwijderd.';
    $lang['stroperatordroppedbad'] = 'Verwijderen van de operator mislukt.';
    $lang['strhelp']               = 'Help';