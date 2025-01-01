billValueString = input("Plase, give a bill value: ")
billValue = int(billValueString)

n1 = 0
n10 = 0
n50 = 0
nn = 50
accumulator = 0

while accumulator + nn <= billValue:
    accumulator = accumulator + nn
        
    
print("To pay a bill with amount of " + str(billValue) + ", you may have:")
print(str(n50) + " bills of 50.")
print(str(n10) + " bills of 10.")
print(str(n1) + " bills of 1.")
