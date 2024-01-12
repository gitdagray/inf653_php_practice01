<?php 
/* 
   Place your output code inside the HTML list items for 
   each question comment as shown with the 01 example.

   Your PHP logic can be placed underneath the questions 
   near the top of the file. See example 02.
   
   Do not change any of the other code in this file.
*/

/* EXAMPLE:  
    01: output Hello World! as string data. 
    
    To see how to complete this question, scroll down 
    to the HTML part of this file.
*/


/* 02: create a variable called name and set it equal to "Dave" 
   Output the variable 

   In this example, I'll set the variable under this question. 
   Then I will scroll down and output the variable inside the 
   HTML list item for question #2. 
*/
$name = "Dave";

/* 03: create a variable called num and set it equal to 1984
   Output the variable
*/


/* 04: create a variable called dbl and set it equal to 99.956
   Output the variable
*/


/* 05: create a variable called bool and set it equal to true
   Output the variable - might not be what you expect!
*/


/* 06: create a variable called band and set it equal to "Van Halen"
   Concatenate band and the num variable you created above to
   output the phrase:
   "1984 is my fave Van Halen album."
*/


/* 07: create an array called names.
  Put the names "Jane", "John", and "Jody" in the array
  Output "John" from the array
*/


/* 08: define a constant variable called COURSE.
   Assign COURSE the value of "INF653"
   Output the constant variable
*/


/* 09: create a variable called myNum and set it equal to 50.  
    Add 16 to the variable myNum using a compound operator _when_ 
    you output the new value
*/


/* 10: create a variable called lastNum and set it equal to 99. 
    Use the decrement operator to subtract 1 from myNum. 
    Output the new value
*/


?>
<html>

<head>
    <title>INF653 Practice 01</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mocha/8.1.1/mocha.css"
        integrity="sha512-Ytt2foRGKdIInPXwyS3gxRvfTv4n2wi7uB7neCLH1LjExT+PKBeQu6LNVB4QpHaJqx7m2btagBs4kqxYC1QNFg=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <p>
            🚨 You need to <span id="createUser">create a user</span> before you can submit your project.
        </p>
        <p>
            👉 You may need to enable pop-ups for this site if your browser blocks them.
        </p>
        <section id="newUserSection">
            <label for="newUser">
                <span class="honey">This is your User ID.</span>
                Copy, paste, and save it somewhere safe. You'll need it to submit this assignment and all future
                assignments and projects this semester! And it will NOT be available to view again.
            </label>
            <input type="text" id="newUser" />
        </section>
        <p>
            Did you:
        </p>
        <ul>
            <li>Create a User ID?</li>
            <li>Complete Your Assignment?</li>
            <li>If so, you are ready to click submit.</li>
        </ul>
        <button id="submitButton">Submit Your Assignment</button>
        <p>Your output should only be in the ordered list below.</p>
        <ol>
            <li id="1"><?php echo "Hello World!" ?></li>
            <li id="2"><?php echo $name ?></li>
            <li id="3"><?php /* #3 output here */ ?></li>
            <li id="4"><?php /* #4 output here */ ?></li>
            <li id="5"><?php /* #5 output here */ ?></li>
            <li id="6"><?php /* #6 output here */ ?></li>
            <li id="7"><?php /* #7 output here */ ?></li>
            <li id="8"><?php /* #8 output here */ ?></li>
            <li id="9"><?php /* #9 output here */ ?></li>
            <li id="10"><?php /* #10 output here */ ?></li>
        </ol>
    </main>

    <div id="mocha"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mocha/8.1.1/mocha.min.js"
        integrity="sha512-vOMXB+Rjob/NIG88cgEK+t6Uuf0zJIzQrfKH8VFc7AW18y/rzszRXaKPNAPf1ePv2hQ3eYR8yEu4S85Np3DhLA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chai/4.2.0/chai.min.js"
        integrity="sha512-x3BwhuxT44pOQZanacQyDnrB2r1L1AUfjUaefYArTHR9sHEvvy3NSnnm5Z7GAl5YPc3+GEWFT0S34obDSzUvaQ=="
        crossorigin="anonymous"></script>
    <script>
    mocha.setup("bdd");
    </script>
    <script src="https://serene-roentgen-345cd7.netlify.app/tests/inf653_php_practice01Test.min.js"></script>
    <script>
    mocha.run();
    </script>
    <script src="https://serene-roentgen-345cd7.netlify.app/util/inf653_php_signup_util.min.js"></script>
    <script src="https://serene-roentgen-345cd7.netlify.app/util/inf653_php_util.min.js"></script>

</body>

</html>