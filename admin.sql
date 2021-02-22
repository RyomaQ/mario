-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 juin 2020 à 11:43
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_articles`
--

CREATE TABLE `t_articles` (
  `art_id` int(11) NOT NULL,
  `art_date` datetime NOT NULL,
  `art_titre` varchar(200) NOT NULL,
  `art_contenu` text NOT NULL,
  `date_time_edition` datetime NOT NULL,
  `art_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_articles`
--

INSERT INTO `t_articles` (`art_id`, `art_date`, `art_titre`, `art_contenu`, `date_time_edition`, `art_image`) VALUES
(1, '2020-06-01 03:28:08', 'ENFIN UNE DATE POUR SUPER MARIO RUN ANDROID !', 'Super Mario Run sera enfin disponible pour les possesseurs de téléphones sous Android, le 23 mars prochain !\r\n\r\nSuper Mario Run, déjà sorti sur iOS depuis décembre 2016, est le premier jeu Mario sur smartphone. Mario avance tout seul, et vous devez toucher l\'écran au bon moment pour le faire sauter ! Attention, même si les premiers niveaux sont disponibles gratuitement, il faudra payer 9,99€ pour accéder à l\'ensemble du jeu. Néanmoins, les avis sont globalement positifs et le prix semble être raisonnable. N\'hésitez donc pas à télécharger la version d\'essai pour vous faire une idée !\r\n\r\nVous pouvez vous préinscrire sur le Play Store, et ainsi recevoir une notification lorsque le jeu sera disponible. Et pour plus d\'informations sur le jeu, vous pouvez faire un tour sur le site officiel !', '0000-00-00 00:00:00', ''),
(2, '2020-06-01 03:29:20', 'TOUTES LES INFOS SUR SUPER MARIO ODYSSEY, LE PROCHAIN MARIO 3D !', 'Hier, Nintendo a organisé une conférence pour donner plus de détails sur sa nouvelle console, la Nintendo Switch, prévue pour le 3 mars 2017. Ce fut également l\'occasion de dévoiler les titres prévus sur la machine. Et parmi tous les jeux présentés, un nous intéresse tout particulièrement... le dernier des Mario 3D, Super Mario Odyssey ! Le jeu sortira à la fin de l\'année 2017.', '0000-00-00 00:00:00', ''),
(3, '2020-06-01 03:30:21', 'LE MONDE DE MARIO : DÉJÀ HUIT ANS !', 'Bonjour à tous !\r\n\r\nHier, Le Monde de Mario a fêté ses huit années d\'existences sur le web ! Le site a en effet été fondé le 6 janvier 2009, quelques temps après la première version du forum, lancée sur Forumactif le 25 décembre 2008.\r\n\r\nQuoi de prévu pour la neuvième année de LMDM ? Comme je l\'ai annoncé il y a quelques temps sur le forum, une nouvelle version du site est en préparation. J\'espère pouvoir la sortir avant la fin de l\'année 2017. Au programme : un nouveau design aussi bien adapté aux PC qu\'aux mobiles, ainsi qu\'un code plus optimisé me permettant de rajouter plus rapidement et simplement de nouvelles fonctionnalités. Après ces dernières années assez calmes, j\'espère donc pouvoir relancer un peu l\'activité du site d\'ici quelques mois !', '0000-00-00 00:00:00', ''),
(4, '2020-06-01 03:31:02', 'UN PRODUCTEUR DE PAPER MARIO S\'EXPRIME SUR LA DIRECTION PRISE PAR LA SÉRIE', 'Paper Mario est une série connue pour avoir apporté de nouveaux personnages variés et originaux, parfois basés sur ceux existant dans la série principale, d\'autres totalement inédits. Les jeux prenaient pas mal de libertés avec l\'univers Super Mario ce qui leur a permis d\'avoir une atmosphère très particulière qui a beaucoup contribué à l\'affection de certains joueurs pour cette série.\r\n\r\n\r\nPourtant, depuis les deux derniers épisodes (Sticker Star et Color Splash), les jeux se basent strictement sur l\'univers Super Mario, en faisant le moins de retouches possibles aux personnages et proposant des lieux très proches de ce qu\'on peut trouver dans un Super Mario classique. Et cela n\'a pas plu à tout le monde...\r\n\r\n\r\nPourquoi un tel changement ? C\'est Shigeru Miyamoto, le créateur du personnage Mario ainsi que le directeur de la plupart des jeux jusque Super Mario 64, qui en a fait la demande. Il souhaitait que les développeurs n\'utilisent plus que des personnages classiques afin de ne pas trop s’éloigner de l\'esprit des épisodes de la série principale.\r\n\r\n\r\nComme beaucoup de joueurs continuent de manifester leur mécontentement, Kensuke Tanabe, à l\'occasion d\'une interview avec Game Informer, s\'est exprimé sur le sujet et en a profité pour évoquer le futur de la série :\r\n\r\n\r\n« Mario n\'est pas une licence que j\'ai créée. Du point de vue de quelqu\'un ayant emprunté cet univers, je pense qu\'il est naturel d\'avoir du respect pour la personne qui l\'a créé, et laisser ce sentiment de respect nous guider. Quand Monsieur Miyamoto, le père de Mario, nous demande : \"Pouvez-vous créer un jeu avec uniquement des personnages de la famille Mario\", je pense qu\'il est naturel pour nous de faire de notre mieux. En d\'autres termes, nous ne pensons pas actuellement à faire revenir les anciens personnages.\r\n\r\n\r\nÀ ce propos, je pense vraiment que Color Splash a montré que nous pouvons toujours faire un jeu amusant, même si nos anciens personnages n\'y apparaissent pas. Et avec cette idée, nous allons continuer de faire de notre mieux. »', '0000-00-00 00:00:00', ''),
(5, '2020-06-01 03:32:05', 'SUPER NINTENDO WORLD, LA NOUVELLE ZONE DE UNIVERSAL STUDIO JAPAN !', 'Nintendo s\'est enfin décidé à donner plus de détails sur son partenariat avec les parcs Universal ! Une première zone, nommée \"Super Nintendo World\", ouvrira au Japon dans le parc Universal Studio Japan pour les JO de Tokyo en 2020. Ensuite, d\'autres zones ouvriront aux parcs situés à Orlando et Hollywood. Et fort malheureusement, aucun parc Universal ne se trouve en Europe...\r\n\r\n\r\nEt donc, qu\'y a t-il au programme ? Pas mal de choses : des attractions proposant une grande immersion, des zones interactives à visiter, des magasins, des restaurants... tout ça sur les personnages les plus célèbres de Nintendo !\r\n\r\nDans un premier temps, c\'est sur Mario que Universal Studio Japan va se concentrer. C\'est d\'ailleurs avec l\'aide du créateur de Mario, Shigeru Miyamoto, que le parc a imaginé et conçu cette nouvelle zone.\r\n\r\n\r\nUne première image du concept a été publiée afin de se faire une idée de ce à quoi pourrait ressembler la zone. Selon cette image, nous devrions pouvoir nous promener dans un Royaume Champignon fidèlement reproduit, avec un aspect se rapprochant fortement du jeu Super Mario 3D World. Merveilleux !\r\n\r\n', '0000-00-00 00:00:00', ''),
(6, '2020-06-01 03:33:15', 'NINTENDO TRAVAILLE SUR UN MARIO D\'UN NOUVEAU GENRE', 'Nintendo se remet toujours en question, et c\'est ce qui permettrait, selon Shigeru Miyamoto, l\'arrivée prochaine d\'un tout nouveau genre de jeu Super Mario.\r\n\r\nLors d\'une interview avec IGN, le créateur de Mario explique :\r\n\r\n« On se remet toujours en question pour créer quelque chose de nouveau, donc normalement, on devrait voir arriver un nouveau genre de Mario d\'ici un ou deux ans »\r\n\r\nUn peu de patience sera donc nécessaire avant de voir arriver ce nouveau Mario, qui sortira vraisemblablement sur la mystérieuse NX. Cette attente serait due à la difficulté de renouveler les jeux Mario :\r\n\r\n« C\'est difficile avec les Mario car les mécaniques les plus importantes sont basées sur l\'accessibilité et la facilité d\'approche du gameplay »\r\n\r\nMiyamoto indique néanmoins que l\'arrivée de jeunes développeurs au sein de Nintendo a permis « d\'aborder ces mécaniques avec un regard frais ». C\'est d\'ailleurs de jeunes développeurs qui ont beaucoup aidé l\'équipe en charge des Zelda à imaginer le titre Breath of the Wild, titre qui a beaucoup remis en question les mécaniques de la série.\r\n\r\nOn devrait en savoir plus lors du prochain E3, en 2017 :\r\n\r\n« Peut-être qu\'au prochain E3, on pourra partager quelque chose. »', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Structure de la table `t_images`
--

CREATE TABLE `t_images` (
  `id` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_images`
--

INSERT INTO `t_images` (`id`, `path`, `description`) VALUES
(1, '4.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'),
(2, 'bating_mario.jpg', 'Quod si rectum statuerimus vel concedere amicis, quidquid velint, vel impetrare ab iis, quidquid velimus, perfecta quidem sapientia si simus, nihil habeat res vitii; sed loquimur de iis amicis qui ante oculos sunt, quos vidimus aut de quibus memoriam accepimus, quos novit vita communis. Ex hoc numero nobis exempla sumenda sunt, et eorum quidem maxime qui ad sapientiam proxime accedunt.'),
(27, 'cartoon-mario.jpg', 'Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.'),
(28, 'jumping-mario.jpg', 'Haec igitur prima lex amicitiae sanciatur, ut ab amicis honesta petamus, amicorum causa honesta faciamus, ne exspectemus quidem, dum rogemur; studium semper adsit, cunctatio absit; consilium vero dare audeamus libere. Plurimum in amicitia amicorum bene suadentium valeat auctoritas, eaque et adhibeatur ad monendum non modo aperte sed etiam acriter, si res postulabit, et adhibitae pareatur.'),
(29, 'mario-karting.jpg', 'Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.');

-- --------------------------------------------------------

--
-- Structure de la table `t_mail`
--

CREATE TABLE `t_mail` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_mail`
--

INSERT INTO `t_mail` (`id`, `nom`, `prenom`, `email`, `message`) VALUES
(3, 'Jordan', 'Michael', 'mj@gmail.com', 'Salut man ! J\'ai vu ton site il déchire grave, appel moi quand tu peux.'),
(4, 'depp', 'Johnny', 'john.depp@gmail.com', 'Hey mate, could post more picture of Princess Peach ? '),
(5, 'depp', 'Johnny', 'john.depp@gmail.com', 'Hey mate, could post more picture of Princess Peach ? ');

-- --------------------------------------------------------

--
-- Structure de la table `t_users`
--

CREATE TABLE `t_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_pseudo` varchar(20) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  `user_pass` varchar(30) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_users`
--

INSERT INTO `t_users` (`user_id`, `user_pseudo`, `user_mail`, `user_pass`, `statut`) VALUES
(1, 'rkeno', 'ryoma1@hotmail.fr', '8643', 1),
(2, 'ryoma', NULL, 'mario', 0),
(3, 'mario', NULL, 'mario-kart', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_articles`
--
ALTER TABLE `t_articles`
  ADD PRIMARY KEY (`art_id`);

--
-- Index pour la table `t_images`
--
ALTER TABLE `t_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_mail`
--
ALTER TABLE `t_mail`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_articles`
--
ALTER TABLE `t_articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_images`
--
ALTER TABLE `t_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `t_mail`
--
ALTER TABLE `t_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
