<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job</title>
    <style>
        body {
            margin: 0;
            background: #343434;
            font-family: Helvetica, Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        td {
            padding: 0;
        }

        .outer-table {
            width: 600px;
        }

        .main-container {
            width: 560px;
        }

        .is-white-bg {
            background: #fff;
        }

        .is-gold {
            color: #C49859;
        }

        .is-gold-bg {
            background-color: #C49859;
        }

        h1, h2, h3, h4, h5, h6, p {
            color: #444;
        }

        p {
            line-height: 2;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .tiny-text {
            font-size: 11px;
            line-height: 1.6;
        }

        img {
            display: block;
            border: 0;
            line-height: 0px;
            font-size: 0px;
            margin: 0;
            padding: 0;
        }

        a {
            color: black;
            text-decoration: none;
        }

        .footer {
            color: #999;
            font-weight: lighter;
            font-size: 13px;
        }

        .spacer {
            height: 10px;
            width: 100%;
            background-color: #eeeeee;
        }

        .content {
            width: 478px;
            border: 1px solid #eeeeee;
            margin: 0 auto;
        }

        .content td {
            padding: 5px 20px;
            text-align: center;
        }

        .footer-content {
            text-align: center;
            font-size: 14px;
            color: #000;
            font-family: Arial, sans-serif;
            font-weight: normal;
            line-height: 20px;
        }
    </style>
</head>
<body>
    <center>
        <table class="outer-table" style="border: 1px solid #000;">
            <tr>
                <td bgcolor="white">
                    <!-- Spacer -->
                    <div class="spacer"></div>

                    <!-- Header -->
                    <table width="100%" valign="top" bgcolor="#eeeeee">
                        <tr>
                            <td width="30"></td>
                            <td width="140">
                                <img src="{{ env('LINKS') }}/uploads/about/2137128716.svg" alt="" width="140">
                            </td>
                            <td></td>
                            <td width="150" align="right" class="view-in-browser">
                                <a href="#"></a>
                            </td>
                            <td width="30"></td>
                        </tr>
                    </table>

                    <!-- Spacer -->
                    <div class="spacer"></div>

                    <!-- Spacer -->
                    <table class="spacer">
                        <tr>
                            <td></td>
                        </tr>
                    </table>

                    <!-- Main Content -->
                    <table width="100%">
                        <tr>
                            <td width="60">&nbsp;</td>
                            <td class="content">
                                <table width="100%">
                                    <tr>
                                        <td>Name: {{$name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email: {{$email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Post: {{$job}}</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile: {{$phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Message: {{ is_string($message) ? $message : '' }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="60">&nbsp;</td>
                        </tr>
                    </table>

                    <!-- Spacer -->
                    <table class="spacer">
                        <tr>
                            <td></td>
                        </tr>
                    </table>

                    <!-- Footer -->
                 
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
