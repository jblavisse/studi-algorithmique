def jeVerseDansMaBouteille(nbCl, typeBouteille):
    print("Je verse dans ma bouteille "+ typeBouteille + ": "+ str(nbCl)+ " cl")
    print("Glouglou.....")
    print("Oh non un peu de contenu s'écoule!")
    return nbCl-3

contenuBouteilleCoca = 0

contenuBouteilleCoca = jeVerseDansMaBouteille(5, "Coca Cola")
print(contenuBouteilleCoca)

contenuBouteilleCoca = contenuBouteilleCoca + jeVerseDansMaBouteille(15, "Coca Cola")
print(contenuBouteilleCoca)

contenuBouteilleCoca += jeVerseDansMaBouteille(25, "Coca Cola")
print(contenuBouteilleCoca)