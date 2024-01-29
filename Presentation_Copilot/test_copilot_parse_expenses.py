import datetime

def test_parse_expenses():
    # Test case 1: Empty expenses string
    expenses_string = ""
    expected_output = []
    assert parse_expenses(expenses_string) == expected_output

    # Test case 2: Expenses with valid date and amount
    expenses_string = "2022-01-01 10.5\n2022-01-02 20.75\n2022-01-03 15.0"
    expected_output = [
        [datetime.date(2022, 1, 1), 10.5],
        [datetime.date(2022, 1, 2), 20.75],
        [datetime.date(2022, 1, 3), 15.0]
    ]
    assert parse_expenses(expenses_string) == expected_output

    # Test case 3: Expenses with invalid date format
    expenses_string = "2022/01/01 10.5\n2022/01/02 20.75\n2022/01/03 15.0"
    expected_output = []
    assert parse_expenses(expenses_string) == expected_output

    # Test case 4: Expenses with invalid amount format
    expenses_string = "2022-01-01 10.5a\n2022-01-02 20.75\n2022-01-03 15.0"
    expected_output = []
    assert parse_expenses(expenses_string) == expected_output

    # Test case 5: Expenses with empty lines
    expenses_string = "2022-01-01 10.5\n\n2022-01-02 20.75\n\n2022-01-03 15.0"
    expected_output = [
        [datetime.date(2022, 1, 1), 10.5],
        [datetime.date(2022, 1, 2), 20.75],
        [datetime.date(2022, 1, 3), 15.0]
    ]
    assert parse_expenses(expenses_string) == expected_output

    print("All test cases passed!")

test_parse_expenses()