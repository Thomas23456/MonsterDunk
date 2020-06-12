
-- -----------------------------------------------------
-- Table `Division`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Division` (
  `id_division` INT NOT NULL,
  `nom` VARCHAR(32) NOT NULL,
  UNIQUE INDEX `nom_UNIQUE` (`nom` ASC),
  PRIMARY KEY (`id_division`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Equipe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Equipes` (
  `id_equipe` INT NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `division_id_division` INT NOT NULL,
  `region` VARCHAR(32) NOT NULL,
  `position` VARCHAR(32) NOT NULL,
  `surnom` VARCHAR(32) NOT NULL,
  `fondation` INT NOT NULL,
  `manager` VARCHAR(32) NOT NULL,
  `entraineur` VARCHAR(32) NOT NULL,
  `victoires_saison` INT NOT NULL,
  `defaites_saison` INT NOT NULL,
  `image` VARCHAR(32) NOT NULL,
  UNIQUE INDEX `nom_UNIQUE` (`nom` ASC),
  PRIMARY KEY (`id_equipe`),
  INDEX `fk_Equipe_Division_idx` (`division_id_division` ASC),
  CONSTRAINT `fk_Equipe_Division`
    FOREIGN KEY (`division_id_division`)
    REFERENCES `Division` (`id_division`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (1,'Atlanta Hawks',1,'Southeast','USA','Hawks',1946,'Benjamin Louima','Wes Wilcox',20,47,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (2,'Boston Celtics',1,'Atlantic','USA','Celtics',1946,'Danny Ainge','Brad Stevens',43,21,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (3,'Brooklyn Nets',1,'Atlantic','USA','Nets',1967,'Mikhail Prokhorov','Sean Marks',30,34,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (4,'Charlotte Hornets',1,'Southeast','USA','Hornets',1988,'Michael Jordan','Rich Cho',23,42,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (5,'Chicago Bulls',1,'Central','USA','Bulls',1966,'John Paxson','Gar Forman',22,43,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (6,'Cleveland Cavaliers',1,'Central','USA','Cavs',1970,'Dan Gilbert','Koby Altman',19,46,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (7,'Detroit Pistons',1,'Central','USA','Pistons',1941,'Jeff Bower','Stan Van Gundy',20,46,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (8,'Indiana Pacers',1,'Central','USA','Pacers',1967,'Chad Buchanan','Nate McMillan',39,26,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (9,'Miami Heat',1,'Southeast','USA','Heat',1988,'Pat Riley','Erik Spoelstra',41,24,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (10,'Milwaukee Bucks',1,'Central','USA','Bucks',1968,'Jon Horst','Jason Kidd',53,12,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (11,'New York Knicks',1,'Atlantic','USA','Knicks',1946,'The Madison Square Garden Company','Steven Mills',21,45,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (12,'Orlando Magic',1,'Southeast','USA','Magic',1989,'John Hammond','Frank Vogel',30,35,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (13,'Philadelphia 76ers',1,'Atlantic','USA','Sixers',1939,'Bryan Colangelo','Brett Brown',39,26,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (14,'Toronto Raptors',1,'Atlantic','USA','Raptors',1995,'Bobby Webster','Masai Ujir',48,18,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (15,'Washington Wizards',1,'Southeast','USA','Wizards',1961,'Ted Leonsis','Scott Brooks',24,40,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (16,'Dallas Mavericks',1,'Southwest','USA','Mavs',1980,'Mark Cuban','Donnie Nelson',40,27,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (17,'Denver Nuggets',1,'Northwest','USA','Nuggets',1967,'Tim Connelly','Michael Malone',43,22,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (18,'Golden State Warriors',1,'Pacific','USA','Warriors',1946,'Bob Myers','Steve Kerr',16,49,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (19,'Houston Rockets',1,'Southwest','USA','Rockets',1967,'Tilman J. Fertitta','Daryl Morey',40,24,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (20,'Los Angeles Clippers',1,'Pacific','USA','Clippers',1970,'Steve Ballmer','Doc Rivers',44,20,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (21,'Los Angeles Lakers',1,'Pacific','USA','Lakers',1947,'Earvin Magic Johnson','Rob Pelinka',49,14,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (22,'Memphis Grizzlies',1,'Southwest','USA','Grizzlies',1995,'Chris Wallace','J. B. Bickerstaff',32,33,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (23,'Minnesota Timberwolves',1,'Northwest','USA','Wolves',1989,'Tom Thibodeau','Scott Layden',19,45,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (24,'New Orleans Pelicans',1,'Southwest','USA','Pelicans',2002,'Tom Benson','Dell Demps',28,36,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (25,'Oklahoma City Thunder',1,'Northwest','USA','Thunder',1967,'Sam Presti','Billy Donovan',39,25,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (26,'Phoenix Suns',1,'Pacific','USA','Suns',1968,'Robert Sarver','Lance Blank',26,39,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (27,'Portland Trail Blazers',1,'Northwest','USA','Blazers',1970,'Neil Olshey','Terry Stotts',43,21,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (28,'Sacramento Kings',1,'Pacific','USA','Kings',1945,'Vivek Ranadivé','Vlade Divac',28,36,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (29,'San Antonio Spurs',1,'Southwest','USA','Spurs',1967,'R. C. Buford','Gregg Popovich',27,36,'celtics.png');
INSERT INTO `Equipes` (`id_equipe`,`nom`,`division_id_division`,`region`,`position`,`surnom`,`fondation`,`manager`,`entraineur`,`victoires_saison`,`defaites_saison`,`image`) VALUES (30,'Utah Jazz',1,'Northwest','USA','Jazz',1974,'Dennis Lindsey','Quin Snyder',41,25,'celtics.png');


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
-- Table `Compétition`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Compétition` (
  `id_compétition` INT NOT NULL,
  `nom` VARCHAR(32) NOT NULL,
  `date_debut` DATE NOT NULL,
  `date_fin` DATE NOT NULL,
  PRIMARY KEY (`id_compétition`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Resultat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Resultat` (
  `Equipe_id_equipe` INT NOT NULL,
  `Compétition_id_compétition` INT NOT NULL,
  `classement` INT NOT NULL,
  `victoire` INT NOT NULL,
  `défaite` INT NOT NULL,
  `ratio` DECIMAL(3,1) NOT NULL,
  `points_marqués` INT NOT NULL,
  PRIMARY KEY (`Equipe_id_equipe`, `Compétition_id_compétition`),
  INDEX `fk_Equipe_has_Compétition_Compétition1_idx` (`Compétition_id_compétition` ASC),
  INDEX `fk_Equipe_has_Compétition_Equipe1_idx` (`Equipe_id_equipe` ASC),
  CONSTRAINT `fk_Equipe_has_Compétition_Equipe1`
    FOREIGN KEY (`Equipe_id_equipe`)
    REFERENCES `Equipe` (`id_equipe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipe_has_Compétition_Compétition1`
    FOREIGN KEY (`Compétition_id_compétition`)
    REFERENCES `Compétition` (`id_compétition`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

