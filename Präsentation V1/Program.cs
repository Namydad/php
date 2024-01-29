// Tobias Lammer zum Thema Copilot und KI
// Live-Demo Präsentation

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

abstract class Fahrzeug{
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