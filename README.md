# Online games parser

__Description:__
This is a test task i created by specific requirements. It includes 3 tasks (presented as problems - #Problem1, #Problem2 and #Problem3) and need developer solution. 

  __Problem #1:__
  
  Contacts system
    
    - We need to develop a contacts application 
    - This application user should be able to store / edit / delete contacts records.
    - Each contact should have the following:
      - Personal details like first, last name, company etc.
      - Image (one or more)
      - Phone numbers – different types of phones like mobile, work, home, fax, etc.
      - Emails
      - Addresses (home, work etc.)
      - IM (skype, google etc.)
      - Social networks
      - Comments 
  
    1. What is the DB schema you would use; describe the tables and relations for this kind of application.
    2. Write a pseudo of “UpdateContact” function
      - what arguments it will get?
      - What will it return?
      - Describe in high level the steps this function will do.


 __Problem #2: OOP__
  
  Please write classes structure (in the language of your choosing, such as: C#, JAVA, JavaScript, PHP) that describes the following objects and their properties/functions.
  
    1. Dolphin
      a. Age (property)
      b. Sleep (function that print ‘zzzzzz’)
      c. Swim (function that print ‘splah’)
      d. Eat (function that print ‘yummy’)
    2. Lion
      a. Age (property)
      b. Sleep (function that print ‘zzzzzz’)
      c. Roar (function that print ‘wrrrrr ’)
      d. Eat (function that print ‘yummy’)
    3. Eagle
      a. Age (property)
      b. Sleep (function that print ‘zzzzzz’)
      c. Fly (function that print ‘whoohooo’)
      d. Eat (function that print ‘yummy’)
    4. Bee
      a. Age (property)
      b. Sleep (function that print ‘zzzzzz’)
      c. Fly (function that print ‘whoohooo’)
      d. Eat (function that print ‘yummy’)


__Problem #3: Responsive Design__

Create a web page using the attached file - “games.json” - and the following mockup: image example
![alt tag](/docs/web-api-example.png?raw=true "Primary web API interface")

  __Functionality__
  
  1. Each category should display the game items belong to it from the JSON.
  2. Each game item should display the game name and game thumbnail
  3. Game thumbnail URL should be build from the game name as follow:
    a. Convert the game name to lower case
    b. Remove any non-alphanumeric characters from the name (spaces, commas, quotes, etc.)
    c. Append “-minipod.jpg” at the end of the name.
    d. Append the resulting name to the following URL: 
      http://cacheimg.majesticslots.com/images/www/games/minipods/
      Example: For the game “Football Frenzy!” the final URL should be
      http://cacheimg.majesticslots.com/images/www/games/minipods/footballfrenzy-minipod.jpg
  4. When hovering over a game, there should be a “Play Now” button with “Play” icon over the game thumbnail.
  5. Clicking on a game should call the following JavaScript:
    openGame([game_name], [game_code], [machine_id], [denominations], [hands]);
    The values should be taken from the JSON file for each game.
    You can use either JavaScript or PHP (or other language you like) to render the above.

__My Solution:__
Implemented logic to parse Online Games
data from JSON file. I use a class autoloader by PSR-4 specification.

 User class implements Interface with methods must implement.
For database connection i use my pre-ready class /models/Database.php with PDO driver.

If all fields are valid (server & client side) the user is saved in MySQL database with PDO connection.

Project information:
-------------
  I build custom PHP API, using Bootstrap 3.0, jQuery, Ajax and PHP-PDO for secure database connection. Escape dangerous tags and possible XSS attack.
  
Requirements:
-------------
  You need to have PHP 5.4.0 (because of some syntax used)
  - array notation []

Installation:
-------------
  1. Download project ZIP file or clone it via GIT with command:
  
  __HTTPS__
  ```
  git clone https://github.com/krasimirkostadinov/online-games-parser.git
  ```
  
  __SSH__
  ```
  git clone git@github.com:krasimirkostadinov/online-games-parser.git
  ```
  
  2. Create specific host and enable it (depends on evironment). In my case this is www.game-parser.dev at /var/www/html/game-parser.dev
  3. Please setup your project settings in ./config.php file.
    !important config settings:
    - HOST_PATH - host path (also URL) to your local project. This variable is used for loading dynamic libraries and files.
  4. Set Database config files. I use separate DB class for connection at /models/Database.php. See $_cnf[] variable.
    - dbname - name your created database
    - username - user for database connection
    - password - user's password for database connection


Project preview:
----------------
  1. User form error state
  ![alt tag](/docs/web-api-example.png?raw=true "Primary web API interface")

Future improovements:
---------------------
  - Map data from JSON file to different related Entity and class objects.
  - Optimise user interface and responsive design.
  
