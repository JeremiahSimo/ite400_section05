<?php
// Start the PHP block
// You can add dynamic functionality here, like form handling or database interaction

// Example: Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process form data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // You can add server-side validation or database logic here
    echo "Form submitted! Username: $username, Password: $password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        /* CSS code */
        .form_container {
            width: fit-content;
            height: fit-content;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 15px;
            padding: 50px 40px 20px 40px;
            background-color: #ffffff;
            box-shadow: 0px 106px 42px rgba(0, 0, 0, 0.01),
                0px 59px 36px rgba(0, 0, 0, 0.05), 0px 26px 26px rgba(0, 0, 0, 0.09),
                0px 7px 15px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
            border-radius: 11px;
            font-family: "Inter", sans-serif;
        }

        .logo_container {
            box-sizing: border-box;
            width: 80px;
            height: 80px;
            background: linear-gradient(180deg, rgba(248, 248, 248, 0) 50%, #F8F8F888 100%);
            border: 1px solid #F7F7F8;
            filter: drop-shadow(0px 0.5px 0.5px #EFEFEF) drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            border-radius: 11px;
        }

        .title_container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .title {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 700;
            color: #212121;
        }

        .subtitle {
            font-size: 0.725rem;
            max-width: 80%;
            text-align: center;
            line-height: 1.1rem;
            color: #8B8E98;
        }

        .input_container {
            width: 100%;
            height: fit-content;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .icon {
            width: 20px;
            position: absolute;
            z-index: 99;
            left: 12px;
            bottom: 9px;
        }

        .input_label {
            font-size: 0.75rem;
            color: #8B8E98;
            font-weight: 600;
        }

        .input_field {
            width: auto;
            height: 40px;
            padding: 0 0 0 40px;
            border-radius: 7px;
            outline: none;
            border: 1px solid #e5e5e5;
            filter: drop-shadow(0px 1px 0px #efefef)
                drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
        }

        .input_field:focus {
            border: 1px solid transparent;
            box-shadow: 0px 0px 0px 2px #242424;
            background-color: transparent;
        }

        .sign-in_btn {
            width: 100%;
            height: 40px;
            border: 0;
            background: #115DFC;
            border-radius: 7px;
            outline: none;
            color: #ffffff;
            cursor: pointer;
        }

        .sign-in_ggl {
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: #ffffff;
            border-radius: 7px;
            outline: none;
            color: #242424;
            border: 1px solid #e5e5e5;
            filter: drop-shadow(0px 1px 0px #efefef)
                drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            cursor: pointer;
        }

        .sign-in_apl {
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: #212121;
            border-radius: 7px;
            outline: none;
            color: #ffffff;
            border: 1px solid #e5e5e5;
            filter: drop-shadow(0px 1px 0px #efefef)
                drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            cursor: pointer;
        }

        .separator {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            color: #8B8E98;
        }

        .separator .line {
            display: block;
            width: 100%;
            height: 1px;
            border: 0;
            background-color: #e8e8e8;
        }

        .note {
            font-size: 0.75rem;
            color: #8B8E98;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form_container">
        <div class="logo_container">
            <!-- Logo can be added here, if necessary -->
        </div>
        <div class="title_container">
            <h2 class="title">Sign In</h2>
            <p class="subtitle">Enter your details to sign in</p>
        </div>

        <form method="POST">
            <div class="input_container">
                <label for="username" class="input_label">Username</label>
                <input type="text" id="username" name="username" class="input_field" required />
            </div>

            <div class="input_container">
                <label for="password" class="input_label">Password</label>
                <input type="password" id="password" name="password" class="input_field" required />
            </div>

            <button type="submit" class="sign-in_btn">Sign In</button>
        </form>

        <div class="separator">
            <span class="line"></span>
            <span>or</span>
            <span class="line"></span>
        </div>

        <button class="sign-in_ggl">
            <span>Sign In with Google</span>
        </button>
        <button class="sign-in_apl">
            <span>Sign In with Apple</span>
        </button>

        <p class="note">Forgot your password?</p>
    </div>
</body>
</html>
