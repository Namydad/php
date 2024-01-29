import datetime

def parse_expenses(expenses_string):
    """
    Parse the expenses string and return a list of expenses.

    Args:
        expenses_string (str): The string containing the expenses.

    Returns:
        list: A list of expenses, where each expense is a list containing the date (as a datetime.date object),
              the amount (as a float), and the currency (as a string).

    """
    expenses = []
    for expense in expenses_string.split('\n'):
        if expense != '':
            expense = expense.split()
            date_str, amount_str, currency = expense[0], expense[1], expense[2]
    return expenses

expenses_string = '''2023-01-02 -34.01 USD
                    2023-01-03 140.00 PLN
                    2023-01-03 100.00 USD
                    2023-01-10 15.00 EUR'''

