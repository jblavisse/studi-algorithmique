
age = input("Entre ton âge")
print("Ton âge: " + age)

if age>=16 and age<18:
    withAdult = input("accompagnée: O ou N?")
    print("...")

if age>=18:
    print("Tu peux rentrer")
elif age>=16 and (withAdult == "O" or withAdult == "o"):
    print("Accompagné ok")
else:
    print("Dehors")
