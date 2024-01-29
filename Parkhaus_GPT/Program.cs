
//add 10 cars to a list
List<Auto> pkwList = new List<Auto>()
{
    new Auto("B-AB 123", "red", "2010", "VW", 5, 4),
    new Auto("B-CD 456", "blue", "2015", "Audi", 5, 4),
    new Auto("B-EF 789", "green", "2018", "BMW", 5, 4),
    new Auto("B-GH 012", "black", "2019", "Mercedes", 5, 4),
    new Auto("B-IJ 345", "white", "2017", "VW", 5, 4),
    new Auto("B-KL 678", "red", "2016", "Audi", 5, 4),
    new Auto("B-MN 901", "blue", "2014", "BMW", 5, 4),
    new Auto("B-OP 234", "green", "2013", "Mercedes", 5, 4),
    new Auto("B-QR 567", "black", "2012", "VW", 5, 4),
    new Auto("B-ST 890", "white", "2011", "Audi", 5, 4)
};

//add 5 trucks to a list
List<LKW> lkwList = new List<LKW>()
{
    new LKW("B-UV 123", "red", "2010", "VW", 4, 2),
    new LKW("B-WX 456", "blue", "2015", "Audi", 4, 2),
    new LKW("B-YZ 789", "green", "2018", "BMW", 4, 2),
    new LKW("B-AB 012", "black", "2019", "Mercedes", 4, 2),
    new LKW("B-CD 345", "white", "2017", "VW", 4, 2)
};

//Q: How can i search for a specific truck in the list?
//A: With the Find() method
//Can you make me a Query to get the Truck with the License PLate "B-CD 345" and echo the result in terminal
LKW lkw = lkwList.Find(x => x.Kennzeichen == "B-CD 345");
Console.WriteLine($"License Plate: {lkw.Kennzeichen}");
Console.WriteLine($"Color: {lkw.Farbe}");
Console.WriteLine($"Year: {lkw.Baujahr}");
Console.WriteLine($"Manufacturer: {lkw.Hersteller}");
Console.WriteLine($"Number of Axles: {lkw.AnzahlAchsen}");
Console.WriteLine($"Maximum Load: {lkw.MaxLadung}");

//Kannst du mir 3 beispiels abfragen generien?
//1. Alle Autos mit der Farbe Rot
// Generiere mir eine Linq Abfrage für alle Rote Autos und geb die Daten zu diesen im Terminal aus
List<Auto> redCars = pkwList.Where(x => x.Farbe == "red").ToList();
foreach (Auto a in redCars)
{
    Console.WriteLine($"License Plate: {a.Kennzeichen}");
    Console.WriteLine($"Color: {a.Farbe}");
    Console.WriteLine($"Year: {a.Baujahr}");
    Console.WriteLine($"Manufacturer: {a.Hersteller}");
    Console.WriteLine($"Number of Doors: {a.AnzahlTueren}");
    Console.WriteLine($"Number of Wheels: {a.AnzahlRaeder}");
    Console.WriteLine();
}
//2. Alle Autos mit dem Hersteller VW
// Generiere mir eine Linq Abfrage für alle Autos mit dem Hersteller VW
List<Auto> vwCars = pkwList.Where(x => x.Hersteller == "VW").ToList();
foreach (Auto a in vwCars)
{
    Console.WriteLine($"License Plate: {a.Kennzeichen}");
    Console.WriteLine($"Color: {a.Farbe}");
    Console.WriteLine($"Year: {a.Baujahr}");
    Console.WriteLine($"Manufacturer: {a.Hersteller}");
    Console.WriteLine($"Number of Doors: {a.AnzahlTueren}");
    Console.WriteLine($"Number of Wheels: {a.AnzahlRaeder}");
    Console.WriteLine();
}

//Wie funktioniert eine Abstrakte klasse?
//Eine Abstrakte Klasse ist eine Klasse die nicht instanziert werden kann. Sie dient als Vorlage für andere Klassen.
abstract class Fahrzeug
{
    public string Kennzeichen { get; set; }

    public string Farbe { get; set; }

    public string Baujahr { get; set; }

    public string Hersteller { get; set; }

    public Fahrzeug(string kennzeichen, string farbe, string baujahr, string hersteller)
    {
        Kennzeichen = kennzeichen;
        Farbe = farbe;
        Baujahr = baujahr;
        Hersteller = hersteller;
    }
}
class Auto : Fahrzeug
{
    public int AnzahlTueren { get; set; }
    public int AnzahlRaeder { get; set; }

    public Auto(string kennzeichen, string farbe, string baujahr, string hersteller, int anzahlTueren, int anzahlRaeder) : base(kennzeichen, farbe, baujahr, hersteller)
    {
        AnzahlTueren = anzahlTueren;
        AnzahlRaeder = anzahlRaeder;
    }
}

class LKW : Fahrzeug
{
    public int AnzahlAchsen { get; set; }
    public int MaxLadung { get; set; }

    public LKW(string kennzeichen, string farbe, string baujahr, string hersteller, int anzahlAchsen, int maxLadung) : base(kennzeichen, farbe, baujahr, hersteller)
    {
        AnzahlAchsen = anzahlAchsen;
        MaxLadung = maxLadung;
    }
}

//Q: Was ist Query auf Deutsch?
//A: Abfrage