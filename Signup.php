<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Signup</title>
</head>

<body>
    <!--Signup-->
    <div class="login-wrapper d-flex justify-content-center align-items-center vh-100">
        <div class="container login-container d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Signup</h1>
                <!--Signup Form-->
                <form id="signupForm">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm your password" required>
                    </div>
                    <!--Signup Button-->
                    <button type="submit" class="btn login-btn mt-3 w-100">Signup</button>
                    <!--Login Link-->
                    <div class="signup-link mt-3 text-center">
                        Already have an Account? <a href="Login.html">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('signupForm').addEventListener('submit', async function (e) {
            e.preventDefault();  // Prevent the default form submission

            // Get form values
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const confirm_password = document.getElementById('confirm_password').value;

            // Prepare data to send to the backend
            const data = {
                username: username,
                password: password,
                confirm_password: confirm_password
            };

            try {
                const response = await fetch('/http://localhost:5000/signup', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok) {
                    alert(result.message);  // Show success message
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
