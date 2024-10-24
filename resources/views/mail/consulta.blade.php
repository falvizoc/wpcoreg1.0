<!doctype html>
<html lang="es">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Has recibido un nueva consulta en tu web!</title>
    <meta name="description" content="Has recibido un nueva consulta en tu web!">
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #d7daee;" leftmargin="0">
    <!-- 100% body table -->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:30px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <div>
                                <a href="{{ route('home.index') }}">
                                    <img class="h-10 w-auto object-cover object-center cursor-pointer" style="height: 56px;" src="{{ asset('img/logo/inktinerante-logo-negro.png') }}" alt="">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h1 style="color:#3d4852; font-weight:600; margin:0;font-size:18px;font-family:'Rubik',sans-serif;text-align:left!important;">
                                            ¡Nueva Consulta!
                                        </h1>

                                        <span
                                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #eaeaea; width:100%;">
                                        </span>

                                        <p
                                            style="color:#455056; font-size:15px;line-height:20px; margin:0; font-weight: 500;text-align:left!important;">
                                            <strong
                                                style="display: block;font-size: 13px; margin: 0 0 4px; color:rgba(0,0,0,.64); font-weight:normal;">Nombre del usuario</strong>{{ $consulta['nombre'] }}, {{ $consulta['apellido'] }}
                                            <strong
                                                style="display: block; font-size: 13px; margin: 16px 0 4px 0; font-weight:normal; color:rgba(0,0,0,.64);">Email</strong>{{ $consulta['email'] }}
                                            <strong
                                                style="display: block; font-size: 13px; margin: 16px 0 4px 0; font-weight:normal; color:rgba(0,0,0,.64);">Whatsapp</strong>{{ $consulta['telefono'] }}
                                        </p>

                                        <div style="background: #f2f3f8;border-left: #2d3748 solid 4px;margin: 20px 0 0;">
                                            <p style="font-size:15px; color:#455056; margin:8px 0 0; line-height:24px;padding: 10px;text-align:left!important;">
                                                {{ $consulta['detalle'] }}
                                            </p>
                                        </div>

                                        <span
                                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #eaeaea; width:100%;">
                                        </span>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:11px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">
                                © {{ date('Y') }} COREG - Todos los derechos reservados
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:30px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>
