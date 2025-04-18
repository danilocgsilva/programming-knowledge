number = input("Give me a number: ")

def calculates(numeric_input):
    amount_calculated = 0
    for i in range(1, numeric_input + 1):
        amount_calculated = amount_calculated + i
    return amount_calculated

try:
    numeric_input = int(number)
    if 1 > numeric_input:
        print("The number given must be larger than 1.")
        exit()
    amount_calculated = calculates(numeric_input)
    print(f"The sum of all numbers from 1 up to {numeric_input} is {amount_calculated}.")
except Exception as e:
    print("You must be gived something that is not a suitable to calculates.")
    