<!DOCTYPE html>
<html>
    <head>
        <title>Tasty Recipes - Logga in</title>
        <?php include_once 'resources/includes/css.html';?>
    </head>
    <body>
        <?php
            include_once 'resources/includes/logo_and_meny.php';
        ?>
        
        <div class="background">
            <h1>Logga in:</h1>
            <?php
                if(isset($status) && $status == 'success')
                {
                    echo '<p>Registreringen lyckades, vänligen logga in</p>';
                }
            ?>
            <form action="Login_form" method="POST">
                Användarnamn:<input type="text" name="username" placeholder="Användarnamn" required>
                <?php
                    if (isset($status) && $status == 'emptyfields') 
                    {
                        echo 'Fyll i användarnamn och lösenord';
                    }
                    elseif (isset($status) && $status == 'wrong') 
                    {
                        echo 'Fel användarnamn eller lösenord, försök igen';
                    }
                ?><br>
                Lösenord:<input type="password" name="password" placeholder="Lösenord" required><br>
                <input type="submit" name="login" value="Logga in">
            </form>     
        </div>
    </body>
</html>