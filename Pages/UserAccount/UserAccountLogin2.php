<!DOCTYPE html>
<html lang="en">
    <?php
        // We need to use sessions, so you should always start sessions using the below code.
        session_start();
        // If the user is not logged in redirect to the login page...
        if (!isset($_SESSION['loggedin'])) {
            header('Location: ../../home.html');
            exit;
        }
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>What2DoSTL: My Account</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Themes/style.css">
        <link rel="stylesheet" href="../Themes/loginPrompt.css">
        <script src="script.js"></script>
        <script type="text/javascript" src="../JS/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../JS/mustache.js"></script>
        <script type="text/javascript" src="../JS/HomeData.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-static-top" role="navigation" aria-label="Primary">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand">What2DoSTL</div>
                    <nav>
                        <ul>
                            <li><a href="../../App/logout.php">Logout</a>
                            <li><a href="../Guest/Guest.html">Guest</a>	
                        </ul>  
                    </nav>
                </div>
            </div>
        </div>
        <section id="pageContent" aria-label="Prefrence Choices" class="useraccount">
            <p>Welcome back, <?=$_SESSION['name']?>!</p><br><br>
            <form action="../../App/preferenceQueryLoggedIn.php" method="post">
                <fieldset>
                    <legend>Choose your preferences:</legend>
                    <script id="Pref_template" type="x-tmpl-mustache">
                        {{#choices}}
                            <div>
                                <input type="checkbox" id="{{input_id}}" name="formPreferences[]" value="{{input_id}}">
                                <label for="{{input_id}}">{{input_label}}</label>
                            </div>
                        {{/choices}}
                    </script>
                    <div role="preferences" id="preferences" class="preferences"></div>
                </fieldset>
                <fieldset class="userinfo">
                    <label for="date">Projected Date:</label>
                    <input type="date" id="date" name="date"><br><br>
                    <label for="budget">Budget:</label>
                    <input type="integer" id="budget" name="budget"><br><br>
                    <button type="submit" class="prefButton">Continue</button>
                </fieldset>
            </form>
        </section>
        <footer>
            <p>&copy; 2020, Edited by Marvin Johnson </p>
        </footer>
    </body>

</html>