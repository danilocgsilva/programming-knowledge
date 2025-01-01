billValueString = input("Plase, give a bill value: ")
billValue = int(billValueString)

n1 = 0
n10 = 0
n50 = 0
nn = 50
accumulator = 0

while accumulator + 50 <= billValue:
    accumulator = accumulator + 50
    n50 = n50 + 1
nn = 10
while accumulator + 10 <= billValue:
    accumulator = accumulator + 10
    n10 = n10 + 1
nn = 1
while accumulator + 1 <= billValue:
    accumulator = accumulator + 1
    n1 = n1 + 1
    
print("To pay a bill with amount of " + str(billValue) + ", you may have:")
print(str(n50) + " bills of 50.")
print(str(n10) + " bills of 10.")
print(str(n1) + " bills of 1.")
