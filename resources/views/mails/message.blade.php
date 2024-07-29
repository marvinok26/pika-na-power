<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        body,
        p {
            font-family: 'Montserrat', sans-serif;
        }

        p {
            line-height: 1.8em;
            font-size: 14px;
        }

    </style>
</head>

<body>
    <table style=" width:100%;background:#F3F3F3;font-family: 'Montserrat', sans-serif;" cellpadding="10">
        <tr>
            <td align="center"><img src="{{ asset('images/logo.svg') }}" alt="PikaNaPower"
                    style="width:150px;" /></td>
        </tr>
    </table>
    <table style="width:100%;background:#F3F3F3;" cellpadding="10">
        <tr>
            <td>
                <table align="center" style="width:650px;background:#fff;font-family:'Calibri';padding: 10px 20px;">
                    <tr>
                        <td>
                            <table rules="all" style="width:100%;" cellpadding="5" align="center">
                                <tr>
                                    <td>
                                        <p align="justify">Hi,</p>
                                        <p align="justify">
                                            You are receiving this email because a new enquiry has been submitted on the website. 
                                            <p>
                                                <br>
                                                Name: {{ $name }}
                                                <br>
                                                Phone: {{ $phone }}
												<br>
												Email: {{ $email }}
                                            </p>
											<p>
												<br>
												Preferred mode of comms is via {{ $preferred }}.
											</p>
                                            <p>
                                                <br>
                                                Message: {{ $content }}
                                            </p>
                                            <p>
                                                <br>
                                                Thank you.
                                            </p>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
