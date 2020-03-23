

    <div class="login-form">
        <h1 name="titleSite">WELCOME TO MY SCHOOL</h1>
        <form class="form" action="php/controller/loginControl.php" method="POST">
            <select class="user" name="user" id="user">
                <option value="admin">admin</option>
                <option value="teachers">teachers</option>
                <option value="students">students</option>
            </select><br>
                <p>Email</p>
                <input type="mail" name="loginMail" id="loginMail" required placeholder="Enter your email..."><br>
                <p>Password</p>
                <input type="password" name="password" id="password" required placeholder="Enter your password..."><br>
                <input type="submit" name="sign" value="Sign in">
        </form>
    </div>