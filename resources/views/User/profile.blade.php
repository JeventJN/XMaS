<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile-User</title>
    <link rel="stylesheet" href="{{ asset('css/profileuser.css') }}">
</head>
<body>
    <div class="batas">
        <div class="boxfotoprofile">
            <div class="boxluarfoto">

            </div>
            <div class="boxluarprofile">
                <div class="boxidentitastempatsampah">
                    <div class="boxidentitas">
                        <div class="formidentitas">Nama</div>
                        <div class="formidentitas">NIP</div>
                        <div class="formidentitas">Phone</div>
                    </div>
                    <div class="titikdua">
                        :<br>
                        :<br>
                        :
                    </div>
                    <div class="isiidentitas">
                        <div class="identitasnama">Vanessa Kwandinata</div>
                        <div class="identitasNIP">0398</div>
                        <div class="identitasphone">+62895635863956</div>
                    </div>
                    <div class="boxtempatsampah">
                        <img class="icontempatsampah" src="{{ asset('Assets/Profile assets/tempatsampah.png') }}" alt="">
                    </div>
                </div>
                <div class="spasi"></div>
                <div class="boxtombol">
                    <button type="button" class="request">Request Leader Access</button>
                    <button type="button" class="logout">Logout</button>
                </div>
            </div>
        </div>

        <div class="boxstatus">
            <div class="boxstatus1">
                <div class="boxstatus2">
                    <div class="boxstatus3">
                        Member
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
