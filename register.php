<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>Micro Blog</title>

    <link href='http://fonts.googleapis.com/css?family=Metrophobic|Droid+Sans:400,700|Droid+Sans+Mono|Open+Sans:400italic,700italic,800italic,300italic,600italic,400,300,600,700,800|Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href="styles/default.css" rel="stylesheet" />

</head>

<body>
<div id="wrapper">
    <header>
        <img id="logo" src="images/Blogging.jpg" alt="Micro blog Logo" />
        <h1>Micro Blog</h1>
        <hgroup id="accountHeader">
            <h5>Welcome user!<h5>
                    <h5>Log Out<h5>
        </hgroup>

    </header>

    <section id="feature_area">
        <article>
            <div class="inner" id="login">
                <h3>Registration</h3><br />
                <form id="siginform" action ="index.php" method="post">
                    <fieldset>
                        <p class="note">* indicates required field</p>
                        <section id="firstname">
                            <label for="firstname">First Name<span> *</span></label>
                            <input type="text" name="firstname" />
                        </section>
                        <section id="lastname">
                            <label for="lastname" >Last Name<span> *</span></label>
                            <input type="text" name="lastname" />
                        </section>
                        <section id="email">
                            <label for="email" >Email<span> *</span></label>
                            <input type="text" name="email" />
                        </section>
                        <section id="password">
                            <label for="password">Password<span> *</span></label>
                            <input type="password" name="password" maxlength="20" />

                        </section>
                        <section>
                            <input type="submit" value="Submit" />
                        </section>
                    </fieldset>
                </form>
            </div>
        </article>

    </section>

    <footer>
        <p>Copyright, All rights reserved.</p>
    </footer>
</div>

</body>
</html>
