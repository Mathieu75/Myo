
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


INSERT INTO `adherent` (`id_adherent`, `nom`, `prenom`, `mail`, `adresse`, `ville`, `mdp`, `droit`) VALUES
(1, 'Ikrelef', 'Mathieu', 'mathieu.ikrelef@monmail.fr', '25 rue Lucien Sampaix', 'Paris', 'test', '1'),
(2, 'Motyka', 'Rebecca-Megane', 'rm.motyka@monmail.fr', '11 rue Lapeyrere', 'Paris', 'test', '1');


INSERT INTO `type_ressource` (`id_type_ressource`, `designation`) VALUES
(1, 'Service'),
(2, 'Materiel'),
(3, 'Numerique');

INSERT INTO `ressource` (`id_ressource`, `designation`, `id_type_ressource`) VALUES
(1, 'Ordinateur', 2),
(2, 'Plomberie', 2),
(3, 'Television', 2),
(4, 'Electricien', 1),
(5, 'DVD', 2),
(6, 'Informaticien', 1);


INSERT INTO `article` (`id_article`, `nom`, `description`, `date_depos`, `id_adherent`, `id_ressource`) VALUES
(1, 'ACER', 'Tablet Pc', '2013-04-30', 2, 1),
(2, 'Fullmetal Alechemist', 'Super anime japonais', '2013-05-27', 2, 5),
(3, 'Asus G75', 'Ordinateur portable', '2013-05-27', 2, 1),
(4, 'informaticien', 'peu depanner', '2013-06-01', 2, 6);


INSERT INTO `reservation` (`id_reservation`, `date_reservation`, `date_debut`, `date_rendu`, `status`, `id_adherent`, `id_article`) VALUES
(5, '2013-06-01', '2013-06-05', '2013-06-12', 'CREER', 1, 3);
