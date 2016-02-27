How to modify a Drupal 6 .info file to work with Drupal 7

Theming Changes In Drupal 6 to 7
----------------------------------
http://drupal.org/update/themes/6/7

Setting up Drupal 7
--------------------
1) Extract drupal-7.9.tar.gz and rename to hanselpetal7 (which is the name of our website)
2) From Acquia Dev Desktop click "Settings -> Sites -> Import"
3) Click "Browse" button for Site Path settings and choose "hanselpetal7"
4) Choose "Create new database" and enter "hanselpetal" as the New DB name
5) Enter "hanselpetal7" for the Server Domain name
6) Click "import"
7) Choose "Standard" profile if not selected and click "Save and continue" 
8) Choose "English" as your language and click "Save and continue"
9) Enter "hanselpetal7" as Site name
10)Enter an email for Site e-mail address
11)Enter "admin" as Username
12)Enter "drupal" as Password
13)Choose "United States" as Default country
14)Click "Save and continue"
15)Click "visit your new site"


Add Hansel Petal Content
--------------------------
1) Open up Acquia Dev Desktop
2) Click "Manage my database"
3) Choose "hanselpetal7" database from phpMyAdmin interface
4) Scroll down to bottom of page and select "Check all" and "Drop" from options
5) Click "Yes" button from confirmation screen
6) Verify action was successful
7) Click "Import" tab and "Browse" button, browse to the exercise folder and the .sql.zip file that you want to import.
8) Click "Go" button
9) Verify action was successful
10)Browse to hanselpetal7 web site and verify site is functional

Replacing files content
------------------------------
1) Copy the contents of the files folder from the exercise folder to sites/hanselpetal7/files folder

Creating the HanselPetal Theme
------------------------------
1) Browse to the Exercise Files and copy the hanselandpetal folder to the "sites/all/themes" folder of your Drupal 7 instance
2) Within "hanselandpetal.info" modify the following metadata
3) Change core = 6.x to core = 7.x
4) Modify the stylesheets reference to point to assets/css/ folder
5) Add javascript reference to assets/js/modernizr.js
6) Navigate to the Appearance tab and select "HanselAndPetal" as our Default theme
7) View the Home Page

Adjusting Block Content
--------------------------------
Move the following blocks into the correct regions for the HanselAndPetal theme

Help - System Help
Content - Main page content
Sidebar First - Navigation, User login, Recent blog posts
Sidebar Second - Search form, Syndicate
Footer - Main menu
Footer Content 1 - Who's new, Who's online
Footer Content 2 - Powered by Drupal, Ads
Footer Content 3 - Drupal News feed latest items