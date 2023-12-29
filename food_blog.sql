-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 28, 2023 at 10:12 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `recipe_name` varchar(255) NOT NULL,
  `recipe_instructions` text NOT NULL,
  `recipe_categories` varchar(255) NOT NULL,
  `recipe_ingredients` text NOT NULL,
  `recipe_img` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `recipe_name`, `recipe_instructions`, `recipe_categories`, `recipe_ingredients`, `recipe_img`, `user_id`) VALUES
(2, 'Salade César', 'Étape 1&#38;#13;&#38;#10;&#38;#13;&#38;#10;Faites dorer le pain, coupé en cubes, 3 min dans un peu d&#38;#39;huile.&#38;#13;&#38;#10;Étape 2&#38;#13;&#38;#10;&#38;#13;&#38;#10;Déchirez les feuilles de romaine dans un saladier, et ajoutez les croûtons préalablement épongés dans du papier absorbant.&#38;#13;&#38;#10;Étape 3&#38;#13;&#38;#10;&#38;#13;&#38;#10;Préparez la sauce : Faites cuire l&#38;#39;oeuf 1 min 30 dans l&#38;#39;eau bouillante, et rafraîchissez-le.&#38;#13;&#38;#10;Étape 4&#38;#13;&#38;#10;&#38;#13;&#38;#10;Cassez-le dans le bol d&#38;#39;un mixeur et mixez, avec tous les autres ingrédients; rectifiez l&#38;#39;assaissonnement et incorporez à la salade.&#38;#13;&#38;#10;Étape 5&#38;#13;&#38;#10;&#38;#13;&#38;#10;Décorez de copeaux de parmesan, et servez.&#38;#13;&#38;#10;', 'Entrée', '2 cuillères à soupe d&#38;#39; huile&#38;#13;&#38;#10;2 coeurs de laitue effeuillé&#38;#13;&#38;#10;25 g de Parmesan (copeaux)&#38;#13;&#38;#10;4 tranches de pain écroûtées&#38;#13;&#38;#10;&#38;#13;&#38;#10;Pour la sauce :&#38;#13;&#38;#10;sel&#38;#13;&#38;#10;poivre&#38;#13;&#38;#10;15 cl d&#38;#39; huile&#38;#13;&#38;#10;1 trait de tabasco&#38;#13;&#38;#10;0.5 cuillère à café de moutarde&#38;#13;&#38;#10;1 oeuf&#38;#13;&#38;#10;25 g de parmesan râpé&#38;#13;&#38;#10;2 cuillères à café de câpres&#38;#13;&#38;#10;citron&#38;#13;&#38;#10;1 gousse d&#38;#39; ail pelée&#38;#13;&#38;#10;', 'https://media.istockphoto.com/id/1308224335/fr/photo/salade-c%C3%A9sar-au-parmesan-viande-de-poulet-grill%C3%A9e-et-cro%C3%BBtons.jpg?s=612x612&w=0&k=20&c=GYWFX3EPTUuw9LwwsYiu7E5Ch9hqXmIYwAvd3NY_gR0=', 13),
(5, 'Soupe à l\'oignon', '\r\nÉtape 1\r\n\r\nPelez et émincez les oignons.\r\nÉtape 2\r\n\r\nFaites-les revenir dans le mélange beurre et huile jusqu\'à ce qu\'ils soient tendres et légèrement dorés.\r\nÉtape 3\r\n\r\nSaupoudrez le mélange de farine, mouillez d\'eau chaude et de vin blanc et assaisonnez.\r\nÉtape 4\r\n\r\nCouvrez et laissez bouillonner doucement pendant 20 minutes.\r\nÉtape 5\r\n\r\nFaites grillez le pain.\r\nÉtape 6\r\n\r\nDisposez chaque tranche dans le fond de 4 petits bols individuels supportant le passage au four.\r\nÉtape 7\r\n\r\nSaupoudrez d\'un peu de fromage râpé. Versez la soupe par-dessus.\r\nÉtape 8\r\n\r\nSaupoudrez à nouveau de fromage et faites gratiner.\r\n', 'Entrée', '\r\npoivre\r\nsel\r\n100 g de comté râpé\r\n1 cuillère à soupe de farine\r\n1 cuillère à soupe d\' huile\r\n50 g de beurre\r\n4 oignons\r\n25 cl de vin blanc\r\n1 l d\' eau\r\n6 tranches de pain de mie ', 'https://media.istockphoto.com/id/601123554/fr/photo/gratin-de-soupe-%C3%A0-loignon-%C3%A0-la-fran%C3%A7aise.jpg?s=612x612&w=0&k=20&c=AaTmz2BlUBEGzn9nEugt8-e6M3Q7N5CrmB_Z91v3B_k=', 11),
(6, 'soupe de pois cassés', '\r\nÉtape 1\r\n\r\n1 - lavez les pois cassés et laisser tremper 1 heure dans de l\'eau chaude.\r\nÉtape 2\r\n\r\n2 - égoutter-les et mettez dans une casserole avec 1 litre d\'eau puis porter à ébullition, réglez alors sur feu doux, couvrez et laisser cuire 2 heures (salez à mi-cuisson).\r\nÉtape 3\r\n\r\n3 - pendant ce temps râpez les carottes, hachez les oignons et le persil, émincez la gousse d\'ail, et coupez le céleri en petits dés.\r\nÉtape 4\r\n\r\n4 - mettre de l\'huile à chauffer dans une sauteuse et faîtes revenir les légumes 10 mn, ajoutez-les à la soupe, poivrez et posez la feuille de laurier, laisser infuser 5 mn.\r\nÉtape 5\r\n\r\n5 - passez le tout au mixeur à potage, ajouter le lait ou la crème et servez aussitôt.\r\n', 'Entrée', '\r\n1 feuille de laurier\r\n1 bouquet de persil\r\n3 oignons\r\n2 carottes\r\n200 g de pois cassés\r\n1 gousse d\' ail\r\n1 branche de céleri\r\n25 cl de lait ou de crème liquide\r\n', 'https://media.istockphoto.com/id/1172291558/fr/photo/soupe-cr%C3%A9meuse-au-brocoli.jpg?s=612x612&w=0&k=20&c=6PvKX0GK7W3DY1ej0crhMP-RFGyfGxLZ7ovCDrShQlo=', 12),
(7, 'Lasagnes à la bolognaise', '\r\nÉtape 1\r\n\r\nFaire revenir gousses hachées d\'ail et les oignons émincés dans un peu d\'huile d\'olive.\r\nÉtape 2\r\n\r\nAjouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.\r\nÉtape 3\r\n\r\nAu bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu\'à évaporation.\r\nÉtape 4\r\n\r\nAjouter la purée de tomates, l\'eau et les herbes. Saler, poivrer, puis laisser mijoter à feu doux 45 minutes.\r\nÉtape 5\r\n\r\nPréparer la béchamel : faire fondre 100 g de beurre.\r\nÉtape 6\r\n\r\nHors du feu, ajouter la farine d\'un coup.\r\nÉtape 7\r\n\r\nRemettre sur le feu et remuer avec un fouet jusqu\'à l\'obtention d\'un mélange bien lisse.\r\nÉtape 8\r\n\r\nAjouter le lait peu à peu.\r\nÉtape 9\r\n\r\nRemuer sans cesse, jusqu\'à ce que le mélange s\'épaississe.\r\nÉtape 10\r\n\r\nEnsuite, parfumer avec la muscade, saler, poivrer. Laisser cuire environ 5 minutes, à feu très doux, en remuant. Réserver.\r\nÉtape 11\r\n\r\nPréchauffer le four à 200°C (thermostat 6-7). Huiler le plat à lasagnes. Poser une fine couche de béchamel puis des feuilles de lasagnes, de la bolognaise, de la béchamel et du parmesan. Répéter l\'opération 3 fois de suite.\r\nÉtape 12\r\n\r\nSur la dernière couche de lasagnes, ne mettre que de la béchamel et recouvrir de fromage râpé. Parsemer quelques noisettes de beurre.\r\nÉtape 13\r\n\r\nEnfourner pour environ 25 minutes de cuisson.\r\nÉtape 14\r\n\r\nDéguster\r\n', 'Plat', '\r\n125 g de beurre\r\n100 g de farine\r\npoivre\r\nsel\r\n70 g de fromage râpé\r\n3 pincées de muscade râpée\r\nthym\r\n2 feuilles de laurier\r\n20 cl de vin rouge\r\n800 g de purée de tomate\r\n600 g de boeuf haché\r\n1 carotte\r\n3 oignons jaunes\r\n1 paquet de lasagnes\r\n2 gousses d\' ail\r\n1 branche de céleri\r\n15 cl d\' eau\r\nbasilic\r\n125 g de Parmesan\r\n1 l de lait ', 'https://media.istockphoto.com/id/535851351/fr/photo/lasagne-sur-une-plaque-carr%C3%A9e-blanche.jpg?s=612x612&w=0&k=20&c=Cm5a6sWqPe6TR9E1mdtZsUZfZ2pE_hWlciQYhGwDjCg=', 13),
(8, 'Tartiflette : la vraie recette', '\r\npoivre\r\nsel\r\n2 cuillères à soupe d\' huile\r\n1 reblochon bien fait (lorsqu\'on appuie sur le côté du reblochon, le doigt doit s\'enfoncer un peu)\r\n200 g d\' oignon émincés\r\n1 kg de pomme de terre\r\n200 g de lardons fumés\r\n1 gousse d\' ail ', 'Plat', '\r\nÉtape 1\r\n\r\nEplucher les pommes de terre, les couper en dés, bien les rincer et les essuyer dans un torchon propre.\r\nÉtape 2\r\n\r\nFaire chauffer l\'huile dans une poêle, y faire fondre les oignons.\r\nÉtape 3\r\n\r\nLorsque les oignons sont fondus, ajouter les pommes de terre et les faire dorer de tous les côtés.\r\nÉtape 4\r\n\r\nLorsqu\'elles sont dorées, ajouter les lardons et finir de cuire. Éponger le surplus de gras avec une feuille de papier essuie-tout.\r\nÉtape 5\r\n\r\nD\'autre part, gratter la croûte du reblochon et le couper en deux (ou en quatre).\r\nÉtape 6\r\n\r\nPréchauffer le four à 200°C (thermostat 6-7) et préparer un plat à gratin en frottant le fond et les bords avec la gousse d\'ail épluchée.\r\nÉtape 7\r\n\r\nDans le plat à gratin, étaler une couche de pommes de terre aux lardons, disposer dessus la moitié du reblochon, puis de nouveau des pommes de terre. Terminer avec le reste du reblochon (croûte vers les pommes de terre).\r\nÉtape 8\r\n\r\nEnfourner pour environ 20 minutes de cuisson.\r\n', 'https://media.istockphoto.com/id/1045394302/fr/photo/fran%C3%A7ais-de-tartiflette-pomme-de-terre-lardons-et-reblochon.jpg?s=612x612&w=0&k=20&c=8E0676r9VGztiZkh1gVlPufhKtRgUO3gc_oJjtynrOY=', 13),
(9, 'Chili con carne facile', '\r\nÉtape 1\r\n\r\nPréchauffer le four à 180°C (thermostat 6).\r\nÉtape 2\r\n\r\nHacher l\'oignon et l\'ail.\r\nÉtape 3\r\n\r\nDans une cocotte en fonte, faire fondre le beurre, et ensuite dorer doucement l\'oignon et l’ail.\r\nÉtape 4\r\n\r\nIncorporer le boeuf haché et laisser cuire doucement 10 min.\r\nÉtape 5\r\n\r\nMélanger le chili, le cumin, le concentré de tomates, et incorporer le tout au boeuf. Ajouter les haricots, le bouillon, du sel et du poivre.\r\nÉtape 6\r\n\r\nCouvrir et cuire 25 min au four.\r\n', 'Plat', '\r\npersil pour décorer\r\npoivre\r\nsel\r\n30 cl de bouillon de boeuf\r\n1 grosse boîte de haricots rouges égouttés\r\n2 cuillères à café de cumin en poudre\r\n1 cuillère à café de chili en poudre\r\n500 g de boeuf haché\r\n2 oignons\r\n50 g de beurre\r\n2 gousses d\' ail écrasées\r\n65 g de concentré de tomates ', 'https://media.istockphoto.com/id/1294269000/fr/photo/chili-con-carne-v%C3%A9g%C3%A9talien-v%C3%A9g%C3%A9talien-hach%C3%A9-servi-dans-une-po%C3%AAle-en-fonte.jpg?s=612x612&w=0&k=20&c=btFVHhWnts0c-tK4XEBesK4AUEyPzNp-zULs-9i82Gc=', 13),
(10, 'Mousse au chocolat facile', '\r\nÉtape 1\r\n\r\nSéparer les blancs des jaunes d\'oeufs.\r\nÉtape 2\r\n\r\nFaire ramollir le chocolat dans une casserole au bain-marie.\r\nÉtape 3\r\n\r\nHors du feu, incorporer les jaunes et le sucre.\r\nÉtape 4\r\n\r\nBattre les blancs en neige ferme.\r\nÉtape 5\r\n\r\nAjouter délicatement les blancs au mélange à l\'aide d\'une spatule.\r\nÉtape 6\r\n\r\nVerser dans une terrine ou des verrines.\r\nÉtape 7\r\n\r\nMettre au frais 2h minimum.\r\nÉtape 8\r\n\r\nDécorer de cacao ou de chocolat râpé\r\nÉtape 9\r\n\r\nDéguster\r\n', 'Dessert', '\r\n1 sachet de sucre vanillé ou 1 pincée de sel\r\n100 g de chocolat noir\r\n3', 'https://media.istockphoto.com/id/623897390/fr/photo/moussau-chocolat.jpg?s=612x612&w=0&k=20&c=lxLXi_EIi52dP1cZ9yJ9B-O2Bjs3Ern3pslkXelP_uQ=', 13),
(11, 'Fondant au chocolat', '\r\nÉtape 1\r\n\r\nPréchauffer le four à 180°C (thermostat 6). Faire fondre le chocolat et le beurre au bain-marie à feu doux, ou au micro-ondes sur le programme \"décongélation\".\r\nÉtape 2\r\n\r\nPendant ce temps, séparer les jaunes des blancs d\'oeuf.\r\nÉtape 3\r\n\r\nMonter les blancs en neige ferme. Réserver.\r\nÉtape 4\r\n\r\nQuand le mélange chocolat-beurre est bien fondu, ajouter les jaunes d’oeufs et fouetter.\r\nÉtape 5\r\n\r\nIncorporer le sucre et la farine, puis ajouter les blancs d’oeufs sans les casser.\r\nÉtape 6\r\n\r\nBeurrer et fariner un moule à manqué et y verser la pâte à gâteau.\r\nÉtape 7\r\n\r\nEnfourner pendant 20 minutes.\r\nÉtape 8\r\n\r\nQuand le gâteau est cuit, le laisser refroidir avant de le démouler.\r\n', 'Dessert', '\r\n4 cuillères à soupe de farine\r\n100 g de sucre semoule\r\n100 g de beurre doux\r\n200 g de chocolat pâtissier\r\n5 oeufs\r\n', 'https://media.istockphoto.com/id/544716244/fr/photo/g%C3%A2teau-de-lave-au-chocolat-chaud-avec-centre-fondu-et-groseilles-rouges.jpg?s=612x612&w=0&k=20&c=FDNr7I7oA2kuagfMvF1cTBgl8XzmyBo-pIOI7i44eg8=', 11),
(12, 'Tarte au citron meringuée', '\r\nÉtape 1\r\n\r\nOn commence par la pâte sablée : mettre le four à préchauffer à 180°C (thermostat 6). On sépare les blancs des jaunes d\'oeufs.\r\nÉtape 2\r\n\r\nFouetter les jaunes d\'oeuf avec le sucre et 2 cuillères d\'eau pour faire mousser.\r\nÉtape 3\r\n\r\nMélanger au doigt la farine et le beurre coupé en petits cubes\r\nÉtape 4\r\n\r\npour obtenir une consistance sableuse et afin que tout le beurre soit absorbé (il faut faire vite pour que le mélange ne ramollisse pas trop).\r\nÉtape 5\r\n\r\nVerser au milieu de ce \"sable\" le mélange liquide.\r\nÉtape 6\r\n\r\nIncorporer rapidement au couteau les éléments sans leur donner de corps.\r\nÉtape 7\r\n\r\nFormer une boule avec les paumes\r\nÉtape 8\r\n\r\net l\'écraser 1 ou 2 fois pour rendre la boule plus homogène.\r\nÉtape 9\r\n\r\nFoncer un moule de 25 cm de diamètre avec la pâte sablée\r\nÉtape 10\r\n\r\npuis la recouvrir de papier sulfurisé et de haricots secs.\r\nÉtape 11\r\n\r\nCuire à blanc 20 à 25 minutes (NB après baisser le four à 120°C/150°C environ pour la meringue).\r\nÉtape 12\r\n\r\nOn poursuit avec la crème au citron : laver les citrons et en râper deux afin de récupérer le zeste.\r\nÉtape 13\r\n\r\nMettre les zestes très fins dans une casserole avec le jus des citrons, le sucre et la Maïzena.\r\nÉtape 14\r\n\r\nRemuer et commencer à faire chauffer à feux doux.\r\nÉtape 15\r\n\r\nBattre les oeufs dans un récipient séparé. Une fois les oeufs battus, incorporer tout en remuant le jus de citron, le sucre, la Maïzena et les zestes.\r\nÉtape 16\r\n\r\nMettre à feu vif et continuer à remuer à l\'aide d\'un fouet. Le mélange va commencer à s\'épaissir. Veiller à toujours remuer lorsque les oeufs sont ajoutés car la crème de citron pourrait brûler.\r\nÉtape 17\r\n\r\nÔter du feu et verser l\'appareil sur le fond de tarte cuit.\r\nÉtape 18\r\n\r\nLaisser refroidir.\r\nÉtape 19\r\n\r\nTerminons par la meringue : monter les blancs en neige avec une pincée de sel.\r\nÉtape 20\r\n\r\nQuand ils commencent à être fermes, ajouter le sucre puis la levure. Fouetter jusqu\'à ce que la neige soit ferme.\r\nÉtape 21\r\n\r\nRecouvrir la crème au citron de meringue\r\nÉtape 22\r\n\r\npuis enfourner la tarte à 120°C/150°C jusqu’à ce que la meringue dore (environ 10 minutes).\r\nÉtape 23\r\n\r\nDéguster\r\nÉtape 24\r\n\r\nUne part ?\r\n', 'Dessert', 'Pour la pâte sablée :\r\n1 pincée de sel\r\n70 g de sucre semoule\r\n125 g de beurre doux\r\n250 g de farine\r\n2 jaunes d\'oeuf\r\n5 cl d\' eau\r\nPour la crème au citron :\r\n1 cuillère à soupe de maïzena\r\n150 g de sucre semoule\r\n4 citrons de taille moyenne\r\n3 oeufs\r\nPour la meringue :\r\n0.5 cuillère à café de levure chimique\r\n100 g de sucre glace\r\n2 blancs d\'oeuf ', 'https://media.istockphoto.com/id/853944176/fr/photo/tartes-meringue-citron-mini.jpg?s=612x612&w=0&k=20&c=jeFxgp88MIkN91Fw8iMn35KGO9BW4SPp4cjYpyS7MN4=', 11),
(13, 'Falafel (croquettes de pois chiches)', '&#13;&#10;Étape 1&#13;&#10;&#13;&#10;Faites tremper les pois chiches et les fèves dans l&#39;eau 12 h, les égoutter et les cuire 45 mn à l&#39;auto cuiseur.&#13;&#10;Étape 2&#13;&#10;&#13;&#10;Peler oignon et ail, les hacher ainsi que le persil.&#13;&#10;Étape 3&#13;&#10;&#13;&#10;Passer les fèves et les pois chiches au mixer (ou robot).&#13;&#10;Étape 4&#13;&#10;&#13;&#10;Mélanger avec le persil, l&#39;oignon, l&#39;ail, la farine, les épices, le sel.&#13;&#10;Étape 5&#13;&#10;&#13;&#10;Pétrissez le tout avec vos mains en ajoutant un peu d&#39;eau si nécessaire. Rassemblez la pâte et laisser reposer au réfrigérateur pendant minimum 30 mn.&#13;&#10;Étape 6&#13;&#10;&#13;&#10;Façonner une trentaine de boulettes de la grosseur d&#39;une pièce de 2 euros.&#13;&#10;Étape 7&#13;&#10;&#13;&#10;Les faire frire 2/3 mn puis les égoutter sur du papier absorbant.&#13;&#10;Étape 8&#13;&#10;&#13;&#10;Servir chaud ou froid avec des petites sauces tomates aux herbes, ou sauces yaourts.&#13;&#10;', 'Entrée', '&#13;&#10;huile de friture&#13;&#10;sel&#13;&#10;1 cuillère à café de coriandre en poudre&#13;&#10;1 cuillère à café de cumin en poudre&#13;&#10;3 cuillères à soupe de farine&#13;&#10;1 bouquet de persil&#13;&#10;1 oignon moyen&#13;&#10;200 g de pois chiches&#13;&#10;500 g de fèves sèches&#13;&#10;2 gousses d&#39; ail&#13;&#10;1 cuillère à café de paprika&#13;&#10;3 cuillères à soupe de basilic frais haché&#13;&#10;', 'https://assets.afcdn.com/recipe/20170124/571_w157h157c1cx1500cy1000.webp', 12),
(16, 'Rouleaux de printemps simplifiés', '&#13;&#10;Étape 1&#13;&#10;&#13;&#10;Réhydrater les vermicelles de riz dans l&#39;eau fraîche comme indiqué sur le paquet.&#13;&#10;Étape 2&#13;&#10;&#13;&#10;Découper la tranche de blanc de poulet dans le sens de la longueur en fines lanières (3 mm environ).&#13;&#10;Étape 3&#13;&#10;&#13;&#10;Mettre les lanières dans un bol et verser les 2 cuillères à café de sauce soja par dessus.&#13;&#10;Étape 4&#13;&#10;&#13;&#10;Faire cuire les vermicelles dans de l&#39;eau bouillante. Lorsqu&#39;ils sont cuits, ne pas les laisser refroidir sinon ils colleront, mais les passer sous un filet d&#39;eau fraîche de manière à les refroidir et à pouvoir les manipuler sans vous brûler.&#13;&#10;Étape 5&#13;&#10;&#13;&#10;Rassemblez tous les ingrédients à portée de main. Vous aurez besoin d&#39;un plat rempli d&#39;eau tiède/chaude, dans laquelle vous pourrez immerger les galettes de riz, et d&#39;un plan de travail qui n&#39;adhère pas pour confectionner les rouleaux (une planche à découper par exemple, pas de solapin ni de torchon).&#13;&#10;Étape 6&#13;&#10;&#13;&#10;Immergez une galette de riz dans le plat d&#39;eau chaude, remuez doucement du bout des doigts de façon à sentir lorsqu&#39;elle sera assez souple pour être roulée.&#13;&#10;Étape 7&#13;&#10;&#13;&#10;Etendez-la sur votre plan de travail, répartissez des feuilles de salade de façon à former un petit rectangle qui s&#39;inscrit dans le cercle de la galette (laissez de la marge de galette pour pouvoir rouler plus facilement). Si vous utilisez des crevettes, il faut les placer sous la salade de façon à ce qu&#39;elles se retrouvent à la fin sur le dessus du rouleau.&#13;&#10;Étape 8&#13;&#10;&#13;&#10;Ajoutez ensuite deux ou trois feuilles de menthe, les vermicelles de riz, les lanières de poulet égouttées et les germes de soja.&#13;&#10;Étape 9&#13;&#10;&#13;&#10;Fermez les rouleaux, en tenant compte de l&#39;élasticité de vos galettes, n&#39;hésitez pas à serrer tout en restant prudent au cas où la galette se déchirerait.&#13;&#10;Étape 10&#13;&#10;&#13;&#10;Repliez les côtés. Enveloppez les dans la cellophane, cela aidera à les faire tenir jusqu&#39;à ce qu&#39;ils soient servis.&#13;&#10;Étape 11&#13;&#10;&#13;&#10;Gardez au frigo (au minimum une demi heure) et servez avec un ramequin de sauce pour nems.&#13;&#10;', 'Plat', '&#13;&#10;2 crevettes moyennes coupées dans le sens de la longueur&#13;&#10;25 g de vermicelles de riz (même rayon)&#13;&#10;2 galettes de riz (rayon exotique dans les grands supermarchés)&#13;&#10;1 tranche de blanc de poulet&#13;&#10;2 cuillères à café de sauce soja classique&#13;&#10;1 petite boîte de germes de soja&#13;&#10;1 petit sachet de salade toute prête&#13;&#10;5 feuilles de menthe&#13;&#10;sauce pour nem ', 'https://assets.afcdn.com/recipe/20131009/3942_w157h157c1cx1424cy2136.webp', 12),
(17, 'Galette des rois à la frangipane', '&#13;&#10;Étape 1&#13;&#10;&#13;&#10;Placer une pâte feuilletée dans un moule à tarte, piquer la pâte avec une fourchette.&#13;&#10;Étape 2&#13;&#10;&#13;&#10;Dans un saladier, mélanger la poudre d&#39;amandes, le sucre, les 2 oeufs et le beurre mou.&#13;&#10;Étape 3&#13;&#10;&#13;&#10;Placer la pâte obtenue dans le moule à tarte et y cacher la fève.&#13;&#10;Étape 4&#13;&#10;&#13;&#10;Recouvrir avec la 2ème pâte feuilletée, en collant bien les bords.&#13;&#10;Étape 5&#13;&#10;&#13;&#10;Faire des dessins sur le couvercle et badigeonner avec le jaune d&#39;oeuf.&#13;&#10;Étape 6&#13;&#10;&#13;&#10;Enfourner pendant 20 à 30 min à 200°C (thermostat 6-7); vérifier régulièrement la cuisson !&#13;&#10;', 'Dessert', '&#13;&#10;75 g de beurre tendre&#13;&#10;100 g de sucre fin&#13;&#10;2 pâtes feuilletées&#13;&#10;140 g d&#39; amandes en poudre&#13;&#10;2 oeufs&#13;&#10;1 jaune d&#39;oeuf&#13;&#10;1', 'https://assets.afcdn.com/recipe/20141217/841_w157h157c1cx1250cy1875.webp', 13),
(18, 'Tatin de magret de canard au foie gras', '&#13;&#10;Étape 1&#13;&#10;&#13;&#10;Eplucher la pomme, la couper en tranches &#39;demi-lune&#39;, les faire revenir avec le beurre 5 mn.&#13;&#10;Étape 2&#13;&#10;&#13;&#10;Prendre une petite timbale, mettre une couche de pommes, 2 tranches de magret, des pommes, les 2 morceaux de magret et finir par les pommes. Ajouter la cuillère de calvados.&#13;&#10;Étape 3&#13;&#10;&#13;&#10;Passer à four chaud 5 mn.&#13;&#10;Étape 4&#13;&#10;&#13;&#10;Démouler sur le pain de mie grillé, puis recouvrir de la tranche de foie gras. Servir chaud.&#13;&#10;', 'Entrée', '&#13;&#10;1 noix de beurre&#13;&#10;1 cuillère à café de calvados ou alcool de pomme&#13;&#10;1 rondelle de pain de mie grillé&#13;&#10;1 pomme reinette du vigan ou pomme verte&#13;&#10;4 tranches de Magret de canard fumé&#13;&#10;1 tranche de Foie gras (prêt à consommer)&#13;&#10;', 'https://assets.afcdn.com/recipe/20130122/64052_w600.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `last_name`) VALUES
(11, 'dphiane@yahoo.fr', '$2y$10$l.8tpT6pTEP.dG17.9bFDuTHmA5rPH60hT5AavuydnzU9BaAkqWdC', 'dominique', 'phiane '),
(12, 'azerty@azerty.fr', '$2y$10$qVEM5beK.aIfBPRCh8x9betARP419Fb5sQfgEmdj/kQWeB2seRrg6', 'azerty', 'qwerty'),
(13, 'phiane@gmail.com', '$2y$10$CR18iRp67hC0XEpETaGExuRcGWWmUHIpXm/1EiFdI2ZREE4ZgbxI.', 'dom', 'pham');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `recipe_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipe_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
