<?php
function lang($phrase){
    static $lang = array(
		'CHAIN_COIN' => 'Blokketenleeftijdsbestemming [Dagen/Munten]',
		'AVGCHAIN_DAYS' => '&#216; Blokketenleeftijd [<small><sup>Dagen</sup>/<sub>Munten</sub></small>]',
		'CHAIN_DAYS' => 'Blokketenleeftijd [Dagen]',
		'COIN_EMC' => 'Munten beschikbaar [EMC]',
		'DAYS_DAYS' => 'Dagen',
		'DIFFICULTY_DIFFICULTY' => 'Moeilijkheid',
		'EMPTY_ADDRESSES' => 'Lege adressen',
		'FLAG_FLAG' => 'Type',
		'HOURS_HOURS' => 'Uren',
		'ID_ID' => 'ID',
		'IN_ADDRESSES' => 'Gebruikte adressen',
		'MINUTES_MINUTES' => 'Minuten',
		'NEWER_NEWER' => 'Nieuwer',
		'OLDER_OLDER' => 'Ouder',
		'POS_COIN' => 'PoS &#216; Leeftijdsbestemming [<small><sup>Dagen</sup>/<sub>Munten</sub></small>]',
		'POS_DAYS' => 'PoS-leeftijdsbestemming [Tage]',
		'POS_EMC' => 'PoS-aandeel [EMC]',
		'POS_POS' => 'PoS',
		'POW_POW' => 'PoW',
		'REWARD_EMC' => 'Beloning [EMC]',
		'SEARCH_SEARCH' => 'Zoek',
		'SECONDS_SECONDS' => 'Seconden',
		'SELECT_RANGE' => 'Kies blokbereik',
		'SHOW_COLUMNS' => 'Toon/Verberg kolommen',
		'TIME_AGO' => 'Tijd geleden',
		'TX_COIN' => 'TX &#216; Leeftijdsbestemming [<small><sup>Dagen</sup>/<sub>Munten</sub></small>]',
		'TX_COUNT' => 'TX-aantal',
		'TX_DAYS' => 'TX-leeftijdsbestemming [Dagen]',
		'TX_VOLUME_EMC' => 'TX-volume [EMC]',
		'TX_FEE_EMC' => 'TX-kosten [EMC]',
		'AVERAGE_CHARTS' => 'Diagrammen met gemiddelden',
		'DAILY_SUMMARY' => 'dagelijkse samenvatting',
		'AVG_AGE' => 'Gemiddelde muntleeftijd',
		'COIN_DESTROYED' => 'Vernietigde muntdagen',
		'COIN_SUPPLY' => 'Muntbeschikbaarheid',
		'POW_MINTED' => 'PoW/PoS EMC gevonden',
		'TOTAL_AGE' => 'Totale muntleeftijd',
		'UNUSED_ADDRESSES' => 'Ongebruikte adressen',
		'USED_ADDRESSES' => 'Gebruikte adressen',
		'CHANNEL_ADS' => 'Kanaal, bijv. reclames',
		'SPECIFY_CHANNEL' => 'Kies een kanaal',
		'SUBJECT_PATTERN' => 'Onderwerp(patroon)',
		'TYPE_BUY' => 'Type, bijv. verkoop, aankoop',
		'DO_SERVICE' => 'Bevalt deze dienst?',
		'DONATION_DONATION' => 'Doneer',
		'INFO_FEEDBACK' => 'Info / Feedback',
		'REFERRAL_REFERRAL' => 'Doorverwijzen',
		'COINS_AVAILABLE' => 'Beschikbare Emercoins',
		'CONFIRMED_TRANSACTIONS' => 'Bevestigde transacties',
		'EXPLORE_EXPLORE' => 'Recentste transacties',
		'LATEST_BLOCK' => 'Recentste blok',
		'POS_DIFFICULTY' => 'PoS-moeilijkheid',
		'POW_DIFFICULTY' => 'PoW-moeilijkheid',
		'THERE_TRANSACTIONS' => 'Er zijn momenteel geen onbevestigde transacties.',
		'TRANSACTION_VOLUME' => 'Transactievolume',
		'TX_ID' => 'TX-ID',
		'UNCONFIRMED_TRANSACTIONS' => 'Onbevestigde transacties',
		'VALUE_EMC' => 'Waarde [EMC]',
		'WELCOME_EXPLORER' => 'Welkom bij de Emercoin-blokketenexplorer',
		'ADDRESS_TX' => 'Adres/Blok/TX',
		'CHAIN_CHAIN' => 'Blok',
		'CHARTS_CHARTS' => 'Diagramme',
		'EMERBOARD_EMERBOARD' => 'EmerBoard',
		'NVS_NVS' => 'NVS',
		'SHOW_SHOW' => 'Toon',
		'STATS_STATS' => 'Statistieken',
		'TOP_TOP' => 'Top 100',
		'WALLET_WALLET' => 'Portemonnee',
		'N_HIDE' => 'Negeer leeg type',
		'N_SHOW' => 'Toon alle typen',
		'NAME_NAME' => 'Naam',
		'REGISTERED_AT' => 'Geregistreerd bij',
		'RESULTS_PAGE' => 'Resultaten per pagina:',
		'SEARCH_NVS' => 'Doorzoek de NVS',
		'TYPE_TYPE' => 'Type',
		'VALID_DATED' => 'Geldig & Verlopen',
		'VALID_ONLY' => 'Geldig',
		'VALID_UNTIL' => 'Geldig tot en met',
		'VALUE_VALUE' => 'Waarde',
		'VALUE_VALUENVS' => 'Waarde',
		'24H_STATISTICS' => '24-uursstatistieken',
		'24H_STATISTICS' => '24-uurstransactiestatistieken',
		'AVG_COIN' => 'Gemiddelde Dagen/Munten',
		'BASED_H' => 'gebaseerd op de laatste 24 uur',
		'BASED_TRANSACTIONS' => 'gebaseerd op de laatste 24 uur - zonder coinbase of PoS-transacties',
		'BLOCKCHAIN_STATISTICS' => 'Blokketenstatistieken',
		'BLOCKS_BLOCKS' => 'Blokken',
		'BLOCKS_FOUND' => 'Gevonden blokken',
		'CHAIN_LENGTH' => 'Blokketenlengte',
		'CHAIN_SIZE' => 'Blokketengrootte',
		'COIN_DESTROYED' => 'Vernietigde muntdagen',
		'EMC_MINTED' => 'Gevonden EMC',
		'GENERAL_DAYS' => 'Algemene statistieken - de labels tonen geëxtrapoleerde dagelijkse wijziging (gebaseerd op de laatste 14 dagen)',
		'KNOWN_ADDRESSES' => 'Bekende adressen',
		'MINUTES_BLOCKS' => 'Minuten tussen twee blokken',
		'NAME_STATISITICS' => 'Naam Waarde Opslag Statistieken',
		'TOP_TYPES' => 'Top 5-typen',
		'TOTAL_FEES' => 'Totale transactiekosten',
		'TOTAL_OUTPUT' => 'Totale transactie-uitgangen',
		'TOTAL_TOTAL' => 'Totaal',
		'TOTAL_VALUES' => 'Totale waardes',
		'TRANSACTIONS_TRANSACTIONS' => 'Transacties',
		'UNUSED_UNUSED' => 'Ongebruikt',
		'USED_USED' => 'Gebruikt',
		'VALID_RECORDS' => 'Geldige DNS-records',
		'VALID_VALUES' => 'Geldige waardes',
		'ACCOUNT_ACCOUNT' => 'Account',
		'ADDRESS_ADDRESS' => 'Adres',
		'BALANCE_EMC' => 'Saldo [EMC]',
		'HOLDINGS_EMC' => 'Bezit [EMC]',
		'LAST_RECEIVE' => 'Laatst ontvangen',
		'LAST_SENT' => 'Laatst verzonden',
		'OTHERS_OTHERS' => 'Anders',
		'PERCENTAGE_COINS' => 'Aandeel in Munten [%]',
		'PERCENTAGE_PERCENTAGE' => 'Aandeel [%]',
		'RANK_RANK' => 'Rang',
		'TOP_ACCOUNTS' => 'Topaccounts',
		'TOP_100ACCOUNTS' => 'Top 100-accounts',
		'TOP_ADDRESSES' => 'Topadressen',
		'WEALTH_DISTRIBUTION' => 'Vermogensdistributie',
		'ADDITIONAL_APPLY' => 'Extra transactiekosten zijn van toepassing.',
		'ADDRESS_BOOK' => 'Adresboek',
		'ALL_TRANSACTIONS' => 'Alle transacties',
		'AMOUNT_EMC' => 'Bedrag [EMC]',
		'BALANCE_BALANCE' => 'Saldo',
		'BETA_RISK' => 'Bètafase - Gebruik op eigen risico!',
		'BUY_ADDRESS' => 'Koop een nieuw adres',
		'CAPTCHA_CAPTCHA' => 'captcha',
		'CATEGORY_CATEGORY' => 'Categorie',
		'FEE_FEE' => 'Transactiekosten',
		'FROM_TO' => 'Van/Aan',
		'GET_ADDRESS' => 'Neem een nieuw adres',
		'I_THE' => 'Ik ben akkoord met de',
		'TERMS_SERVICE' => 'gebruiksvoorwaarden',
		'LABEL_LABEL' => 'Label',
		'LOGIN_LOGIN' => 'Meld aan',
		'NAME_DELETE' => 'NVS-verwijdering',
		'NAME_NAME' => 'Naam',
		'NEW_NAME' => 'NVS-entry',
		'NAME_UPDATE' => 'NVS-update',
		'NEW_ADDRESS' => 'Nieuw adres',
		'NEW_ENTRY' => 'Nieuwe entry',
		'NVS_NVS' => 'NVS',
		'OR_OR' => 'OF',
		'OVERVIEW_OVERVIEW' => 'Overzicht',
		'SETTINGS_SETTINGS' => 'Instellingen',
		'LOGOUT_LOGOUT' => 'Meld aan',
		'PASSWORD_PASSWORD' => 'Wachtwoord',
		'RECEIVE_RECEIVE' => 'Ontvang',
		'RECENT_TRANSACTIONS' => 'Recentste transacties',
		'REGISTER_REGISTER' => 'Registreer',
		'REPEAT_PASSWORD' => 'Herhaal wachtwoord',
		'SAVE_SAVE' => 'Sla op',
		'SEND_SEND' => 'Verstuur',
		'STAKE_STAKE' => 'Aandeel',
		'STATUS_STATUS' => 'Status',
		'THIS_BALANCE1' => 'Deze transactie zal in rekening brengen',
		'THIS_BALANCE2' => 'EMC van je saldo.',
		'TRANSACTION_EMC' => 'Transactiekosten:',
		'USERNAME_USERNAME' => 'Gebruikersnaam',
		'VALID_EXTERNAL' => 'geldig (extern)',
		'VALID_INTERNAL' => 'geldig (intern)',
		'VOLUME_VOLUME' => 'Volume',
		'EMCSSL_VERYHIGH' => 'Gebruik EMCSSL met huidige wachtwoord [zeer hoge veiligheid]',
		'EMCSSL_HIGH' => 'EMCSSL zonder wachtwoord [hoge veiligheid]',
		'EMCSSL_LOW' => 'EMCSSL of wachtwoord [lage veiligheid]',
		'EMCSSL_DEACTIVATE' => 'Deactiveer EMCSSL',
		'YOUR_CERTIFICATE' => 'Jouw EMCSSL-certificaat',
		'YOU_LOGIN' => 'Je kan EMCSSL gebruiken om je login te beveiligen.',
		'WHAT_EMCSSL' => 'Wat is EMCSSL?',
		'UPDATE_SETTINGS' => 'Update instellingen',
		'CURRENT_PASSWORD' => 'Huidige wachtwoord',
		'NEW_PASSWORD' => 'Nieuw wachtwoord',
		'REPEATNEW_PASSWORD' => 'Herhaal nieuw wachtwoord',
		'DAYS_COIN' => '<sup>Dagen</sup>/<sub>Munten</sub>',
		'ANNUAL_GROWTH' => 'Jaarlijkse groei',
		'PER_CHARTS' => 'Diagrammen per blok',
		'POS_DIFF' => 'PoS-moeilijkheid',
		'POW_DIFF' => 'PoW-moeilijkheid',
		'COIN_AGE' => 'Muntleeftijd',
		'TX_ONLY' => 'tx met kosten > 0',
		'POW_BLOCKS' => 'PoW/PoS-blokken',
		'TOP_100ADDRESSES' => 'Top 100-adressen',
		'NEVER_NEVER' => 'nooit',
		'ALL_ALL' => 'Alle',
		'COIN_DISTRIBUTION' => 'Muntverdeling',
		'LOGIN_SUCCESSFULL' => 'Login was succesvol',
		'LOGIN_NOTSUCCESSFULL' => 'Login was niet succesvol',
		'AT_NECESSARY' => 'Tenminste vier karakters zijn nodig',
		'PLEASE_CHARACTERS' => 'Gebruik maximaal vijftig karakters',
		'A_REQUEST' => 'Er is een probleem opgetreden. Herzie je verzoek.',
		'PLEASE_SERVICE' => 'Accordeer de gebruikersvoorwaarden.',
		'PASSWORDS_MATCH' => 'Wachtwoorden komen overeen',
		'PASSWORDS_NOMATCH' => 'Wachtwoorden komen niet overeen',
		'THIS_TAKEN' => 'Deze naam is al in gebruik',
		'THIS_FREE' => 'Deze naam is nog vrij',
		'INVALID_CAPTCHA' => 'Ongeldige captcha',
		'REQUEST_INCOMPLETE' => 'Het verzoek was incompleet',
		'USER_CREATED' => 'De gebruiker is aangemaakt',
		'UNCONFIRMED_UNCONFIRMED' => 'Onbevestigd',
		'RESERVED_RESERVED' => 'Gereserveerd',
		'STOCK_BTC' => 'Börse - EMC/BTC',
		'STOCK_USD' => 'Börse - EMC/USD',
		'STAKE_PERIOD' => 'Aandeel in deze periode',
		'EARNED_STAKE' => 'Verdiend aandeel',
		'AVERAGE_AT' => 'Gemiddelde prijs van',
		'VWAP_VWAP' => 'VWAP',
		'LAST_LAST' => 'Laatst',
		'LOW_LOW' => 'Laag',
		'HIGH_HIGH' => 'Hoog',
		'SENT_SENT' => 'Verstuurd',
		'INVALID_INVALID' => 'ongeldig',
		'THIS_EXTERNALADDRESS' => 'Dit is een extern adres',
		'THIS_INVALIDADDRESS' => 'Dit adres is ongeldig',
		'THIS_TO' => 'Dit adres is eigendom van',
		'YOU_YOU' => 'jij',
		'NEW_CREATED' => 'Een nieuwe entry in je adresboek is gecreëerd.',
		'SOMETHING_WRONG' => 'Er ging iets mis.',
		'SYSTEM_SYSTEM' => 'Systeem',
		'ADDRESS_REMOVED' => 'Entry is uit je adresboek verwijderd.',
		'NAME_CHANGED' => 'Naam is aangepast.',
		'ADDRESS_CHANGED' => 'Adres is aangepast.',
		'SEND_COINS' => 'Verstuur munten',
		'THIS_SUBSTRACTBALANCE' => 'Deze transactie zal van je saldo "+(parseFloat(amount)+parseFloat(fee))+" EMC in mindering brengen van je saldo.',
		'THIS_SUBSTRACTBALANCE2' => 'Deze transactie zal van je saldo "+amount+" EMC in mindering brengen.',
		'TRANSACTION_QUEUE' => 'Deze transactie wordt toegevoegd aan de wachtrij.',
		'EMC_TO' => 'EMC is overgemaant aan',
		'ADDRESSES_ADDRESSES' => 'Adressen',
		'RECEIVED_RECEIVED' => 'Ontvangen',
		'LABEL_CHANGED' => 'Label is aangepast.',
		'NEW_ADDRESSCREATED' => 'Nieuw adres is gecreëerd.',
		'REGISTER_PAIR' => 'Registreer naam->Waardepaar',
		'UPDATE_PAIR' => 'Update naam->Waardepaar',
		'DELETE_PAIR' => 'Verwijder naam->Waardepaar',
		'REGISTER_NAME' => 'Registreer naam',
		'THE_LATER' => 'De portemonneecliënt heeft de mogelijkheid om munten naar een naam te sturen.
Deze naam wordt aan een registratieadres gekoppeld, dat altijd een nieuw adres is.
Voor munten die naar dit adres worden verzonden hoef je niets te betalen.
Je kan het registratieadres aanpassen naar een van je huidige adressen of elk ander adres op een later tijdstip.',
		'ADDITIONAL_DAYS' => 'Additionele dagen',
		'UPDATE_NAME' => 'Update naam',
		'MOVE_ADDRESS' => 'Verplaatsen naar adres',
		'DELETE_NAME' => 'Naam verwijderen',
		'NAME_REGFEES' => 'Naamregistratiekosten',
		'NAME_UPFEES' => 'Naamupdatekosten',
		'NAME_CONFIRMED' => 'Naam is succesvol geregistreerd - wacht totdat dit is bevestigd',
		'NAME_DELETED' => 'Naam is verwijderd',
		'NAME_UPSUCCESS' => 'Naamswijziging was succesvol',
		'THIS_NAMETAKEN' => 'Deze naam is al in gebruik',
		'BLOCK_DETAILS' => 'Blokdetails',
		'HASH_HASH' => 'Hash',
		'TIME_TIME' => 'Tijd',
		'NONCE_NONCE' => 'Nonce',
		'MERKLE_ROOT' => 'Merkle-wortel',
		'INPUTS_INPUTS' => 'Ingangen',
		'OUTPUTS_OUTPUTS' => 'Uitgangen',
		'MINT_MINT' => 'Nieuw gevonden',
		'SIZE_SIZE' => 'Grootte',
		'COIN_COIN' => 'Munt',
		'UNKNOWN_BLOCK' => 'Onbekend blok',
		'PLEASE_HASH' => 'Voer een geldig adres, blokhash, blok-ID of transactiehash in.',
		'TRANSACTION_OVERVIEW' => 'Transactieoverzicht',
		'DATE_DATE' => 'Datum',
		'UNKNOWN_ADDRESS' => 'Onbekend adres',
		'NO_PROVIDED' => 'Geen adres ingevoerd',
		'COINS_COINS' => 'Munten',
		'RECEIVED_TX' => 'Ontvangen in TX',
		'SPEND_TX' => 'Verstuurd in TX',
		'AGE_AGE' => 'Leeftijd',
		'MINTING_CHANCE' => 'Kans op PoS-blok',
		'WITHIN_H' => 'binnen 24 uur',
		'ESTIMATED_REWARD' => 'Geschatte beloning',
		'ESTIMATED_ACCVALUE' => 'Geschatte accountwaarde',
		'SHOW_ADDRESSES' => 'Toon lege adressen',
		'TRANSACTION_DETAILS' => 'Transactiedetails',
		'CONFIRMED_BLOCK' => 'Bevestigd door blok',
		'TRACE_TRACE' => 'Spoor',
		'COIN_DAYS' => 'Muntdagen',
		'UNSPEND_UNSPEND' => 'niet uitgegeven',
		'EMCSSL_SET' => 'EMCSSL-instellingen zijn opgeslagen',
		'MAINTENANCE_MAINTENANCE' => 'De Emercoin-blokketenexplorer is wegens onderhoud momenteel niet beschikbaar.!',
		'UNKNOWN_TRANSACTIONS' => 'Onbekende transactie',
		'NO_TXPROVIDED' => 'Geen transactie ingevoerd',
		'TRACE_OF' => 'Spoor van',
		'CLAIM_NAME' => 'Claim naam',
		'CLAIM_INFO' => 'Als je een naam naar een van je online-adressen hebt verplaatst (d.m.v. een name_update) kun je er hier claimen.',
		'NAME_CLAIMED' => 'Je hebt deze naam geclaimd.',
		'NAME_BELONG' => 'Deze naam behoort niet tot een van je adressen.',
		'NAME_NOTREGISTERED' => 'Deze naam is niet geregistreerd.',
		'INTEREST_INTEREST' => 'Rente',
		'EXPECTED_INTEREST' => 'Verwachte jaarlijkse rente',
		'AVERAGE_INTEREST' => 'Gemiddelde dagelijkse rente',
		'BASED_M' => 'gebaseerd op de afgelopen maand',
		'WALLET_BLOCKS' => 'Gevonden blokken',
		'POOL_STATISTICS' => 'Poolstatistieken'
		);
    return $lang[$phrase];
}
?>
