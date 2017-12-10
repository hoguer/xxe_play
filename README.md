# xxe_play
#
# Purpose: to learn about XXE attacks and try them in a safe environment
#
# It is recommended that you use a Virtual Machine to run vulnerable.php
#
# To use: 
#
#	1. Start a server 
#     (for example, to start apache on linux: /etc/init.d/apache2 start)
#     (for example, to start on Mac OS: php -S localhost:9000)
#	2. Place vulnerable.php in the server directory.
#	3. Post one of the example XML files to vulnerable.php
#	   (for example, using curl: curl -d @Example_1.0.xml http://localhost/vulnerable.php)
#
# The Example_4.0.xml won't work with PHP (PHP has safeguards against entity expansion), so a smaller expansion is given in Example_4.1.xml to give the user an idea of how the expansion works.
