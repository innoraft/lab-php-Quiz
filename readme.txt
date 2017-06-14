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

Deployment steps:

1.Clone this from the github repo git@github.com:innoraft/lab-php-Quiz.git. or download zip.
2.Create the database with credentials needed.
3.Make changes in dbconfig.php file.
                                
                                       <?php
    $connection = mysql_connect("localhost", "root", "9433");
    $db = mysql_select_db("quizdb", $connection);
    ?>
make changes as needed
4.save the changes made in dbconfig.php file.
5.import the database through quizdb1.sql file.

				





