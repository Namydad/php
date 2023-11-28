//Q: How do lists work in C# 
//A: A list is a collection of objects that are ordered by index.
//Q: How are they indexed?
//A: Lists are indexed starting at 0.
//Q: How do you add items to a list?
//A: You can add items to a list using the Add() method.
//Q: How do you remove items from a list?
//A: You can remove items from a list using the Remove() method.
//Q: How do you access items in a list?
//A: You can access items in a list using the index of the item.

//add 10 cars to the list
List<Auto> pkwList = new List<Auto>()
{
    new Auto("HH AB 123", "Rot", 2010, "VW", 5, 4),
    new Auto("HH AB 124", "Blau", 2011, "BMW", 5, 4),
    new Auto("HH AB 125", "Grün", 2012, "Audi", 5, 4),
    new Auto("HH AB 126", "Gelb", 2013, "Porsche", 5, 4),
    new Auto("HH AB 127", "Schwarz", 2014, "Mercedes", 5, 4),
    new Auto("HH AB 128", "Weiß", 2015, "Opel", 5, 4),
    new Auto("HH AB 129", "Braun", 2016, "Ford", 5, 4),
    new Auto("HH AB 130", "Grau", 2017, "Toyota", 5, 4),
    new Auto("HH AB 131", "Orange", 2018, "Honda", 5, 4),
    new Auto("HH AB 132", "Pink", 2019, "Fiat", 5, 4),
};

//add 5 trucks to the list
List<LKW> lkwList = new List<LKW>()
{
    new LKW("HH CD 123", "Rot", 2010, "VW", 4, 2),
    new LKW("HH CD 124", "Blau", 2011, "BMW", 4, 2),
    new LKW("HH CD 125", "Grün", 2012, "Audi", 4, 2),
    new LKW("HH CD 126", "Gelb", 2013, "Porsche", 4, 2),
    new LKW("HH CD 127", "Schwarz", 2014, "Mercedes", 4, 2),
};

// Q: What is a Query?
// A: A query is a set of instructions that you can use to retrieve data from a data source.

//add all cars and trucks to the list
List<Fahrzeug> fahrzeugList = new List<Fahrzeug>();
fahrzeugList.AddRange(pkwList);
fahrzeugList.AddRange(lkwList);

//print all cars and trucks to the console
foreach (Fahrzeug f in fahrzeugList)
{
    Console.WriteLine($"License Plate: {f.Kennzeichen}");
    Console.WriteLine($"Color: {f.Farbe}");
    Console.WriteLine($"Year of Manufacture: {f.Baujahr}");
    Console.WriteLine($"Manufacturer: {f.Hersteller}");
    Console.WriteLine();
};

/// Represents a vehicle.

class Fahrzeug
{
    /// Gets or sets the license plate of the vehicle.
    public string Kennzeichen { get; set; }

    /// Gets or sets the color of the vehicle.
    public string Farbe { get; set; }

    /// Gets or sets the year of manufacture of the vehicle.
    public int Baujahr { get; set; }

    /// Gets or sets the manufacturer of the vehicle.
    public string Hersteller { get; set; }

    /// Initializes a new instance of the <see cref="Fahrzeug"/> class.
    /// <param name="kennzeichen">The license plate of the vehicle.</param>
    /// <param name="farbe">The color of the vehicle.</param>
    /// <param name="baujahr">The year of manufacture of the vehicle.</param>
    /// <param name="hersteller">The manufacturer of the vehicle.</param>
    public Fahrzeug(string kennzeichen, string farbe, int baujahr, string hersteller)
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

    public Auto(string kennzeichen, string farbe, int baujahr, string hersteller, int anzahlTueren, int anzahlRaeder) : base(kennzeichen, farbe, baujahr, hersteller)
    {
        AnzahlTueren = anzahlTueren;
        AnzahlRaeder = anzahlRaeder;
    }
}

class LKW : Fahrzeug
{
    public int AnzahlRaeder { get; set; }
    public int AnzahlAchsen { get; set; }

    public LKW(string kennzeichen, string farbe, int baujahr, string hersteller, int anzahlRaeder, int anzahlAchsen) : base(kennzeichen, farbe, baujahr, hersteller)
    {
        AnzahlRaeder = anzahlRaeder;
        AnzahlAchsen = anzahlAchsen;
    }
}

