CREATE DATABASE IF NOT EXISTS guide;
USE guide;
CREATE TABLE
        Restaurant (
                id Int Auto_increment NOT NULL,
                Nom Varchar(50) NOT NULL,
                Adresse Varchar(50) NOT NULL,
                CONSTRAINT Restaurant_PK PRIMARY KEY (id)
        ) ENGINE = InnoDB;

CREATE TABLE
        Catalogue_des_plats (
                id Int Auto_increment NOT NULL,
                Nom_des_plats Varchar(50) NOT NULL,
                Place_plat Varchar(50) NOT NULL,
                CONSTRAINT Catalogue_des_plats_PK PRIMARY KEY (id)
        ) ENGINE = InnoDB;

CREATE TABLE
        Catalogue_des_Vins (
                id Int Auto_increment NOT NULL,
                nom_du_vin Varchar(50) NOT NULL,
                couleur Varchar(50) NOT NULL,
                millesime Year NOT NULL,
                CONSTRAINT Catalogue_des_Vins_PK PRIMARY KEY (id)
        ) ENGINE = InnoDB;

CREATE TABLE
        Origine (
                id Int Auto_increment NOT NULL,
                appelation Varchar(50) NOT NULL,
                vignoble Varchar(5) NOT NULL,
                CONSTRAINT Origine_PK PRIMARY KEY (id)
        ) ENGINE = InnoDB;

CREATE TABLE
        Proposer_p (
                id Int NOT NULL,
                id_Restaurant Int NOT NULL,
                prixPlat DECIMAL(15, 3) NOT NULL,
                specialite Bool NOT NULL,
                CONSTRAINT Proposer_p_PK PRIMARY KEY (id, id_Restaurant),
                CONSTRAINT Proposer_p_Catalogue_des_plats_FK FOREIGN KEY (id) REFERENCES Catalogue_des_plats (id),
                CONSTRAINT Proposer_p_Restaurant0_FK FOREIGN KEY (id_Restaurant) REFERENCES Restaurant (id)
        ) ENGINE = InnoDB;

CREATE TABLE
        Proposer_v (
                id Int NOT NULL,
                id_Restaurant Int NOT NULL,
                prixBouteille DECIMAL(15, 3) NOT NULL,
                prixVerre DECIMAL(15, 3) NOT NULL,
                CONSTRAINT Proposer_v_PK PRIMARY KEY (id, id_Restaurant),
                CONSTRAINT Proposer_v_Catalogue_des_Vins_FK FOREIGN KEY (id) REFERENCES Catalogue_des_Vins (id),
                CONSTRAINT Proposer_v_Restaurant0_FK FOREIGN KEY (id_Restaurant) REFERENCES Restaurant (id)
        ) ENGINE = InnoDB;

CREATE TABLE
        Recommander (
                id Int NOT NULL,
                id_Catalogue_des_plats Int NOT NULL,
                CONSTRAINT Recommander_PK PRIMARY KEY (id, id_Catalogue_des_plats),
                CONSTRAINT Recommander_Catalogue_des_Vins_FK FOREIGN KEY (id) REFERENCES Catalogue_des_Vins (id),
                CONSTRAINT Recommander_Catalogue_des_plats0_FK FOREIGN KEY (id_Catalogue_des_plats) REFERENCES Catalogue_des_plats (id)
        ) ENGINE = InnoDB;

CREATE TABLE
        Provenir (
                id Int NOT NULL,
                id_Origine Int NOT NULL,
                CONSTRAINT Provenir_PK PRIMARY KEY (id, id_Origine),
                CONSTRAINT Provenir_Catalogue_des_Vins_FK FOREIGN KEY (id) REFERENCES Catalogue_des_Vins (id),
                CONSTRAINT Provenir_Origine0_FK FOREIGN KEY (id_Origine) REFERENCES Origine (id)
        ) ENGINE = InnoDB;