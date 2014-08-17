Upload-Data-From-Csv-to-MySQL-PHP-Script
========================================

Steps to run the script:

1. You must create a database named 'csvdata' manually in your localhost phpmyadmin first.

2.
Then Run this sql in your php myadmin sql field,

CREATE TABLE IF NOT EXISTS `csvdata` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
)

3.
Downlod the files to zip file and extract to htdocs.

4.
Goto your browser and use address like "http://localhost/csvtodatabase" to run your project

5.
upload the 'data.csv' from the location "Your drive*/xampp/htdocs/csvtodatabase/csvfile".

6.
Then check it in your phpmyadmin.

========================================

You can customize your CSV file any time. But you have to remember to modify the titel fileds of your database table.

If you face any trouble, please email me to 'evan06alam@gmail.com'.

Thank you
Evan
evan06alam@gmail.com
