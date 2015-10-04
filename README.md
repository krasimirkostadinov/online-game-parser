# Online games parser

__Description:__
This is a test task i created by specific requirements. It includes 3 tasks (presented as problems - #Problem1, #Problem2 and #Problem3) and need developer solution. For detailed description please check below.


Project information:
-------------
  I build custom PHP API, using Bootstrap 3.0, jQuery, Ajax and PHP-PDO for secure database connection. Escape dangerous tags and possible XSS attack.
  
Requirements:
-------------
  You need to have PHP 5.4.0 (because of some syntax used)
  - array notation []


  ## Problem 1:

  
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

  __My solution:__
  
  See folder problem1. If you have MySQL Workbench you can review primary DB schema. Otherwise please check db_schema.png file.
  Class specific requirements i've listed in Contact.php file.


  ## Problem 2: OOP
  
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

  __My solution:__
  
  See folder problem2. All classes extend Abstract class (AEntity.php) containing methods and output where are required for all places.
  

## Problem #3: Responsive Design

Create a web page using the attached file - “games.json” - and the following mockup: image example
![alt tag](/docs/web-api-example.png?raw=true "Primary web API interface")

  __Functionality__
  
  * Each category should display the game items belong to it from the JSON.
  * Each game item should display the game name and game thumbnail
  * Game thumbnail URL should be build from the game name as follow:
    - Convert the game name to lower case
    - Remove any non-alphanumeric characters from the name (spaces, commas, quotes, etc.)
    - Append “-minipod.jpg” at the end of the name.
    - Append the resulting name to the following URL:
      - http://cacheimg.majesticslots.com/images/www/games/minipods/
      - Example: For the game “Football Frenzy!” the final URL should be
      - http://cacheimg.majesticslots.com/images/www/games/minipods/footballfrenzy-minipod.jpg
  * When hovering over a game, there should be a “Play Now” button with “Play” icon over the game thumbnail.
  * Clicking on a game should call the following JavaScript:
    openGame([game_name], [game_code], [machine_id], [denominations], [hands]);
    The values should be taken from the JSON file for each game.
    You can use either JavaScript or PHP (or other language you like) to render the above.

__My Solution:__
Implemented logic to parse Online Games data from JSON file. I use a class autoloader by PSR-4 specification. Created responsive design and helper JsonParser.php class.

  Project preview:
  ----------------
  
  1. We have 4 tabs with 4 different categories of games
  ![alt tag](/docs/tab-featured-games.png?raw=true "Tab featured games")

  2. Tab Card games
  ![alt tag](/docs/tab-card-games.png?raw=true "Tab Card games")

  3. Hover and click method calling openGame() function
  ![alt tag](/docs/hover-and-click.png?raw=true "Hover & click event")

  4. Mobile version and responsive design
  
  ![alt tag](/docs/mobile-version.png?raw=true "Responsive design")

## Installation:

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


## Future improovements:

  - Map data from JSON file to different related Entity and class objects.
  - Optimise user interface and responsive design.
  
