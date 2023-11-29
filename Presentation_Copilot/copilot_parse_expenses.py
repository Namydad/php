import unittest
import datetime

def parse_expenses(expenses_string):
    """Parse the expenses string and return a list of expenses"""
    expenses = []
    for expense in expenses_string.split('\n'):
        if expense != '':
            expense = expense.split()
            expense[0] = datetime.datetime.strptime(expense[0], '%Y-%m-%d').date()
            expense[1] = float(expense[1])
            expenses.append(expense)
    return expenses

expenses_dats = '''2023-01-02 -34.01 USD
                2023-01-03 140.00 PLN
                2023-01-03 100.00 USD
                2023-01-10 15.00 EUR'''

class TestExpenses(unittest.TestCase):
    def test_parse_expenses(self):
        expenses_string = '''2023-01-02 -34.01 USD
                             2023-01-03 140.00 PLN
                             2023-01-03 100.00 USD
                             2023-01-10 15.00 EUR'''
        result = parse_expenses(expenses_string)
        expected = [
            [datetime.date(2023, 1, 2), -34.01, 'USD'],
            [datetime.date(2023, 1, 3), 140.00, 'PLN'],
            [datetime.date(2023, 1, 3), 100.00, 'USD'],
            [datetime.date(2023, 1, 10), 15.00, 'EUR'],
        ]
        self.assertEqual(result, expected)

if __name__ == '__main__':
    unittest.main()