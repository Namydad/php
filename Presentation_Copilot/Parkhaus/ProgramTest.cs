namespace Parkhaus.Tests
{
    class Program
    {
        static void Main(string[] args)
        {
            TestAddCarsToList();
            TestAddTrucksToList();
            TestAddAllVehiclesToList();
            TestPrintAllVehicles();
        }

        static void TestAddCarsToList()
        {
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

            // Assert
            Console.WriteLine("TestAddCarsToList:");
            foreach (var car in pkwList)
            {
                Console.WriteLine($"License Plate: {car.Kennzeichen}");
                Console.WriteLine($"Color: {car.Farbe}");
                Console.WriteLine($"Year of Manufacture: {car.Baujahr}");
                Console.WriteLine($"Manufacturer: {car.Hersteller}");
                Console.WriteLine();
            }
        }

        static void TestAddTrucksToList()
        {
            List<LKW> lkwList = new List<LKW>()
            {
                new LKW("HH CD 123", "Rot", 2010, "VW", 4, 2),
                new LKW("HH CD 124", "Blau", 2011, "BMW", 4, 2),
                new LKW("HH CD 125", "Grün", 2012, "Audi", 4, 2),
                new LKW("HH CD 126", "Gelb", 2013, "Porsche", 4, 2),
                new LKW("HH CD 127", "Schwarz", 2014, "Mercedes", 4, 2),
            };

            // Assert
            Console.WriteLine("TestAddTrucksToList:");
            foreach (var truck in lkwList)
            {
                Console.WriteLine($"License Plate: {truck.Kennzeichen}");
                Console.WriteLine($"Color: {truck.Farbe}");
                Console.WriteLine($"Year of Manufacture: {truck.Baujahr}");
                Console.WriteLine($"Manufacturer: {truck.Hersteller}");
                Console.WriteLine();
            }
        }

        static void TestAddAllVehiclesToList()
        {
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

            List<LKW> lkwList = new List<LKW>()
            {
                new LKW("HH CD 123", "Rot", 2010, "VW", 4, 2),
                new LKW("HH CD 124", "Blau", 2011, "BMW", 4, 2),
                new LKW("HH CD 125", "Grün", 2012, "Audi", 4, 2),
                new LKW("HH CD 126", "Gelb", 2013, "Porsche", 4, 2),
                new LKW("HH CD 127", "Schwarz", 2014, "Mercedes", 4, 2),
            };

            List<Fahrzeug> fahrzeugList = new List<Fahrzeug>();
            fahrzeugList.AddRange(pkwList);
            fahrzeugList.AddRange(lkwList);

            // Assert
            Console.WriteLine("TestAddAllVehiclesToList:");
            foreach (var vehicle in fahrzeugList)
            {
                Console.WriteLine($"License Plate: {vehicle.Kennzeichen}");
                Console.WriteLine($"Color: {vehicle.Farbe}");
                Console.WriteLine($"Year of Manufacture: {vehicle.Baujahr}");
                Console.WriteLine($"Manufacturer: {vehicle.Hersteller}");
                Console.WriteLine();
            }
        }

        static void TestPrintAllVehicles()
        {
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

            List<LKW> lkwList = new List<LKW>()
            {
                new LKW("HH CD 123", "Rot", 2010, "VW", 4, 2),
                new LKW("HH CD 124", "Blau", 2011, "BMW", 4, 2),
                new LKW("HH CD 125", "Grün", 2012, "Audi", 4, 2),
                new LKW("HH CD 126", "Gelb", 2013, "Porsche", 4, 2),
                new LKW("HH CD 127", "Schwarz", 2014, "Mercedes", 4, 2),
            };

            List<Fahrzeug> fahrzeugList = new List<Fahrzeug>();
            fahrzeugList.AddRange(pkwList);
            fahrzeugList.AddRange(lkwList);

            // Assert
            Console.WriteLine("TestPrintAllVehicles:");
            foreach (var vehicle in fahrzeugList)
            {
                Console.WriteLine($"License Plate: {vehicle.Kennzeichen}");
                Console.WriteLine($"Color: {vehicle.Farbe}");
                Console.WriteLine($"Year of Manufacture: {vehicle.Baujahr}");
                Console.WriteLine($"Manufacturer: {vehicle.Hersteller}");
                Console.WriteLine();
            }
        }
    }
}