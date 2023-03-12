# Dating Site

## Project Overview

This project is a dating site (work in progress) that focuses on matching users with people with similar interests to them.

## Features
- Technologies used: 
  - HTML 
  - CSS
  - Javascript
  - JQuery
  - PHP
  - SQL
- Working signup/login system created with PHP and relational SQL databases. Taking steps to assure user safety with methods such as by password encrypting and prepared statements to prevent injection attacks.
- Index page that changes when a user is logged in or logged out.
- Working sign up and log in pages that contain validation.
- Profile page that automatically populates the page based on user data entered on signup (name, age, gender, location, etc.).
- Interactivity - User can add interest categories (video games, movies, sports, books, etc.), select which categories they'd like to view and then add specific interests (specific games they like, sports they play, books they've read, etc.). The database is automatically updated so that these interest categories and specific interests are saved. Deleting is also fully functional.

## Improvements

### Coding Principles
#### Object Oriented Programming
One way the code could be improved is implementing a fully object oriented coding style. <br>
I don't think my PHP code would be greatly affected by this, since it's a relatively simple signup/login method.<br>
However, I think my JS would enormously benefit from an OOP style. Storing users, interest categories and specific interests as objects would improve the readability and efficiency of my code. <br>
I found my JS file got quite bloated and complicated pretty quickly, and by compartmentalising my project it would be easier to debug, send the correct information through AJAX requests and make it easier to scale the code when building upon features.

### Technologies/tools
#### Frameworks/libraries
After using React on a different proect, I can see how useful using React or a similar framework would be with a project like this. <br>
Storing code components would be very useful, also the virtual dom is helpful how it updates sections of the project automatically.

#### Non-relational databases
I think especially since this is in the early stages and currently has a low user base, I think using a non-relational database would have been very useful.<br>
In terms of updating the database when a user adds and deletes an interest, it would be much simpler to just store the interests in an array which can be added to and deleted from instead of doing everything through an SQL database that requires an Ajax request which is then handled by PHP code which then edits the SQL database and returns the result.


### Style
I think the style is fine but does seem to lack professional finish. I plan to research other dating sites and see what may be missing from mine that makes it look less professional.<br>
Also, I created the site with my monitor screen in mind and haven't added responsiveness for bigger/smaller screens, which is very important and something that I will aim to do in the future.

### Plans for the future
Currently, only the login/signup system and profile creation screen works. There are still a number of things that I haven't added, but plan to in the future including:
 - Responsive design, especially focusing on mobile devices.
 - Ability to add and store profile picture for each user.
 - Ability to search for other users based on matching interests.
 - Ability to chat with other users that you have matched with.

## Motivation
<p>
The idea for this project first started when I was brainstorming for ideas of how to create a project that could tell hiring managers more about me and my interests and show my ability to code.
I first started thinking along the lines of an online resume/profile that showed my past experience and hobbies. 
However, I wanted to create something that could potentially be used in real life and not just in an interview, that had unlimited potential for adding new features and implementing new technologies. 
</p> 
<p>
Around this time I went on a date with a girl, and whilst we were eating I couldn't stop thinking about an Anime "Chainsaw Man" that had just released. 
I really wanted to ask this girl if she had watched Chainsaw Man, but I was 99% sure that she hadn't and I was worried that if I asked her if she liked Chainsaw Man
she might have been weirded out. 
</p>
<p>
After the date, I kept thinking how cool it would be if I could match with someone on a dating site that also watches Chainsaw Man.
Therefore, the idea formed of a dating site where users can input not just the kind of things they like, but their specific interests, and then search for others with the same interests so they know about some things they have in common before they meet.
</p>
<p>
I'd be creating something that allowed me to show my coding skills, my interests/hobbies and also potentially create something that actually has potential to work in the real world.
</p>

