"""
from __future__ import print_function
import pyzbar.pyzbar as pyzbar
import numpy as np
import cv2
"""

def decode(im):
    # Localiser le QR code ou Barcode
    decodedObjects = pyzbar.decode(im)

    # Afficher les résultats
    for obj in decodedObjects:
        print('Type : ', obj.type)
        print('Data : ', obj.data, '\n')

    return decodedObjects


# On affiche la localisation du QR/Barcode
def display(im, decodedObjects):
    # Décodage
    for decodedObject in decodedObjects:
        points = decodedObject.polygon

        # Si les points ne forment pas un carré, on cherche la bonne position
        if len(points) > 4:
            hull = cv2.convexHull(np.array([point for point in points], dtype=np.float32))
            hull = list(map(tuple, np.squeeze(hull)))
        else:
            hull = points;

        # Nombre de points dans le carré
        n = len(hull)

        # On dessine le carré
        for j in range(0, n):
            cv2.line(im, hull[j], hull[(j + 1) % n], (255, 0, 0), 3)

    # Affichage des résultats
    cv2.imshow("Resultats", im);
    cv2.waitKey(0);


# Mode Bourin en mode affiche de l'image brut
if __name__ == '__main__':
    # Lecture de l'image
    im = cv2.imread('qrcode.PNG')

    decodedObjects = decode(im)
    display(im, decodedObjects)
