<!DOCTYPE html>
<html>
 
<head>
    <title>Login</title>
    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">
</head>
 
<body>
    <div class="main">
        <form action="/login" method="POST">
            @csrf
            <label for="email">
                  Email:
              </label>
            <input type="text"
                   id="email"
                   name="email"
                   placeholder="Enter your email" required>
 
            <label for="password">
                  Password:
              </label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="Enter your Password" required>
 
            <div class="wrap">
                <button type="submit"
                        onclick="solve()">
                    Submit
                </button>
            </div>
        </form>
        <p>Not registered? 
              <a href="#"
               style="text-decoration: none;">
                Create an account
            </a>
        </p>
    </div>
</body>
 
</html>