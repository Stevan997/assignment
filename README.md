# assignment
 Job interview assignment
    Na osnovu priloženog .csv fajla napraviti bazu podataka i popuniti je podacima iz njega.
    Potrebno je obratiti pažnju na normalizaciju podataka prilikom modelovanja baze podataka.
    Nakon uvoza podataka u bazu napraviti REST putanje koje bi omogućile različitim klijentima da pristupaju i dobijaju informacije o proizvodima

    Celine koje je neophodno uraditi:
        1 - Kreirati MySQL bazu
        2 - Sadržaj .csv fajla otvoriti i transformisati kako bi se baza napunila podacima iz aplikacije (potrebno je napraviti tu funkcionalnost u projektu)
        3 - Čitanje iz baze podataka i prikazivanje rezultata u JSON formatu
        4 - REST putanje koji trebaju da se naprave trebaju da imaju sledeće funkcionalnosti:
            * - Prikazivanje svih kategorija
            * - Izmena naziva Kategorija
            * - Brisanje Kategorija	
            * - prikazivanje svih proizvoda
            * - prikazivanje svih proizvoda koji pripadaju određenoj kategoriji
            * - izmena proizvoda
            * - brisanje proizvoda
            * - Kreiranje proizvoda i kategorija NIJE POTREBNO za potrebe ovog testa, jer ih već ubacujemo prilikom parsiranja .csv fajla
        5 - Koristiti Git - Poželjno je da bude što više Commit-ova od strane kandidata
        
    Test se može raditi u Čistom PHP-u ili u Laravel/luumen framework-u u zavisnosti od toga koje okruženje Vam više odgovara.


Jedina ruta koja moze biti otvorena:
/products/import-form

Ostale su API putanje.
