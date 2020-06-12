
CREATE TABLE IF NOT EXISTS `Article` (
  `id_article` INT NOT NULL,
  `nom` VARCHAR(32) NOT NULL,
  `auteur` VARCHAR(32) NOT NULL,
  `date_ajout_article` DATE NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `lien_img` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`id_article`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `Division`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Division` (
  `id_division` INT NOT NULL,
  `nom` VARCHAR(32) NOT NULL,
  UNIQUE INDEX `nom_UNIQUE` (`nom` ASC),
  PRIMARY KEY (`id_division`))
ENGINE = InnoDB;

INSERT INTO `Division` (`id_division`, `nom`) VALUES
(1, 'Pacific'),
(2, 'Northwest'),
(3, 'Southwest'),
(4, 'Atlantic'),
(5, 'Southest'),
(6, 'Central');

-- -----------------------------------------------------
-- Table `Equipe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Equipe` (
  `id_equipe` INT NOT NULL,
  `nom` VARCHAR(32) NOT NULL,
  `pays` VARCHAR(32) NOT NULL,
  `surnom` VARCHAR(32) NOT NULL,
  `fondation` INT NOT NULL,
  `manager` VARCHAR(64) NOT NULL,
  `entraineur` VARCHAR(32) NOT NULL,
  `image` VARCHAR(32) NOT NULL,
  `Division_id_division` INT NOT NULL,
  UNIQUE INDEX `nom_UNIQUE` (`nom` ASC),
  PRIMARY KEY (`id_equipe`),
  INDEX `fk_Equipe_Division_idx` (`Division_id_division` ASC),
  CONSTRAINT `fk_Equipe_Division`
    FOREIGN KEY (`Division_id_division`)
    REFERENCES `Division` (`id_division`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `Equipe` (`id_equipe`,`nom`,`division_id_division`,`pays`,`surnom`,`fondation`,`manager`,`entraineur`,`image`) VALUES
(1,'Atlanta Hawks',5,'USA','Hawks',1946,'Benjamin Louima','Wes Wilcox','atlanta.png'),
(2,'Boston Celtics',4,'USA','Celtics',1946,'Danny Ainge','Brad Stevens','celtics.png'),
(3,'Brooklyn Nets',4,'USA','Nets',1967,'Mikhail Prokhorov','Sean Marks','brooklyn.png'),
(4,'Charlotte Hornets',5,'USA','Hornets',1988,'Michael Jordan','Rich Cho','hornets.png'),
(5,'Chicago Bulls',6,'USA','Bulls',1966,'John Paxson','Gar Forman','bulls.png'),
(6,'Cleveland Cavaliers',6,'USA','Cavs',1970,'Dan Gilbert','Koby Altman','cavaliers.png'),
(7,'Detroit Pistons',6,'USA','Pistons',1941,'Jeff Bower','Stan Van Gundy','detroit.png'),
(8,'Indiana Pacers',6,'USA','Pacers',1967,'Chad Buchanan','Nate McMillan','pacers.png'),
(9,'Miami Heat',5,'USA','Heat',1988,'Pat Riley','Erik Spoelstra','miami.png'),
(10,'Milwaukee Bucks',6,'USA','Bucks',1968,'Jon Horst','Jason Kidd','bucks.png'),
(11,'New York Knicks',4,'USA','Knicks',1946,'The Madison Square Garden Company','Steven Mills','knicks.png'),
(12,'Orlando Magic',5,'USA','Magic',1989,'John Hammond','Frank Vogel','orlando.png'),
(13,'Philadelphia 76ers',4,'USA','Sixers',1939,'Bryan Colangelo','Brett Brown','philadelphia.png'),
(14,'Toronto Raptors',4,'USA','Raptors',1995,'Bobby Webster','Masai Ujir','raptors.png'),
(15,'Washington Wizards',5,'USA','Wizards',1961,'Ted Leonsis','Scott Brooks','washington.png'),
(16,'Dallas Mavericks',3,'USA','Mavs',1980,'Mark Cuban','Donnie Nelson','dallas.png'),
(17,'Denver Nuggets',2,'USA','Nuggets',1967,'Tim Connelly','Michael Malone','denver.png'),
(18,'Golden State Warriors',1,'USA','Warriors',1946,'Bob Myers','Steve Kerr','warriors.png'),
(19,'Houston Rockets',3,'USA','Rockets',1967,'Tilman J. Fertitta','Daryl Morey','rockets.png'),
(20,'Los Angeles Clippers',1,'USA','Clippers',1970,'Steve Ballmer','Doc Rivers','clippers.png'),
(21,'Los Angeles Lakers',1,'USA','Lakers',1947,'Earvin Magic Johnson','Rob Pelinka','lakers.png'),
(22,'Memphis Grizzlies',3,'USA','Grizzlies',1995,'Chris Wallace','J. B. Bickerstaff','grizzlies.png'),
(23,'Minnesota Timberwolves',2,'USA','Wolves',1989,'Tom Thibodeau','Scott Layden','minnesota.png'),
(24,'New Orleans Pelicans',3,'USA','Pelicans',2002,'Tom Benson','Dell Demps','newOrleans.png'),
(25,'Oklahoma City Thunder',2,'USA','Thunder',1967,'Sam Presti','Billy Donovan','thunder.png'),
(26,'Phoenix Suns',1,'USA','Suns',1968,'Robert Sarver','Lance Blank','suns.png'),
(27,'Portland Trail Blazers',2,'USA','Blazers',1970,'Neil Olshey','Terry Stotts','portland.png'),
(28,'Sacramento Kings',1,'USA','Kings',1945,'Vivek Ranadivé','Vlade Divac','sacramento.png'),
(29,'San Antonio Spurs',3,'USA','Spurs',1967,'R. C. Buford','Gregg Popovich','spurs.png'),
(30,'Utah Jazz',2,'USA','Jazz',1974,'Dennis Lindsey','Quin Snyder','jazz.png');


-- -----------------------------------------------------
-- Table `Poste`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Poste` (
  `id_poste` INT NOT NULL,
  `libelle` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id_poste`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Joueur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Joueur` (
  `id_joueur` INT NOT NULL,
  `nom` VARCHAR(32) NOT NULL,
  `prenom` VARCHAR(32) NOT NULL,
  `numero_maillot` INT NOT NULL,
  `moyenne_points` DECIMAL(3,1) NULL,
  `moyenne_rebond` DECIMAL(3,1) NULL,
  `moyenne_passe` DECIMAL(3,1) NULL,
  `Equipe_id_equipe` INT NOT NULL,
  `Poste_id_poste` INT NOT NULL,
  PRIMARY KEY (`id_joueur`),
  INDEX `fk_Joueur_Equipe1_idx` (`Equipe_id_equipe` ASC),
  INDEX `fk_Joueur_Poste1_idx` (`Poste_id_poste` ASC),
  CONSTRAINT `fk_Joueur_Equipe1`
    FOREIGN KEY (`Equipe_id_equipe`)
    REFERENCES `Equipe` (`id_equipe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Joueur_Poste1`
    FOREIGN KEY (`Poste_id_poste`)
    REFERENCES `Poste` (`id_poste`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Competition`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Competition` (
  `id_competition` INT NOT NULL,
  `nom` VARCHAR(32) NOT NULL,
  `date_debut` INT NOT NULL,
  `date_fin` INT NOT NULL,
  PRIMARY KEY (`id_competition`))
ENGINE = InnoDB;

INSERT INTO `Competition` (`id_competition`, `nom`, `date_debut`, `date_fin`) VALUES
(1, 'Conference Ouest', 2019, 2020),
(2, 'Conference Est', 2019, 2020);


-- -----------------------------------------------------
-- Table `Resultat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Resultat` (
  `Equipe_id_equipe` INT NOT NULL,
  `Competition_id_competition` INT NOT NULL,
  `classement` INT NOT NULL,
  `victoire` INT NOT NULL,
  `defaite` INT NOT NULL,
  `ratio` DECIMAL(3,1) NOT NULL,
  `points_marques` INT NOT NULL,
  PRIMARY KEY (`Equipe_id_equipe`, `Competition_id_competition`),
  INDEX `fk_Equipe_has_Competition_Competition1_idx` (`Competition_id_competition` ASC),
  INDEX `fk_Equipe_has_Competition_Equipe1_idx` (`Equipe_id_equipe` ASC),
  CONSTRAINT `fk_Equipe_has_Competition_Equipe1`
    FOREIGN KEY (`Equipe_id_equipe`)
    REFERENCES `Equipe` (`id_equipe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipe_has_Competition_Competition1`
    FOREIGN KEY (`Competition_id_competition`)
    REFERENCES `Competition` (`id_competition`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `Resultat` (`Equipe_id_equipe`, `Competition_id_competition`, `classement`, `victoire`, `defaite`, `ratio`, `points_marques`) VALUES
(10,2,1,53,12,0.82,7713),
(14,2,2,46,18,0.72,7231),
(2,2,3,43,21,0.67,7232),
(9,2,4,41,24,0.63,7290),
(8,2,5,39,26,0.6,7107),
(13,2,6,39,26,0.6,7123),
(3,2,7,30,34,0.47,7089),
(12,2,8,30,35,0.46,6914),
(15,2,9,24,40,0.38,7399),
(4,2,10,23,42,0.35,6687),
(5,2,11,22,43,0.34,6945),
(11,2,12,21,45,0.32,6983),
(7,2,13,20,46,0.3,7078),
(1,2,14,20,47,0.3,7488),
(6,2,15,19,46,0.29,6848),
(21,1,1,49,14,0.78,7203),
(20,1,2,44,20,0.69,7436),
(17,1,3,43,22,0.66,7176),
(30,1,4,41,23,0.64,7106),
(19,1,5,40,24,0.63,7560),
(25,1,6,39,25,0.61,7061),
(16,1,7,40,27,0.6,7796),
(22,1,8,32,33,0.49,7321),
(27,1,9,29,37,0.44,7500),
(24,1,10,28,36,0.44,7436),
(28,1,11,28,36,0.44,6975),
(29,1,12,27,36,0.43,7129),
(26,1,13,26,39,0.4,7316),
(23,1,14,19,45,0.3,7248),
(18,1,15,16,49,0.25,6940);