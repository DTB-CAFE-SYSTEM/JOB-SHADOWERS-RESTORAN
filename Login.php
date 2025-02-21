 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>

<body>
    <!--Login-->
    <div class="login-wrapper d-flex justify-content-center align-items-center vh-100">
        <div class="container login-container d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Login</h1>
                <!--Login Form-->
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="signup-link mt-3 text-center">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <!--Login Button-->
                    <button type="submit" class="btn login-btn mt-3 w-100">Login</button>
                    <!--Signup Link-->
                    <div class="signup-link mt-3 text-center">
                        Don't have an Account? <a href="Signup.html">Signup</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', async function (e) {
            e.preventDefault();  // Prevent the form from reloading the page

            // Get form values
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Prepare the data to send to the backend
            const data = {
                username: username,
                password: password
            };

            try {
                const response = await fetch('/http://localhost:5000/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok) {
                    alert(result.message);  // Show success message
                    // You can redirect to another page or dashboard here
                    window.location.href = "menu.html";
                } else {
                    alert(result.error);  // Show error message
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>

