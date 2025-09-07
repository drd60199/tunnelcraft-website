<?php require 'includes/header.php'; ?>
<title>Login | TunnelCraft</title>

<main>
    <section class="contact" id="login-form">
        <div class="container">
            <h2>Login or Sign Up</h2>
            <div id="firebaseui-auth-container"></div>
        </div>
    </section>
</main>

<?php require 'includes/footer.php'; ?>

<script>
    const uiConfig = {
        callbacks: {
            signInSuccessWithAuthResult: function(authResult, redirectUrl) {
                authResult.user.getIdToken().then(function(idToken) {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = 'includes/verify-session.php';

                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = 'idToken';
                    hiddenInput.value = idToken;
                    
                    form.appendChild(hiddenInput);
                    document.body.appendChild(form);
                    form.submit();
                });
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

    const ui = new firebaseui.auth.AuthUI(firebase.auth());
    ui.start('#firebaseui-auth-container', uiConfig);
</script>