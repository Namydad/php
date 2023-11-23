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


/// <summary>
/// Represents an abstract base class for vehicles.
/// </summary>
abstract class Fahrzeug
{
    /// <summary>
    /// Gets or sets the license plate of the vehicle.
    /// </summary>
    public string Kennzeichen { get; set; }

    /// <summary>
    /// Gets or sets the color of the vehicle.
    /// </summary>
    public string Farbe { get; set; }

    /// <summary>
    /// Gets or sets the year of manufacture of the vehicle.
    /// </summary>
    public int Baujahr { get; set; }

    /// <summary>
    /// Gets or sets the manufacturer of the vehicle.
    /// </summary>
    public string Hersteller { get; set; }

    /// <summary>
    /// Initializes a new instance of the <see cref="Fahrzeug"/> class with the specified license plate, color, year of manufacture, and manufacturer.
    /// </summary>
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

/// <summary>
/// Represents a car that inherits from the <see cref="Fahrzeug"/> class.
/// </summary>
class Auto : Fahrzeug
{
    /// <summary>
    /// Gets or sets the number of doors of the car.
    /// </summary>
    public int AnzahlTueren { get; set; }

    /// <summary>
    /// Gets or sets the number of wheels of the car.
    /// </summary>
    public int AnzahlRaeder { get; set; }

    /// <summary>
    /// Initializes a new instance of the <see cref="Auto"/> class with the specified license plate, color, year of manufacture, manufacturer, number of doors, and number of wheels.
    /// </summary>
    /// <param name="kennzeichen">The license plate of the car.</param>
    /// <param name="farbe">The color of the car.</param>
    /// <param name="baujahr">The year of manufacture of the car.</param>
    /// <param name="hersteller">The manufacturer of the car.</param>
    /// <param name="anzahlTueren">The number of doors of the car.</param>
    /// <param name="anzahlRaeder">The number of wheels of the car.</param>
    public Auto(string kennzeichen, string farbe, int baujahr, string hersteller, int anzahlTueren, int anzahlRaeder) : base(kennzeichen, farbe, baujahr, hersteller)
    {
        AnzahlTueren = anzahlTueren;
        AnzahlRaeder = anzahlRaeder;
    }
}

/// <summary>
/// Represents a truck that inherits from the <see cref="Fahrzeug"/> class.
/// </summary>
class LKW : Fahrzeug
{
    /// <summary>
    /// Gets or sets the number of wheels of the truck.
    /// </summary>
    public int AnzahlRaeder { get; set; }

    /// <summary>
    /// Gets or sets the number of axles of the truck.
    /// </summary>
    public int AnzahlAchsen { get; set; }

    /// <summary>
    /// Initializes a new instance of the <see cref="LKW"/> class with the specified license plate, color, year of manufacture, manufacturer, number of wheels, and number of axles.
    /// </summary>
    /// <param name="kennzeichen">The license plate of the truck.</param>
    /// <param name="farbe">The color of the truck.</param>
    /// <param name="baujahr">The year of manufacture of the truck.</param>
    /// <param name="hersteller">The manufacturer of the truck.</param>
    /// <param name="anzahlRaeder">The number of wheels of the truck.</param>
    /// <param name="anzahlAchsen">The number of axles of the truck.</param>
    public LKW(string kennzeichen, string farbe, int baujahr, string hersteller, int anzahlRaeder, int anzahlAchsen) : base(kennzeichen, farbe, baujahr, hersteller)
    {
        AnzahlRaeder = anzahlRaeder;
        AnzahlAchsen = anzahlAchsen;
    }
}
