function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId());
    console.log("Name: " + profile.getName());
    console.log("Email: " + profile.getEmail());

    var id_token = googleUser.getAuthResponse().id_token;

    fetch('/login/google', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id_token: id_token })
    })
    .then(response => response.json())
    .then(data => console.log('Logged in successfully'))
    .catch(error => console.error('Error:', error));
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      if (response.status === 'connected') {
        var userID = response.authResponse.userID;
        var accessToken = response.authResponse.accessToken;

        fetch('/login/facebook', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ userID: userID, accessToken: accessToken })
        });
      }
    });
  }