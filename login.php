<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TunnelCraft</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-auth-compat.js"></script>
    
    <script src="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.css" />
</head>
<body>
    <header>
        <div class="container">
            <nav>
                 <a href="index.php" class="logo-link">
                    <img class="logo" src="assets/images/TunnelCraftu_Logo.png" alt="TunnelCraft Logo">
                </a>
            </nav>
        </div>
    </header>

    <main>
        <section class="contact" id="login-form">
            <div class="container">
                <h2>Login or Sign Up</h2>
                <div id="firebaseui-auth-container"></div>
            </div>
        </section>
    </main>
    
<?php require_once 'config.php'; ?>

    <script>
       
        // This line uses PHP to securely insert the config from your new file
    const firebaseConfig = <?php echo json_encode($firebaseConfig); ?>;

        // 2. Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        // 3. FirebaseUI Config
        const uiConfig = {
            callbacks: {
                signInSuccessWithAuthResult: function(authResult, redirectUrl) {
                    // Get the user's ID token.
                    authResult.user.getIdToken().then(function(idToken) {
                        // Create a form to POST the token to the server
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.action = 'includes/verify-session.php'; // The PHP script to verify the token

                        const hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = 'idToken';
                        hiddenInput.value = idToken;
                        
                        form.appendChild(hiddenInput);
                        document.body.appendChild(form);
                        form.submit();
                    });
                    // Return false to prevent the default redirect.
                    return false;
                },
            },
            signInOptions: [
                firebase.auth.EmailAuthProvider.PROVIDER_ID,
                firebase.auth.GoogleAuthProvider.PROVIDER_ID,
                firebase.auth.GithubAuthProvider.PROVIDER_ID
            ],
            signInFlow: 'popup',
        };

        // 4. Initialize the FirebaseUI Widget
        const ui = new firebaseui.auth.AuthUI(firebase.auth());
        ui.start('#firebaseui-auth-container', uiConfig);
    </script>

    <?php require 'includes/footer.php'; ?>

</body>
</html>