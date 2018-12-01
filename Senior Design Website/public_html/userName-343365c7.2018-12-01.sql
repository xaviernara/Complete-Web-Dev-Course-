

CREATE TABLE `Course` (
  `courseID` int(4) NOT NULL,
  `courseName` varchar(7) NOT NULL,
  `professorID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO Course VALUES
("1","ECE 354","Qniyaz"),
("1","ECE 354","Qniyaz"),
("1234","fjfji","djfj"),
("200","ECE 439","EPierson"),
("300","ECE354","Qniyaz"),
("200","ECE 439","EPierson"),
("300","ECE354","Qniyaz"),
("400","ECE152","Bchen"),
("1223","ssjdjd","djfjkc"),
("12","CS 303",""),
("12","CS 303",""),
("2344","dkfkf","dkdfkfk"),
("567","fgof,m",""),
("1234","dffj",""),
("595","ECE595",""),
("595","ECE595","Qniyaz"),
("152","ECE152","bchen");




CREATE TABLE `Professors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;


INSERT INTO Professors VALUES
("1","xarichar@pnw.edu","mypassword","",""),
("2","thfu","kjpokj;","",""),
("3","x@me.com","fdfd","",""),
("4","da@me.com","fdfdbdb","",""),
("5","soap@body.com","fjfkjf","",""),
("6","nhd@vkgvk","fjngl","",""),
("7","how@why.com","fddlmdl","",""),
("8","hel@gjgdk.com","fjkfgk","",""),
("9","flgk@pj.com","fjfgj","",""),
("10","ppucket@purdue.edu","testing","",""),
("11","Xad@me.com","fjfjfj","",""),
("12","sss@pp.com","fifif","",""),
("13","fff@yellow.com","fegrge","",""),
("14","xxff@pgpg.edu","djdjf","",""),
("15","xwsrftw@gjg.edu","ddfws","",""),
("16","ddf@fjkf.edu","dmdf","",""),
("17","XF@hj.edu","hjj","",""),
("18","xood@gjg.com","fkf","",""),
("19","djfjk@pfjg.com","fjfgjg","",""),
("20","fjhf@pnw.edu","fjfgj","",""),
("21","dod@fkifgk.edu","fk,gk","",""),
("22","ddgg@pnw.edu","dffggf","",""),
("23","pat@young.com","123edfgg","john smith",""),
("24","tot@gjgj.com","djkfjg","xav jojo",""),
("25","xarichar@kfjfj.com","fjjgjf","fdjgk fjf",""),
("26","dogkg@gjgj.com","rigifg","sofm gogog",""),
("27","xdgfgf@ghmn.com","ejrnf","jojo g",""),
("28","ert@hoh.com","dfjmgk","ffghj",""),
("29","ddff@hgh.vom","gujhhi","fffxfdf",""),
("30","skdk@hoho.com","ddffgg","fadcff",""),
("31","xsld@gjgj.com","djjkf","xkdkjg",""),
("32","xari@gjkgk.com","12345","dkfjg",""),
("33","xadfgm@phhj.com","rrhh","xakfoty",""),
("34","ssfgf@pnp.com","dfgg","dkfkglkh",""),
("35","xafhgjgj@gjgj.com","ddfg","xm,vgk",""),
("36","dodjfj@mbmnb.com","12jgf","fofk ffk",""),
("37","csfdgd@pn.wdd","1234","Quamar Niyaz","Qniyaz"),
("38","xa@hkh.com","123","xfkg","efgk"),
("39","xafjg@hj.com","2c9ebf12fbd7185a9ac0d64964a76daa","wjjfj","djfjg"),
("40","xfj@pg.om","56e1794332d675c2f0c3e277cc019680","djfj","djdfjf"),
("41","gho@gig.com","sdjdfj","dfkgo","cmvmf"),
("42","gho@gig.com","sdjdfj","dfkgo","cmvmf"),
("43","sdasvdas@gk.com","dfmjfj","ddfkfk","ddfkfkfgg"),
("44","sdasvdas@gk.com","dfmjfj","ddfkfk","ddfkfkfgg"),
("45","ftfg@pmf.com","1e60710348d1ad01d618c34bfe8ead3b","cfkf","ddkf"),
("46","aesdgsd@gjg.com","740f7924f83205caacd739354ab22a3b","rffggk","edfg"),
("47","jogho@jgn.com","a8d8fc9b68234384be1b7a012285746c","door know","dknow");




CREATE TABLE `StudentsInfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(30) NOT NULL,
  `PUID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


INSERT INTO StudentsInfo VALUES
("1","Xavier Richardson","123"),
("4","Santiago Jimenez","124"),
("5","Eric Douglass","125"),
("6","Santiago Jimenez","124"),
("7","Eric Douglass","125"),
("8","Erika Carguacundo","126"),
("9","Erika Carguacundo","126"),
("10","Erika Carguacundo","126"),
("11","John Smith","127");




CREATE TABLE `attendance_lessons` (
  `courseID` int(4) NOT NULL,
  `PUID` int(10) NOT NULL,
  `date` date NOT NULL,
  `attendance` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO attendance_lessons VALUES
("0","1","2018-11-14","P"),
("7777","1","2018-11-14","P"),
("100","1","2018-11-14","P");


