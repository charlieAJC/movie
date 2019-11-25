<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/login.css">

    <script src="js/register.js"></script>
</head>
<body>
<div class="test">
    <div class="test2">
        <div class="col-md-6 login-form-2">
            <h3>註冊</h3>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" id="account" placeholder="帳號(須為3碼以上的英文或數字)" value="" />
                <p id="accEr" class="errorMsg"></p>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="密碼(須為3碼以上的英文或數字)" value="" />
                <p id="pwEr" class="errorMsg"></p>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password2" placeholder="確認密碼" value="" />
                <p id="pw2Er" class="errorMsg"></p>
            </div>
            <div class="form-group">
                <input type="button" class="btnSubmit pull-left" id="Register" value="註冊"/>
                <input type="button" class="btnSubmit" onclick="location.href='login.php'" value="前往登入頁" />
            </div>
        </div>
    </div>
</div>
</body>
</html>