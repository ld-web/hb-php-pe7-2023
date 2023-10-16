<?php

require_once __DIR__ . "/../classes/Car.php";

$cars = [
  new Car(1, "Audi", "moteur à plat", 1990, 76589, "https://images.unsplash.com/photo-1520050206274-a1ae44613e6d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjN8fHZvaXR1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"),
  new Car(2, "BMW", "moteur automobile", 2009, 899, "https://img.freepik.com/psd-gratuit/voiture-blanche-isolee_176382-1488.jpg?size=626&ext=jpg"),
  new Car(3, "Citroën", "moteur à explosion", 1990, 2589, "https://img.freepik.com/photos-gratuite/gros-plan-voiture-blanche-dans-fond-sombre_181624-20300.jpg?size=626&ext=jpg"),
  new Car(4, "Mercedes", "moteur à combustion-détente", 1998, 90589, "https://img.freepik.com/photos-gratuite/muscle-car-bleue-noire-plaque-immatriculation-qui-dit-trans-devant_1340-23399.jpg?size=626&ext=jpg"),
  new Car(5, "Citroën", "moteur à compression", 1999, 65099, "https://img.freepik.com/photos-gratuite/voiture-vintage-plaque-immatriculation-jaune-qui-dit-ba-816i_1340-23188.jpg?size=626&ext=jpg"),
  new Car(6, "Renault", "moteur à explosion", 2020, 9864, "https://img.freepik.com/photos-gratuite/voiture-jaune-numero-70-cote_1340-23401.jpg?size=626&ext=jpg"),
  new Car(7, "Citroën", "moteur électrique", 2008, 24539, "https://img.freepik.com/photos-gratuite/mise-au-point-selective-voiture-porsche-rouge-garee-pres-batiments-dans-arriere-plan-flou_181624-1778.jpg?size=626&ext=jpg"),
  new Car(8, "Alpine", "moteur à plat", 2006, 49574, "https://img.freepik.com/photos-gratuite/homme-gare-rue_23-2148321904.jpg?size=626&ext=jpg"),
  new Car(9, "Opel", "moteur automobile", 1999, 34322, "https://img.freepik.com/photos-gratuite/jeep-luxe-noire-route_114579-4058.jpg?size=626&ext=jpg"),
  new Car(10, "MG Motor", "moteur à combustion-détente", 2017, 7779, "https://img.freepik.com/photos-gratuite/voiture-jaune-station-service_23-2150697544.jpg?size=626&ext=jpg"),
  new Car(11, "Citroën", "moteur automobile", 2018, 25439, "https://img.freepik.com/photos-gratuite/voiture-berline-noire-conduisant-route-du-pont_114579-4023.jpg?size=626&ext=jpg"),
  new Car(12, "Peugeot", "moteur électrique", 2000, 65389, "https://img.freepik.com/vecteurs-libre/voiture-decapotable-blanche-isolee-vecteur-blanc_53876-66815.jpg?size=626&ext=jpg"),
  new Car(13, "Opel", "moteur électrique", 2018, 687609, "https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dm9pdHVyZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"),
  new Car(14, "Ford", "moteur automobile", 2020, 7609, "https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dm9pdHVyZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"),
  new Car(15, "Toyota", "moteur automobile", 2021, 609, "https://images.unsplash.com/photo-1511919884226-fd3cad34687c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHZvaXR1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"),
  new Car(16, "Ford", "moteur à compression", 2018, 6539, "https://images.unsplash.com/photo-1547038577-da80abbc4f19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTh8fHZvaXR1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"),
  new Car(17, "Hyundai", "moteur électrique", 2023, 110, "https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHZvaXR1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"),
  new Car(18, "Ford", "moteur automobile", 2000, 27609, "https://images.unsplash.com/photo-1560253787-9c3babc1fab2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTF8fHZvaXR1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"),
  new Car(19, "Audi", "moteur automobile", 2016, 1609, "https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fHZvaXR1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"),
  new Car(20, "Dacia", "moteur électrique", 2019, 3609, "https://images.unsplash.com/photo-1537984822441-cff330075342?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTF8fHZvaXR1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"),

];
