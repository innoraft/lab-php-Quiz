#Quiz
#project-level-3


------------------------------------------------About the project----------------------------------------------------------------
                                                      Summary
          Online quiz portal with attractive UI and UX. Accepts quiz questions to be uploaded through a CSV.



------------------------------------------------what this project has------------------------------------------------------------
1.User roles - anonymous, authenticated, admin
2.Admin can create a quiz.
3.A quiz will have set of questions, and an optional time limit
4.All questions will be MCQs with one and only one answer that is correct
5.Dashboard to import question-answers from CSV
6.Jumble it up when rendering the quiz
7.Login to attempt the quiz
8.UI will have one question at a time
9.If quiz has timer, quiz will be timed, show a timer on the page
10.Results should be available to the admin in a table and also have a CSV export option
11.Also a dashboard of all quiz.

-----------------------------------------------------Deployment steps------------------------------------------------------------

1.Clone this from the github repo git@github.com:innoraft/lab-php-Quiz.git. or download zip.
2.Create the database with credentials needed.
3.Make changes in dbconfig.php file.
                                
                                       <?php
    $connection = mysql_connect("localhost", "root", "9433");
    $db = mysql_select_db("quizdb", $connection);
    ?>
-------------make changes as needed---------------------------
4.save the changes made in dbconfig.php file.
5.create the database through .sql file.
6.open the .sql file and find these:
				 CREATE TABLE IF NOT EXISTS `admin` (
				  `admin_id` int(100) NOT NULL AUTO_INCREMENT,
				  `admin_name` varchar(100) NOT NULL,
				  `admin_email` varchar(100) NOT NULL,
				  `admin_passhash` varchar(100) NOT NULL,
				  `roll_id` int(100) NOT NULL,
				  PRIMARY KEY (`admin_id`)
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

		INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_passhash`, `roll_id`) VALUES
		(1, 'Saheb', 'soumyaraha10@yahoo.in', '900150983cd24fb0d6963f7d28e17f72', 1);


					CREATE TABLE IF NOT EXISTS `ans_given` (
					  `e_id` int(100) NOT NULL,
					  `q_id` int(100) NOT NULL,
					  `ans_given` int(100) NOT NULL
					) ENGINE=InnoDB DEFAULT CHARSET=latin1;


						CREATE TABLE IF NOT EXISTS `categories` (
						  `c_id` int(11) NOT NULL AUTO_INCREMENT,
						  `c_name` varchar(20) DEFAULT NULL,
						  PRIMARY KEY (`c_id`)
						) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;


					


						CREATE TABLE IF NOT EXISTS `example` (
						  `q` varchar(100) NOT NULL,
						  `opt1` int(100) NOT NULL,
						  `opt2` int(100) NOT NULL,
						  `opt3` int(100) NOT NULL,
						  `opt4` int(11) NOT NULL,
						  `ca` int(11) NOT NULL,
						  `c_id` int(11) NOT NULL
						) ENGINE=InnoDB DEFAULT CHARSET=latin1;



					CREATE TABLE IF NOT EXISTS `exam_taken` (
					  `e_id` int(11) NOT NULL AUTO_INCREMENT,
					  `u_id` int(11) NOT NULL,
					  `u_name` varchar(100) NOT NULL,
					  `c_id` int(11) NOT NULL,
					  `c_name` varchar(100) NOT NULL,
					  `score` int(100) NOT NULL,
					  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
					  PRIMARY KEY (`e_id`)
					) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;



						CREATE TABLE IF NOT EXISTS `quesans` (
						  `q_id` int(11) NOT NULL AUTO_INCREMENT,
						  `q` varchar(100) NOT NULL,
						  `opt1` varchar(100) DEFAULT NULL,
						  `opt2` varchar(100) DEFAULT NULL,
						  `opt3` varchar(100) DEFAULT NULL,
						  `opt4` varchar(100) DEFAULT NULL,
						  `ca` varchar(100) DEFAULT NULL,
						  `c_id` int(11) DEFAULT NULL,
						  PRIMARY KEY (`q_id`),
						  KEY `c_id` (`c_id`)
						) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;



					CREATE TABLE IF NOT EXISTS `urole` (
					  `u_role` varchar(20) DEFAULT NULL,
					  `roll_id` int(11) NOT NULL DEFAULT '0',
					  PRIMARY KEY (`roll_id`)
					) ENGINE=InnoDB DEFAULT CHARSET=latin1;



			CREATE TABLE IF NOT EXISTS `user` (
			  `u_id` int(11) NOT NULL AUTO_INCREMENT,
			  `u_name` varchar(20) DEFAULT NULL,
			  `u_email` varchar(50) DEFAULT NULL,
			  `u_passhash` varchar(50) DEFAULT NULL,
			  `roll_id` int(11) DEFAULT NULL,
			  PRIMARY KEY (`u_id`),
			  KEY `roll_id` (`roll_id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

















