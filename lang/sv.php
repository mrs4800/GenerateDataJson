<?php


$LANG = array();

// Category: Special
$LANG["language"] = "Svenska";
$LANG["title"] = "generatedata.com";


// Category: Content
$LANG["AlphaNumeric_example_CanPostalCode"] = "(Can. postnummer)";
$LANG["AlphaNumeric_example_Password"] = "(Lösenord)";
$LANG["AlphaNumeric_example_USZipCode"] = "(US Postnummer)";
$LANG["AlphaNumeric_help_1"] = "En versal <b>L</b>etter.";
$LANG["AlphaNumeric_help_10"] = "Varje nummer, 1-9.";
$LANG["AlphaNumeric_help_11"] = "En konsonant (övre eller nedre).";
$LANG["AlphaNumeric_help_12"] = "En <b>H</b>exidecimal nummer (0-F)";
$LANG["AlphaNumeric_help_2"] = "En versal <b>V</b>owel.";
$LANG["AlphaNumeric_help_3"] = "En gemener <b>l</b>etter.";
$LANG["AlphaNumeric_help_4"] = "En gemener <b>v</b>owel.";
$LANG["AlphaNumeric_help_5"] = "En skrivelse (övre eller nedre).";
$LANG["AlphaNumeric_help_6"] = "En vokal (övre eller nedre).";
$LANG["AlphaNumeric_help_7"] = "En versal <b>C</b>onsonant.";
$LANG["AlphaNumeric_help_8"] = "Varje nummer, 0-9.";
$LANG["AlphaNumeric_help_9"] = "En gemener <b>c</b>onsonant.";
$LANG["AlphaNumeric_help_intro"] = "Denna datatyp kan du skapa slumpmässiga alfanumeriska strängar. Följande tabell innehåller tecknet legend för detta område. Alla andra tecken som du anger i detta fält kommer att visas oskyddat.";
$LANG["AlphaNumeric_incomplete_fields"] = "Den alfanumeriska datatyp måste ha formatet in i Alternativ. Korrigera med följande rader:";
$LANG["AlphaNumeric_name"] = "Alfanumerisk";
$LANG["AutoIncrement_help_intro"] = "Skapar en kolumn som innehåller ett unikt nummer på varje rad en höjning oavsett värde du anger. Detta alternativ kan vara till hjälp för att föra in data till en databas fält med en automatisk ökning primärnyckel.";
$LANG["AutoIncrement_help_para2"] = "De frivilliga platshållare strängen kan du bädda in den genererade ökningsvärde inom en sträng via <b>{\$INCR}</b> platshållare. Till exempel:";
$LANG["AutoIncrement_increment_c"] = "Tillväxt:";
$LANG["AutoIncrement_name"] = "Auto-ökning";
$LANG["AutoIncrement_placeholder_str"] = "Platshållare sträng:";
$LANG["AutoIncrement_start_at_c"] = "Starta vid:";
$LANG["City_name"] = "Stad";
$LANG["Composite_division"] = "delning";
$LANG["Composite_help_1"] = "Den sammansatta datatyper kan du kombinera data från andra raderna, och manipulera det, ändra det, kombinera information med mera. Innehållet bör tas upp i Smarty mallhantering språket.";
$LANG["Composite_help_2"] = "För utmatning av värde från valfri rad kan du använda platshållare <b>( \$ ROW1), ( \$ ROW2)</b> etc. Du kan inte hänvisa till den aktuella raden - som antingen smälter servern och / eller göra universum implodera.";
$LANG["Composite_help_3"] = "Här är några exempel:";
$LANG["Composite_help_4"] = "Visa ett värde från rad 6: <b>( \$ ROW6)</b>";
$LANG["Composite_help_5"] = "Förutsatt rad 1 och rad 2 innehåller slumpmässiga nummer, följande är exempel på några enkla matematik:";
$LANG["Composite_help_6"] = "Om rad 1 innehåller antalet 5, visa  &quot;N / A &quot;, annars bara visa numret.";
$LANG["Composite_help_7"] = "Vänligen se <a href=\"http://www.smarty.net/\">Smarty hemsida</a> för mer information om syntax.";
$LANG["Composite_multiplication"] = "multiplikation";
$LANG["Composite_na"] = "N / A";
$LANG["Composite_name"] = "Komposit";
$LANG["Composite_subtraction"] = "subtraktion";
$LANG["Constant_help_1"] = "Denna datatyp kan du skapa en kolumn med data som har att upprepa värden från rad till rad. Här är ett par exempel för att ge dig en uppfattning om hur det fungerar.";
$LANG["Constant_help_2"] = "Om du vill ge värdet  &quot;1 &quot; för varje rad, kan du skriva  &quot;1 &quot; i Value (s)-fältet och eventuella värde (&gt; 0) i Loop greve området.";
$LANG["Constant_help_3"] = "Om du vill ha 100 rader av strängen  &quot;Man &quot; följt av 100 rader av strängen  &quot;Kvinna &quot; och upprepa kan du ange  &quot;100 &quot; i Loop greve fältet och  &quot;Male | Kvinna  &quot;i Value (s) område.";
$LANG["Constant_help_4"] = "Om du vill 5 rader med 1 till 10, ange  &quot;5 &quot; för Loop greve fältet och  &quot;1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 &quot; i värde (n) område.";
$LANG["Constant_help_5"] = "Prova mixtrande med det. Du får idén.";
$LANG["Constant_incomplete_fields"] = "The Constant datatyp måste ha konstanter som skall föras in i textfältet. Korrigera med följande rader:";
$LANG["Constant_loop_count"] = "Loop räkna:";
$LANG["Constant_name"] = "Konstant";
$LANG["Constant_values"] = "Värde (n):";
$LANG["Country_limit_results"] = "Begränsa länder till de som valts ovan";
$LANG["Country_name"] = "Land";
$LANG["Date_char"] = "Tecken";
$LANG["Date_day"] = "Dag";
$LANG["Date_description"] = "Beskrivning";
$LANG["Date_example"] = "Exempel";
$LANG["Date_format_code"] = "Format-kod:";
$LANG["Date_from"] = "Från:";
$LANG["Date_help_D"] = "En textversion av en dag, tre bokstäver";
$LANG["Date_help_D_example"] = "Mån till Sön";
$LANG["Date_help_F"] = "En fullständig text representation av en månad, som januari eller mars";
$LANG["Date_help_F_example"] = "Januari till december";
$LANG["Date_help_L"] = "Oavsett om det är ett skottår";
$LANG["Date_help_L_example"] = "1 om det är ett skottår, 0 annars.";
$LANG["Date_help_M"] = "En kort text representation av en månad, tre bokstäver";
$LANG["Date_help_M_example"] = "Jan genom december";
$LANG["Date_help_S"] = "Engelska ordningstal suffix för dagen i månaden, 2 tecken st, nd, rd eller Th. Fungerar bra med j";
$LANG["Date_help_S_example"] = "Söndag till lördag";
$LANG["Date_help_W"] = "ISO-8601 veckonummer, veckor börjar på måndag";
$LANG["Date_help_W_example"] = "42 (den 42: a veckan i år)";
$LANG["Date_help_Y"] = "En fullständig numerisk representation av ett år, 4 siffror";
$LANG["Date_help_Y_example"] = "1999 eller 2003";
$LANG["Date_help_d"] = "Dagen i månaden, 2 siffror med inledande nollor";
$LANG["Date_help_d_example"] = "01 till 31";
$LANG["Date_help_intro"] = "Denna datatyp genererar en slumpmässig tidpunkt mellan de datum som anges, och möjliggör unik formatering av resultatet. Se tabellen nedan för en lista av verkliga formateringsregler (dessa är tagna från PHP date () standardformateringsalternativ). Ta en titt på exempellistan för att välja från befintliga formateringsalternativ.";
$LANG["Date_help_j"] = "Dagen i månaden utan inledande nollor";
$LANG["Date_help_j_example"] = "1 till 31";
$LANG["Date_help_l"] = "En fullständig text representation av dagen i veckan";
$LANG["Date_help_l_example"] = "Söndag till lördag";
$LANG["Date_help_m"] = "Numerisk representation av en månad, med inledande nollor";
$LANG["Date_help_m_example"] = "01 till 12";
$LANG["Date_help_n"] = "Numerisk representation av en månad utan inledande nollor";
$LANG["Date_help_n_example"] = "1 till 12";
$LANG["Date_help_t"] = "Antal dagar i en viss månad";
$LANG["Date_help_t_example"] = "28 till 31";
$LANG["Date_help_w"] = "Numerisk representation av dagen i veckan";
$LANG["Date_help_w_example"] = "0 (för Söndag) till 6 (för Lördag)";
$LANG["Date_help_y"] = "En tvåsiffrig representation av ett år";
$LANG["Date_help_y_example"] = "99 eller 03";
$LANG["Date_help_z"] = "Den dagen på året (från 0)";
$LANG["Date_help_z_example"] = "0 till 365";
$LANG["Date_incomplete_fields"] = "Datum måste ha formatet in i Alternativ. Korrigera med följande rader:";
$LANG["Date_month"] = "Månad";
$LANG["Date_name"] = "Datum";
$LANG["Date_to"] = "Till:";
$LANG["Date_week"] = "Vecka";
$LANG["Date_year"] = "År";
$LANG["Emails_name"] = "E-post";
$LANG["GUID_help"] = "Skapar ett unikt, slumpmässigt GUID (globalt unik identifierare) av typen: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX, där X är någon hexadecimala siffror).";
$LANG["GUID_name"] = "GUID";
$LANG["LatLng_help"] = "Denna datatyp skapas ett slumpmässigt latitud och / eller longitud. Om båda är markerade, visar det både åtskilda med ett kommatecken.";
$LANG["LatLng_latitude"] = "Latitude";
$LANG["LatLng_longitude"] = "Longitud";
$LANG["LatLng_name"] = "Latitud / longitud";
$LANG["List_at_most"] = "Vid de flesta";
$LANG["List_colours"] = "röd | orange | gul | grön | blå | indigo | violett";
$LANG["List_companies"] = "Microsoft | Macromedia | Google | Yahoo | Lycos | Altavista | Chami | Adobe | Borland | Lavasoft | Cakewalk | Sibelius | Finale | Apple Systems";
$LANG["List_company_names"] = "Bokföring | Annonsering | Asset Management | Kundrelationer | Kundservice | Ekonomi | Personal | avdelning | Media Relations | Lön | PR | Kvalitet Försäljning Assurance | och Marknadsföring | Forskning och utveckling | Teknisk support";
$LANG["List_exactly"] = "Exakt";
$LANG["List_example_1"] = "Odd Nums under 50";
$LANG["List_example_2"] = "Även Nums under 50";
$LANG["List_example_3"] = "One-Ten";
$LANG["List_example_4"] = "Prime Nums under 100";
$LANG["List_example_5"] = "Färger";
$LANG["List_example_6"] = "Civilstånd";
$LANG["List_example_7"] = "Titel";
$LANG["List_example_8"] = "Institutionen Namn";
$LANG["List_example_9"] = "Företagsnamn";
$LANG["List_help"] = "Skriv en lista, åtskilda av en pipe | karaktär. Välj sedan om du vill <b>exakt</b>X antal enheter, eller <b>Vid de flesta</b>X objekt från listan. Flera poster är tillbaka i en kommaavgränsad lista i resultaten.";
$LANG["List_name"] = "Anpassad lista";
$LANG["List_one_to_ten"] = "ett | två | tre | fyra | fem | sex | syv | åtta | nio | tio";
$LANG["List_prefix"] = "Dr | Mr | fru | Ms |";
$LANG["List_relationship_states"] = "Single | Gift | Skild | common law";
$LANG["List_separated_by_pipe"] = "Skriv in värden separerade med |";
$LANG["Names_example_FemaleName"] = "Anna (kvinnonamn)";
$LANG["Names_example_FemaleName_Surname"] = "Anna Svensson";
$LANG["Names_example_MaleName"] = "Anders (manligt förnamn)";
$LANG["Names_example_MaleName_Surname"] = "Anders Svensson";
$LANG["Names_example_Name"] = "Charlie (alla kön)";
$LANG["Names_example_Name4"] = "Helen, Tomas, Annika, Peter";
$LANG["Names_example_Name_Initial_Surname"] = "Charlie J. Svensson";
$LANG["Names_example_Name_Surname"] = "Charlie Svensson";
$LANG["Names_example_Surname_Name_Initial"] = "Svensson, Anders P.";
$LANG["Names_example_fullnames"] = "Charlie Svensson eller Charlie J. Svensson";
$LANG["Names_example_surname"] = "Smith (efternamn)";
$LANG["Names_help_intro"] = "Denna datatyp genererar slumpmässigt människonamn (mestadels västerländska) enligt det format du anger. Du kan ange flera format genom att separera dem med raka strecktecknet (|). Följande strängar kommer att konverteras till deras motsvarande slumpmässiga namn:";
$LANG["Names_incomplete_fields"] = "Namn datatyp måste ha formatet in i Alternativ. Korrigera med följande rader:";
$LANG["Names_name"] = "Namn";
$LANG["Names_type_FemaleName"] = "Ett kvinnligt förnamn.";
$LANG["Names_type_Initial"] = "En versal bokstav, AZ.";
$LANG["Names_type_MaleName"] = "Ett manligt förnamn.";
$LANG["Names_type_Name"] = "Ett förnamn, man eller kvinna.";
$LANG["Names_type_Surname"] = "Ett slumpmässigt efternamn.";
$LANG["NumberRange_and"] = "och";
$LANG["NumberRange_between"] = "Mellan";
$LANG["NumberRange_help"] = "Detta genererar slumpmässigt ett nummer mellan de värden du anger. Båda fälten kan du skriva in negativa tal.";
$LANG["NumberRange_name"] = "Antal Range";
$LANG["Phone_different_formats"] = "Olika format";
$LANG["Phone_example_1"] = "Kanada (1)";
$LANG["Phone_example_2"] = "Kanada (2)";
$LANG["Phone_help_text1"] = "Den text du anger i det alternativa textfältet kommer att användas för att generera telefonnummer. Versala <b> X </ b>  kommer att omvandlas till ett slumpmässigt nummer mellan 1 och 9, gemena <b> x </ b>: kommer att omvandlas till ett slumptal mellan 0 och 9.";
$LANG["Phone_help_text2"] = "Välj ett av värdena i exempelrullgardinslisten för att få lite idéer. Kom ihåg: Allt annat än <b> X </ b> och <b> x </ b> kommer att stå kvar oändrat.";
$LANG["Phone_help_text3"] = "Som med många andra datatyper ska du separera telefonnummer med tecknet för rakt streck (|) för att få ut dem i flera format.";
$LANG["Phone_incomplete_fields"] = "The Phone datatyp måste ha formatet in i Alternativ. Korrigera med följande rader:";
$LANG["Phone_name"] = "Telefon / Fax";
$LANG["Phone_uk"] = "Storbritannien";
$LANG["PostalZip_help_text"] = "Genererar ett slumpmässigt postnummer. För större kontroll, använd  alfanumerisk datatyp.";
$LANG["PostalZip_name"] = "Postnummer";
$LANG["StateProvince_help_text"] = "Genererar slumpmässiga kanadensiska provinser, länder, territorier eller län, baserat på de alternativ du väljer. Underalternativen <b> Fullständigt namn </ b> och <b> Förkortning </ b> avgör om utdatan kommer att innehålla hela strängen (t.ex. \"British Columbia\") eller dess förkortning (t.ex. \"BC\"). För län i Storbritannien, är förkortningen den standardiserade Chapman-koden (tre tecken).";
$LANG["StateProvince_name"] = "Stat / provins / Län";
$LANG["StreetAddress_ap_num"] = "Stat #";
$LANG["StreetAddress_name"] = "Gatuadress";
$LANG["StreetAddress_po_box"] = "Box";
$LANG["StreetAddress_street_types"] = "G., gata, v., väg, St.,St.,Street,Rd., Rd., Ave, Av. Avenue";
$LANG["TextFixed_generate"] = "Generera";
$LANG["TextFixed_help"] = "Detta alternativ ger ett fast antal slumpmässiga ord, drog från standard &lt;a href=&quot;http://en.wikipedia.org/wiki/Lorem_ipsum&quot; target=&quot;_blank&quot;&gt; Lorem ipsum &lt;/ a&gt; latinsk text.";
$LANG["TextFixed_name"] = "Fasta Antal ord";
$LANG["TextFixed_words"] = "ord";
$LANG["TextRandom_name"] = "Random Antal ord";
$LANG["Tree_auto_increment_row_num"] = "Auto-ökning radnummer:";
$LANG["Tree_help_1"] = "Denna datatyp kan du skapa träd-liknande uppgifter där varje rad är ett barn från en annan rad - utom de allra första raden, som är stammen på trädet. Denna datatyp måste användas tillsammans med Auto-Increment datatyp: som säkerställer att varje rad har ett unikt numeriskt värde, som denna datatyp används för att referera till föräldern rader.";
$LANG["Tree_help_2"] = "Alternativen kan du ange vilken av dina formulärfält är ett lämpligt automatisk ökning område och det maximala antalet barn som en nod kan ha.";
$LANG["Tree_invalid_parent"] = "[Ogiltig förälder]";
$LANG["Tree_max_num_sibling_nodes"] = "Max antal syskon noder:";
$LANG["Tree_name"] = "Tree (förälder rad ID)";
$LANG["about"] = "Om";
$LANG["accounts"] = "Konton";
$LANG["add"] = "Lägg till";
$LANG["add_default_auto_increment_col"] = "Lägg standard automatisk ökning kolumnen";
$LANG["column_title"] = "Kolumntitel";
$LANG["confirm_delete_form"] = "Är du säker på att du vill ta bort denna form?";
$LANG["confirm_empty_form"] = "Är du säker på att du vill tömma detta formulär?";
$LANG["countries"] = "Länder";
$LANG["country_australia"] = "Australien";
$LANG["country_belgium"] = "Belgien";
$LANG["country_canada"] = "Kanada";
$LANG["country_netherlands"] = "Nederländerna";
$LANG["country_uk"] = "Storbritannien";
$LANG["country_us"] = "USA";
$LANG["data_type"] = "Datatyp";
$LANG["db_table_name"] = "Databastabell namn";
$LANG["db_type"] = "Databastyp";
$LANG["default_save_form_empty_str"] = "Ange formulärnamn här";
$LANG["del"] = "Ta bort";
$LANG["del_uc"] = "TA BORT";
$LANG["delimiter_chars"] = "Avgränsningstecken";
$LANG["donate"] = "Donera!";
$LANG["empty_form"] = "Tomt formulär";
$LANG["enclose_table_backquotes"] = "Omge tabell och fältnamn med citattecken";
$LANG["eol_char"] = "Radslutstecken";
$LANG["examples"] = "Exempel";
$LANG["fatal_error"] = "Ett allvarligt fel uppstod.";
$LANG["form_deleted"] = "Blanketten har tagits bort.";
$LANG["form_exists_overwrite_confirmation"] = "Denna blankett finns redan. Vill du skriva över den?";
$LANG["form_not_deleted"] = "Tyvärr kunde vi inte ta bort denna form. Re-logga in och försök igen.";
$LANG["form_saved"] = "Formuläret har sparats.";
$LANG["forums"] = "Forum";
$LANG["generate"] = "GenererarnSkapa";
$LANG["generator"] = "Generator";
$LANG["help"] = "Hjälp";
$LANG["hide_error"] = "Dölj fel";
$LANG["human_data"] = "Humandata";
$LANG["include_create_table_query"] = "Inkludera CREATE TABLE fråga";
$LANG["include_drop_table_query"] = "Inkludera DROP tabellfråga";
$LANG["invalid_custom_xml"] = "Det finns ett problem med den anpassade XML-koden som du angav. Läs mer i dokumentation för mer information.";
$LANG["invalid_node_names"] = "XML nodnamn kan får bara innehålla alfanumeriska tecken och måste börja med en bokstav. Korrigera med följande rader:";
$LANG["invalid_num_results"] = "Ange ett giltigt antal resultat.";
$LANG["invalid_table_names"] = "Databas kolumnnamn kan bara alfanumeriska tecken och måste börja med en bokstav. Korrigera med följande rader:";
$LANG["invalid_xml_record_node_name"] = "Ange ett giltigt XML-postnodsvärde.";
$LANG["invalid_xml_root_node_name"] = "Ange ett giltigt XML-värde för rotnoden.";
$LANG["load_uc"] = "LADDA";
$LANG["misc_options"] = "Övriga alternativ";
$LANG["missing_node_names"] = "Följande rader har saknas nodnamn:";
$LANG["missing_table_names"] = "Följande rader har saknas tabellkolumn namn:";
$LANG["missing_xml_record_node_name"] = "Ange ett värde för XML-postens nod.";
$LANG["missing_xml_root_node_name"] = "Ange ett värde för XML rotnoden.";
$LANG["no_csv_delimiter"] = "Fyll i CSV avgränsare.";
$LANG["no_data"] = "Oj, inget att generera! Ange lite data som ska skapas.";
$LANG["no_examples_available"] = "Inga exempel finns.";
$LANG["no_form_name"] = "Ange ett formulär namn.";
$LANG["no_js"] = "<b> Fel: </ b> JavaScript är inte aktiverat.";
$LANG["no_js_blurb"] = "Data-skriptet är starkt beroende av javascript. Du måste aktivera det i din webbläsare och uppdatera den här sidan.";
$LANG["no_num_rows"] = "Ange antalet rader att lägga till.";
$LANG["no_options_available"] = "Inga alternativ.";
$LANG["node_name"] = "Nodnamn";
$LANG["none"] = "Ingen";
$LANG["num_results"] = "Antal resultat";
$LANG["ok"] = "OK";
$LANG["options"] = "Alternativ";
$LANG["order"] = "Ordning";
$LANG["other"] = "Andra";
$LANG["please_fix_errors"] = "Korrigera följande fel och skicka:";
$LANG["please_select"] = "Välj";
$LANG["primary_key"] = "Primär nyckel";
$LANG["record_node_name"] = "Posts nodnamn";
$LANG["result_type"] = "Resultattyp";
$LANG["root_node_name"] = "Rotnodens namn";
$LANG["row_sp"] = "Rader";
$LANG["save_uc"] = "SPARA";
$LANG["script_thinking"] = "Oj, vänta en sekund. Skriptet tänker.";
$LANG["see_help_popup"] = "Se hjälp popup.";
$LANG["select_language"] = "Välj språk";
$LANG["statement_type"] = "Typ av uttalande";
$LANG["table_column"] = "Tabellkolumn";
$LANG["text"] = "Text";
$LANG["use_custom_xml_format"] = "Använd egna XML-format";
$LANG["website"] = "Webbplats";

?>