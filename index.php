<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http.equiv="X-UA-Compatible" "content = "IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="follow">

		<title>PHP Registration System</title>

		<base href=*/* />

		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.10/dist/css/uikit.min.css" />
	</head>

	<body>

		<div class="uk-section uk-container">
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
				<form>
    				<fieldset class="uk-fieldset js.login">

        				<legend class="uk-legend">Create an account</legend>

       					<div class="uk-margin">
            				<input class="uk-input" type="email" required='required' placeholder="Email">
        				</div>

        				<div class="uk-margin">
            				<input class="uk-input" type="password" required='required' placeholder="Password">
        				</div>

        				<div class="uk-margin">
        					<button class="uk-button uk-button-default" type="submit">Login</button>
        				</div>

    				</fieldset>
				</form>
			</div>
		</div>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- UIkit JS -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.10/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.10/dist/js/uikit-icons.min.js"></script>

	</body>
	</html>