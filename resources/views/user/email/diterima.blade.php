<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <table width="100%" height="100%" bgcolor="#f73911" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td width="100%" align="center" valign="top" bgcolor="#f73911"
                    style="background-color:#f73911; min-height: 200px;">
                    <table>
                        <tbody>
                            <tr>
                                <td class="table-td-wrap" align="center" width="600">
                                    <table class="table-row"
                                        style="table-layout: auto; padding-right: 24px; padding-left: 24px; width: 580px; background-color: transparent;"
                                        bgcolor="transparent" width="580" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                        </tbody>
                                    </table>


                                    <table class="table-space" height="16"
                                        style="height: 16px; font-size: 0px; line-height: 0; width: 580px; background-color: #ffffff;"
                                        width="580" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td class="table-space-td" valign="middle" height="16"
                                                    style="height: 16px; width: 580px; background-color: #ffffff;"
                                                    width="580" bgcolor="#FFFFFF" align="left">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table-row" width="580" bgcolor="#FFFFFF"
                                        style="table-layout: fixed; background-color: #ffffff;" cellspacing="0"
                                        cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td class="table-row-td"
                                                    style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 24px; padding-right: 24px;"
                                                    valign="top" align="left">
                                                    <table class="table-col" align="left" width="532" cellspacing="0"
                                                        cellpadding="0" border="0" style="table-layout: fixed;">
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-col-td" width="532"
                                                                    style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;"
                                                                    valign="top" align="left">
                                                                    <div
                                                                        style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; text-align: center;">
                                                                        <img src="{{asset($data['posting']->path)}}"
                                                                            style="border: 0px none #444444; vertical-align: middle; display: block; padding-bottom: 9px;"
                                                                            hspace="0" vspace="0" border="0">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table-row" width="580" bgcolor="#FFFFFF"
                                        style="table-layout: fixed; background-color: #ffffff;" cellspacing="0"
                                        cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td class="table-row-td"
                                                    style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;"
                                                    valign="top" align="left">
                                                    <table class="table-col" align="left" width="508" cellspacing="0"
                                                        cellpadding="0" border="0" style="table-layout: fixed;">
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-col-td" width="508"
                                                                    style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;"
                                                                    valign="top" align="left">
                                                                    <table class="header-row" width="508"
                                                                        cellspacing="0" cellpadding="0" border="0"
                                                                        style="table-layout: fixed;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="header-row-td" width="508"
                                                                                    style="font-size: 28px; margin: 0px; font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: red; padding-bottom: 10px; padding-top: 15px;"
                                                                                    valign="top" align="left">Hi,
                                                                                    {{$data['receiver']->name}}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div
                                                                        style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px;">
                                                                        Permintaan Anda untuk mengadopsi hewan
                                                                        {{$data['posting']->title}} pada kategori
                                                                        {{$data['posting']->categry}} telah
                                                                        disetujui oleh pemiliki hewan. silahkan
                                                                        menghubungi pemilik hewan untuk aktifitas
                                                                        selanjutnya.
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table-space" height="12"
                                        style="height: 12px; font-size: 0px; line-height: 0; width: 580px; background-color: #ffffff;"
                                        width="580" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td class="table-space-td" valign="middle" height="12"
                                                    style="height: 12px; width: 580px; background-color: #ffffff;"
                                                    width="580" bgcolor="#FFFFFF" align="left">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                    <table class="table-space" height="12"
                                        style="height: 12px; font-size: 0px; line-height: 0; width: 580px; background-color: red"
                                        width="580" bgcolor="#f73911" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td class="table-space-td" valign="middle" height="12"
                                                    style="height: 12px; width: 580px; background-color: red"
                                                    width="580" bgcolor="#f73911" align="left">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table-row" width="580" bgcolor="transparent"
                                        style="table-layout: fixed; background-color: transparent;" cellspacing="0"
                                        cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td class="table-row-td" height="45px" bgcolor="transparent"
                                                    style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; height: 45px; padding-left: 24px; padding-right: 24px; background-color: transparent;"
                                                    valign="top" align="left">
                                                    <table class="table-col" align="left" width="532" cellspacing="0"
                                                        cellpadding="0" border="0" style="table-layout: fixed;">
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
