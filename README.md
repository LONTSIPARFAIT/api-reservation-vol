# API Reservation Vol

Ce projet est une API simple pour gérer les informations sur les aéroports et les vols.

## Structure des fichiers

- **aeroports.php** : Fournit une liste des aéroports disponibles.
- **vols.php** : Permet de récupérer les informations des vols en fonction de l'aéroport de départ.
- **connexion.php** : Gère la connexion à la base de données.

## Prérequis

- Serveur web (ex. : XAMPP, WAMP)
- PHP 7.4 ou supérieur
- Base de données MySQL

## Installation

1. Clonez ce dépôt dans le répertoire racine de votre serveur web.
2. Configurez votre base de données MySQL avec les informations suivantes :
   - Nom de la base : `ReservationVol`
   - Utilisateur : `root`
   - Mot de passe : *(vide par défaut)*

3. Importez les tables nécessaires dans votre base de données.

## Utilisation

### Récupérer les aéroports

**Endpoint** : `aeroports.php`  
**Méthode** : GET  
**Exemple de réponse** :
```json
[
    {"NomA": "Aéroport de Paris"},
    {"NomA": "Aéroport de Lyon"}
]
```

### Récupérer les vols

**Endpoint** : `vols.php`  
**Méthode** : GET  
**Paramètres** : `aeroport` (nom de l'aéroport)  
**Exemple de réponse** :
```json
[
    {"NumVol": "AF123", "AeroportDepart": "Aéroport de Paris", "AeroportArrivee": "Aéroport de Lyon", "DateDepart": "2023-10-01 10:00:00", "DateArrivee": "2023-10-01 12:00:00", "Prix": 100.0},
    {"NumVol": "AF456", "AeroportDepart": "Aéroport de Lyon", "AeroportArrivee": "Aéroport de Paris", "DateDepart": "2023-10-02 14:00:00", "DateArrivee": "2023-10-02 16:00:00", "Prix": 150.0}
]
```

### Récupérer les réservations

**Endpoint** : `reservations.php`  
**Méthode** : GET
**Paramètres** : `numVol` (numéro du vol)  
**Exemple de réponse** :
```json
[
    {"NumVol": "AF123", "NomPassager": "John Doe", "Prix": 100.0},
    {"NumVol": "AF123", "NomPassager": "Jane Doe", "Prix": 100.0}
]
```

### Effectuer une réservation

**Endpoint** : `reservations.php`  
**Méthode** : POST
**Paramètres** : `numVol` (numéro du vol), `nomPassager` (nom du passager)  
**Exemple de réponse** :
```json
{
    "NumVol": "AF123",
    "NomPassager": "John Doe",
    "Prix": 100.0
}
```

### Annuler une réservation

**Endpoint** : `reservations.php`  
**Méthode** : DELETE
**Paramètres** : `numVol` (numéro du vol), `nomPassager` (nom du passager)
