<?php
require_once('../database/db.php'); #On connecte à la base
?>

<!DOCTYPE html>
<html lang="fr" class="height">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bienvenue sur mon site CV. Retrouvez toutes les informations me concernant, Manon JULIEN KUENTZ"/>
    <meta name="keywords" content="Accueil, Développement, Etudiante, Portfolio, Web, Informatique, Présentation"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Manon JULIEN KUENTZ - Blog</title>
</head>
<body class="height">

<header>
    <?php
    include('components/nav.php');
    ?>
</header>

<main>

    <div class="card-columns">
        <div class="card click" onclick="window.location.href='gamned.php';">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAawAAAB2CAMAAACjxFdjAAAAmVBMVEX////KNUHKMz/JLjv++/vIKDbJLTrIKTfIJTTHHy/IJDP88/TGFSj019n56er9+Pj77/D13d/45ufNQ07y0dP12tzvx8rxzM/QU1zMPkntwMPLOUTcgonjnaLWZ3Dmp6vosLTSW2Tsub3fi5HYb3fZd37OTVbhlpvORlHdhozWaXHps7fjm6DgkZfTWWPbfIPFAB3EABPDAAnuXW8TAAAgAElEQVR4nO1dB7urOM4G0yHUEAgQakhvd/b//7jPMpDYBnLOLTPz7bPRs3snJ6EYy5JeFQtB+GWyLfIf59ev8KG/jVwhkp9/yNTXDH1492+TB/9UdgqMuWKBcvxAEALBIYxyreEw1xHk4F8a4od6kleCG3iCTRiDuXHzA2cV+cAvzMgXs+Thk/fvjPNDQKDbbF+23JjwAQuUZzuyEHRmi6jEThs2sgt/fZj175CMGeXJ+H+O4DfuNtjeBN8S5EeABUtw4ghz0BLcqjNVWO78f3e4/9skHxyQoDxuhNSyw8epKH0vak+OX4Z+erNDIS2E20p23U62OjMW/6tj/l8m1xPkNNhWJ/+2uuzvRZ5X+SZflo2vPIrSrUI3z13BD3ysAjHTsA5Mw397zP+DZMlCFOKJb3zn4R5u8bZZnqLzermuN2txvTwl+2ZTlafKfqSeJ5RbR7B8L8Amy/pYrX+YPNd3BTdswqjxQyvMH+1NfazXKkqSR5Kh5FGadX08GofNttw0sRflET7r7GLT5VlfXv1Df5RSIh5uedncIzndntp2nSWoRmiNWSWKGZIyhJB436DseD+0+XYdPVYemKu4sjyM9z/K8J8jQHiWFVwfl7L0S/O8RiJCWSaKwCJC+LMIXx6PGSrUto3LNLQxe0tgkyV8xOsfI8dysZvrbpZrPW+TLBF7Dk0QAiZKdXna57eirCrfw8rQl7++x4f+ALkr+DdMrVVwLTfXg3kExUckaZ6QJC33ydm/3bw0kHuXy3Lf3+lDv01+SGJJlpWWdVu1ipjNixUnY/ttXeS70l81ER3v/dDfS7KQ29FuLSpS8j1OEUqSY9GcbufTowG7BSCl+fDsb6Zg5TqHTfLYL78pVE/ZQvnjttgXm2qFIQrWh8InEv/3kmUJW9cvl0hCP8crIEkVT3XsR4dGcBpL/oDCv5l834uq4vjzjCLClSXJ+uzIh3DlyZ77q0rwl0/8nyO5DDfqr/EKKMOOchUuBd+KfnUEq+O++gjlN8hKvVvRSr/MKxAvqW3tNLZsy3dtL/R+VkxKVUKaev2kXN6SU8nu9bKR6t/iFUhXFjuxLXi5jX2t9OdQhrvRQKyRnjw+zvUMAdC2/JWVVrW0/3Ul2InWUr9dNidBloXYHhXWfDGOQu/vjlRzl/5NT/vfTW7/TxzdpTfRpe/SvlhWTlDGQnURiIPsf9MGrUSVYrpkJJdPymVEluuQ3Pym/n1OgRpcSw8/fqwgaeL4IB/f02gxHy9B2v7wD9S4uY79s4vC8q+3v2Us3yTZOxl/gleYWUhMlu0hkPMTubL7PcFqJlw7pGen1Zdn+tGYpUFZfeuuXnM4Z4b9rWOf9zvU5mL7U6f8UXLD0+0X/OA5QnflUtk/ldk6KJO3R9qiSOck0wnTcrc3FgZ7Iz89ZQt98RUHvPCySxamJqElA4PeYiI5viULjILMy5dPxN1t5fwxyOQ36e9CC3qK98erF4YNBN+/p8iu5uzdtf1INL1gVW3P+wQpioowvaTPiW/3TANMKZ3nJ8cK4lu9RHrnUqL9c4xyUNbZLLe8cLOXCF4VjZ+DuUG+zJb7elOGwW87kZEQHYvvMEH9LrBvj0XolYIvyO53uJXP80rUTtzB8m0tGiARvS5AWW9zVvluaWrDt9KsYHuFaGiviBqq+wn0ylbUpdH9enJO+9fFxSkzhxGwLMvuyl5FTdPkeX44bUr8fbBd6rCmkKqbWb29fMmvCzk7z2+n04YCxf2aDN1W+5pV+j7dLr7FLrTeRNtVagkuuddXBvz2hleiwU96abAaG2VkPYTSQpGoH6Ri7nYnnTlfOsOXQVUYOpyPjGmXvFkg6tqDTxJVVXU9bbdFUdRJsjQWi4WBydR1RVE0BQ8t3i2015lIUvVFnb+1EP4PcjY+X9UMqr6PqApLaO9fp64kCYxqfJ82LhyzkuT4CK1LIJBi3S90xkF/c0m05hZiyLsXaEm+L03ua3PGakUSewH1IcjVHSnDMlTbSQV6ohwLrQeDdqHouq5hkiSQdP45pDK6a6rIE9KkfT4fpan015FHbqG7fvq1f4WUulsN1hV9Q7iyJLkG0QUiGPJzUcxQ+U6unvMykLzkb48S8sOB1w3qDGLbcxfAd3CQRC/+yWpVOr6tV2TibuIXgdTsrknTwAkp4iOamRVqWXRS/6RAWMnV8av0lWTcnlf26++AfLS7h3EguF0BzRtFWL1/YF4LPpTRndb8I/bfS5N3rTgJFJVSsJnFKq2nzlvQgwLzcTm+0wgwAPROBpBqrpupG1kU1NNz6gePBJqu6AtmKWtmyprjSBfyCyjL9DTf5xhHQyLyDSaMNPTuSr3YPKk0RoPrjdM4As086UD+aKmbkRCzX2oTwDyibowMrAHXbxUCGfpXUQakLy9j6XJeawDplLL0sCSGh0uL3qbwkbLj7IZ14nShdE54S6JehDwNQy9461/4/OJTdmv6G+3KHB5PrNWOWfJ4ZtB6QrR2IySFAUXKiis6jsdcUoeg2t2KXxoD5VqNtMBoiEoxwhrNS/TRnZr4EH+2HusvpFkvx88cMgsLqU604LnVVts2isq37qN155SXsvNph48D4C6/JIDUDfzkTTyFMk6rpbwgYyBiCaXOfmdUoxMf1ECl3fJrmCXd5Yv+1UGQYD9wd6L0ucaYXbcq7dt7Hagm0zizzF7PDfMV8bZHW9snz5flMCLLY7I8reXWnlYIKxpToTt7+JSDoRLHyJ94CunO388d23u0tIQNt2TQkdfbFoUvUHb7jqODBfYbzIKEEAMMaRVhUl4W9uLSm755G7tQ73P2Jtg8lSvxBlJORUlFFFu268pBV484wayce2hp7QghDQBYs8Oj84665WdPKEgk8fj4NJ5lrNOEkQpV+EBtQJus/XWSWagjSQUysTqKJ8c7Ikmk00EBteoMSgt6WKd7t7EfQI/6/AbIpcshhkD+rFiUqFaPg3e1ZGHWo/A5WInUFaOysUNCnxtOhy8VoqXDKfugcRAjnMBv6k4Qxrox4ZYo5fuIUnthbgaxCQ1cWBX7Wsd7vXlg2srfZha2XJShiSkva4ClFniqsp3a5zeWEpmbt/Cgl8nBqFUsQNqd9+W2squhHwNP1lri7gYrLKcmQqL9U2vGce+cnmZqYlDmvrshIcxQbzH6VtmwY91RS1opabQhqsqy3m3LSxqvOA5zzDJ1ddrrEtHixa3D69rKc62Rx/CsYjN5encNjRsyR2n3BK+wdcnYXWlfevnV96A7wxTPb5xK73QPbT86PnQktzMqoFsqI5+YkMHkm29T0qdUQjrBaDZUy8AXw97SaKOdrchimWU21alYGtqUfqBA3KuwAiEWLdj24TIvWfzy4qnoTgVFMjn/etUcisCKsEWbCArwVkbtAm4FNR6D0sH5nE7p0hW7SVaqD/qGk+tajxhYPnmmsKKkGq9N2qfTeDQ3wyyE8MO4QXhYZ8p4yl+MeeE0dKQ1El4QbTIfFTRm4s/Ph++1h0Eh5AM9Z4ad6o3grWJhKkx355Rgb58o2IUX7ZNGYJO6C/w+7X8gRAnIlBLEvF6NwCA5U6HHTMueurPom+nzZXcss/bDyguq2hgNBYkdZ1avhUM/PiavrmehIFK/kKvhGRnPLaJ9R8m+3qo8OQVe442KZ1IuFjHk8ygtob3CMQHtYbFD7gJSM7x8qX3hMA2kDdktprjIRO1pudVLixoBr6toanTmetQErNoRpul9KsqRNofHh9yL4KTndTvHLG03unnMeMdBL5MKDbmYCJ1U+Lu0bQ4HEsZgpYufocEncl66ioJkMl0ix42YMMsaPXx/7H64hD2NJRFiF8LrB4myd/S5hs/g+ON8ToFxitm1L1f8cJBCLrR92t6X4+GQThZhfJmLiKj1yC+KfzCBx2s/lAWFgTx2zsyDY9uC5QvWKMIcsYKFUM9L+4Uo1ZcauJrMVRl1QJhlzzFrCKHL92nbLNXYg5g+dfm8/YrWFxqjFNFU1NdzgthjQ1R84EwI+XC4AsbPfbl8z6RoNwQ38puZWBNKRrxKTdreP316Jop/ZXmfGW3YCFU+zpHInGCZg5m2HqLeL7qXNWjo6dTOwphZ6dyiGxK/k0hQJAt+FIcfxvRcm3SQD59wZbwLy/ftMIyiyzV/tO1xn0Hy0VCxnDC+s8mH2FMO75BQpvXC02xyyLK8fCaIj9AIvqUYitMMvPQj0ShtwQfopN26DQMINK04M8zFuekkm1OuVbBArzjsitZTEFIZM2s2Zoo0sk7subQO9g62M8Ej9Kz+oE0Wfl76T5TskyUWYNPUFUWVhmID4oY8GLQ1sm0PFtcghNVe/FqWBjNlgXe6hMXkQ4yzC7GJWDTbTxhaUuLGB8PQMdvUZRRao8ZpHNJmY8Vu/DAVqhhizxgsX2CYhTRQoKybxfASFpNLIUH2gZVYmMQXQGY/KpcG7pnPBvj7IBP34EnAm+XFyBlb8eFjmw4JIIPRbZeouu4nRzkGFylemXRQ5GlzmMAwbxcyjHNl3/djmfO0LDZqjST+flbV/jUgkh1tMRahwDELuCfv6Dsj+nfiBZ6oGE5Gb5JG2UqeB8TLzhyHNKBYM9G7GSL2hw7+ApDhyeGADazY13NwSWLBq+rJTSPPeqEnkXJZkxbkXoaRSoE8e4yfs+TWxhjMNGwkpmE1jzaRhJGHM+j8BVIrYYpZLqN/zQt1eVjktHnQb8wcHh2f9TRpIelXIi22mA3TzjV7DZhAh7a0nNNEmMUJuZnSdkSpWF6ld2U/lXZU+BwUQemQH3190/OF8R5GmXXM9qKEFniwY8uh+MWaCaI0OFY9PzHhW6WbPYZZUDZo0fOHL0evfbOi1Zi6C+klhWrOfEotnQwhlQGMOjNt4fJlfLaLatACyTo4HfHhTKwGXwsHO6nshISH45TzoXICiOUZRsuA1G2vmmhjY40zcmi9T6I0LWGkwevuLqt5VHbVyeHlkR16dln01Gp9YHcEMAI6FCvVjFVBd8qSo8Ri5lracWBQr2isQoKjdDYb4hBzgOR5DNLI4qND0kgdBTo8bosphFhfkQLKcYBGj9juRFPqerTO5S4VTkNJZ7gRE72bCBGg4/FcVbklpBYlLRbr2VA5Ns+vzomkqEjbE966BR0z3feXGDEroiccr2smgEQtSKSn7G9Y0bHBJj20KFOCTJ9Nj4BrOzlpXSpL00zDyJJO/mkTg5JRoogPTINxfeXbWDSHQYNgT913hAT7oD2dthx8aVoTW1MuGyrWJ9/PXQiZvMhmmNVXaQpuUD7Wqt7XykqodKH+k37goU56xCx6EYt6M8rTDwSScmfMW8NGFWFSD7RXtWNDy/pFcBk1ChxSTFXKkuW+brfXS7zyA2IaHEZZ80lr+cq74gDVX2Mxuf1pgRAk4/YxWFGwh0WddsO46fXdsPhoJ2sq0YDn/JheVjm3kZEJmmG7h+9oV4+loau0FJi1V1GaldIkI2bR1hKidXNBCdViQ0dQLcMk4SDQ6Szpm4YefcLCEkIavWhJXdzyJo1Xoyp2Bm7xRdnujp8tqcbfPhUu9hDow/G1fbkdP5DOedrDWBHKn8MZtA5aUvBieocrSo63S2BbMQ0wK4ZZWLXIiqmMoaRE116K6s3xbTuM46pMeGYxGgd7ft5kIBDB2nJpPmIE4TCZR6J9aNGS6kqj/2L873dRXFa6TdZk+Ufe7iEFXGK1KwvQ9EVBL2+5BJs1AQlEznl7qlGkrPvdN/Lg0tLrZTrpjpZ1Fe8wgmISdKwLCwA5Xk/lo7goxzFDSDFMnR01ZhYTOQEg5E6W7BH30WbyFmuXDVIS0OYwN6BxAPxM4Qs248RRwZgs2nVxDqNCNkS8l0u239fFbnOtGgY3+A42JOlYGBQ+3kgNXNILIpxDGSLjZE3UopDZON8q71bG8FTPAdxGzIINxVPnM9eaqCYXidnxmXgUILixFzH4uEyUBdtc1rx1MZ4NPT56HUgxU300v/kBE7NLgooyeHkyLgUxCZ7wgtluqG58Gj08Y5kwyWzGTlo8/NfaokskvJngW3aUULySoY76tQpZyepqyYTdd7Y8TBD2HhhpIRHTqeRvl+PnQ+EMEEc6GaQ/kx0DPO1Sw5yqqIS58OM0Z3JPzyiul54XE+rMfExeqGNT92+QKxmHMKSC1YKjokgt28SDfTco8zaHvxJx+QgtKw1C7yXZrM0acgEHMkU/zTG9Yq9HSo6jMdrpqw8YmcPnMjEcrBbJQTNVRGDRKFcXKczKdi0niMtte98nksmk7pHkQotov2yPU1vc0LMwQpYty3GCwKZMnCVjz9OK85vIw0G+omCMGpA6rAyUvWRlErfDMQnaPx7NKoSi+tcSYKYSqf0vlaFq2mQm8B0prHR0BZpjOIgQMRtsdNUImQDe07uJppcewARKMl+Zeieu8lO7zgxD0Sb2/qC6Kbfno6lPNsVCZm960m3b1utlphgLNjjrC87ucd7zJxusFvQpqATlcQqtbWnG8kn611lZEju+RwJIT6FlEdgrGGwXJ5sv/OQuN45xYy1Ku0696zfSyn2lFFvQtnA9xn4MsWo+3dbfHNYBFQ6RHkGYXm7F0lgYGM2+aU+GdGVm8w+GFlkvRlZtdru8EBPwi6EdoPPIz8c1dya3/5IgAbLDUjHQsd5dL6/tUUilEMtsmgHrwcbKHYFsWR2O5mrWUTaE5GXBmpIsBGhWNw0DWHDc75kJx4AiGS8h3t0ftsgFLHKnE0giFaueLEMEubMofIEXItJ07Vd6yL2uoe8GoBi8AoMaJTPduJ16mXDaiyl+IVuF8GhUMVk/8tgnbl94HFYWHUKcKZYlD3QIY2zZWezOpbNewRhryltDx9PpVlVNaNu+7zuOxywN6RzQd+9df65i6alqL2wRC4dEnvXK1lRvOIAJDPCcRKc/Q1isXk00X+tmnDIS5NODN6TqjsEXKwPVt0u0otNgzlLrB0o5hI9Z3ZUd/eumrfB5tOfQcGANoRJEWr4cpyD3KMnassxi4uiLTjdwufpnDI3xGrQbF0XMnreYgJNIsr5fEv0dQop+o4TjNbSxSxC5eXLnVga3KbTU+XiGACaaPAdavgCDNa4/HsaDjpuochwu3uTxChxpaF3X4mTZizkCyCzcvtOsH/ZWxczykZ5FTgyf9ZTV31T01Br7QgSzTVf+/gohJbsxRuc1FLPin9hyNtKSuwAHBqH54LjhldelbqX781b5XAWEmIlFk2+dSG48pmpmLIporn8ohHg4YsQDHekJHNxPuoaWKilhYx0otBjbplN2fVz5SdKBv902bhinfjyw2Q3rGZLkc1nQ+yJqkzOH3BV2EWPkg8brejA56rCRflLBd7dt1/nev6xsH9rzUyGX1bf9qYnMJJf+y2gGDE/AxLyVZ1iMSQujpcPylN66NzLDSHHYcow3Y36fS0aSsrhXfKziVU7+cgk6Sm3sebW3ZM9yi2MWrC5kXMd193jIWGOp6276L3O4Hc+0Hl+EZT6+Qj57DneFie2LfICfwYbD4TRqe4XwmEggutMbbERuDx1f8UAkPH7LBpIw0Q0zOb9B8ZKiFPlEZeizmg6pfAmMF8h5vuMBLleJSNQbUkY179g50Q53VVRJ7GHaKelvnBSN31ik7xpDTFbxDZlX/uYCAJ/56RpAL+UPUXtJGAWKJ4VR4Kxd51M+OlxlKozV3VjSTC071u22jB1Pvsz0opL0pLj6k20Yb7okaYpumtJYmQWOf2sf/E4Oli8hAQ5otJvkoiNV8LHLpQF8f1dAgrLaDmXfckfvKPH072h/6Tj1XHwRF32/4ZiXIaN3qzLrSi/Z2j2urJJdyd3GplEcCjbS4Qk2kmJ7ie1XN60JzYE007xXs1sLd+tde7hWURTGzFzJpNdBHB3WHBxk6l9eQST9fKlL6hW4ZwlCmA7mlo5POL+RkSyTFlGe5xN9OYNRTmf8eNJ02yt/1nK8hAPcWpIdUujNqsy6MuzOne4OM40fbGUrs0EfO6/4K/eJETuNZy6S+w5P8AQHtoyCRapu7Lfpr7XZIjwJS8TFC1DCmrahblky9tS3vtFZfSJb7epdtBzV91twtWV34l1oTjvbSgKCJngdZvvp5qv9VoKuexUN99GrJsFfYL2U7Ivdje5VxaTkM0cwgEvS8n7eXBub67/sGcNgJF1LajCGqdFxVjcR1ninMnKs2d7m7TP6o5tJ/aiC33tBS+ws+eAO3yixn08to7/faL1DAuWEPL9ZknbwGk/Xc4PVePXJuTThWCFV0VSU3LdV6M9kd5y9pGr4KAlP2Sbfd9IhwTfKE895u0Nq+1yXv2e9Ihxu1K6t1o8ytoPp+7QqwAFVSlo8lO7JoZ1aUp8qfM5Xc2+dTR0/CFrvynjaSv0UBfao4z4fdZdz0TDNxY6GSRhjDjyFrRBvUaq6S+OU1ANMLsDgKhpM3QWewuMub+I3284xWcV9d6jSkDRE8RJdNxZojU17E3/RtfpgYiZDjDG548O/6l4ZGYukzaOXJrbKKl19W5V52woP6LtHv6fAacJi1JiWb0ImuOmFK6etpVfWMX3beQnrskPjVqEjhN7MqN30dJcMEzqL6aZ+PN/C73S8pGulgk3ehPPaiDntUTxu+SUOXPk7h7vp+/Y4/yA5bmUdtoh3iyebP9HUKPT2laneti/OZ+e6daGHrfzm5SSWH1a37XZbpf5v6vUv6b/4xV7+qhTXex5ifLGYAgXRQeHgrUu/h1LNVfrLb7v40JM2t7yW+MpBZX73OZB3l5h9BJs3+BsL3S29R7YQOZ8W7b9LjrXb3/kgBtLevatABkAqvZg1XaDXX2m5PBZGhSXVkfnNdB/6aYoem2rUDgglb7psd52xjN2g+2fDLyL0sWyL6oQdH8ePP+8W/F2Kdn61bUc+LVIm+44KVHHfUDfwPghtRNew3PwDbz34XyDHtU6VvRt5tUjKJ7FbuKb2/RNVOLd3ujsmC9sqwv6gnwrfgsofmifYPGo7zjYZl5vp9dhwWQe6Fg6ZG2u6YuJJ6iO+laG3g6ZewecVkL9Og+Rc8tvh8BgHsSVjWdJVabK9VTl9qST+RCkldYn1+Vr7vvX4CNWfIVm4rJpdeZoqKVKy9aYK/SDwV9VuP1EegZJ3r4fUNusD1HYKX3rZH/oeya4lN34zHf0mcX0zyxC7b4o+YJ5XqCjUqs0FSw6mXiYodzT6DORc8uuFgiVBleeNNz5v+Hv0+fXl+AN3WHe11wlWk+dsIoO6A3Vz5hby61qjg17fkqO98pqTbjv9MdxlyKe4vJbxlDryXMERtsmbZgG/WBuXLZeLahUIYTrltsU/FoSg93L4H/JR33Rz5LeGriimUfTBRP/c/f0gVdEqOdY49yZQ3v9Y/DWIboEvSt6yt1j86PKNzV+LH6QG5vxjIfWnBH8tusOqv7ox/CiE+4/uBO+2MBXFMKk4piPiQ7qIb96dsIQdmZf/LH50D7b7sdD9qHsePJS4u6jy8AR33z/lf+zwx+I/pPMlPIsBxRO7Hz/2lmDjy5yHoS6I3SkTckxSjSaNFMnKj3yM33+TUL0p23QXB5YsOOON6lDpJ2FxVdWQVPpLGsKgBrgVSSpJAolSV3wRKRJULSCkiU7XQFbSJKT2remgJOKZCMaolmzrwBC1Txhfta5ywk8QknoTDBlkctjFIK8ekfRWKCSStAzW3QteEOVoAt7te2SCTwnlzfo9gLRsV3UVJNBCE16ZgSRp0ZA6G3gabS+7d4LIkLRY2SqCOnmswpBiqnpICsfw80J9QpefBu0GDT0eJig0PDXm6IUPXXjVkm/F+n1v959kFVq25ckOvRTKBNyxk42ZJe02GEtqD2AW2t3WiNTSws54NVuvMwlPOD7PwtOsFXm+lkS9lYFZUnGoMVe6oBgEu57dwxZdpluGSpeunwsU/EBLTpjmvlKXJOtJQjw6t3uEkrY9DMxaq6Ik7tcJve0M8C5S5YFZ7T1RRfUIXapI+x6h1JFuA7NQ0bbnGJglPaATmNEI2/YM0ey2CHpmrSWUlc0OKmlfzEKkRKRnVgVvxXlUGzyFi7FKAn3qyr6THv8cr8QjOqL7fePOvvoWMws6Vt/xZEFbJSkkK/RE6gm1NgBlqItqQZoEdtsWisWxcYFZsMFgj/okjQHVhn2LCfLgki34oLdJwo14FvAraPm+wCLucr0dO25at8enY9bFxAgW+jRsXomuFdygzzKUCuybcXaaaJK+uuS+RwS7pDCz+pcDYWbBVswMkftZGSLVhmHHrEVX5GIJNLPwqgwGZnmwfGBsoW48+DVOelOkURDkNV+c+zuEjnuUhJUnVNgiTjGsZ9ZW7ZkVQ2sMzBUsWH1NJ5YPhFZujfotUxaZQGBWSSaXMOti4pWq9YmCFGs/2Dh7U/B/yZ4RZwk6bW3ZmEFDrWiLT91IWpfp3mpd/o4wS64x3zsc80qkYHYWG7W7GzALfscTurSEnQr3jXVSO4WZZcYubBfsmIWXB2EWZhqp7uuZBWJT9jnnl2QhCVuvjlmRMVQDhrMpJd9r18Z9vHP/FynLkkRM6jYUZOIMj5NIePB6Y/kZQntgFmoCzDe8fvG0DrkyPPdq5BwRrEU5joBiYJZ2dXJsNw4dQ9WNk6HuJVNYMR3xunTxP0dEauqgViRBZnjVyC+E2/jvCPNYdEfMwlIwKtgTRKRVoYIIOhmYddFBt2JzaUQw59CUCdTg/r6+O8AsMw22WA0CsnFYZm0U8IiKmGaWepPgvilhFihVfCsnjfATT73l2ZUFT7DTqv1jihAlgBCu/ZsSplYHHjzKMoxqzBuxWaaBRQ0bEqyJhrbPviHqDVZpoGy8o2GapnEkAEMzFKSQ5kiBBiWghdQ1ydyoKli+XYbWB5XssMATAGKB7THIHzml0lFiuQukpCNmDYqNpggvJB+DCVKHMzALa1KQpj2eYwsL46FjFgZMGoY9ADBMQ0Mm6cfDSWQtN8YAAAcsSURBVJa3hiIGCcT+ySwjuOGHvqQ6MGujkaYgzQ/8uOaPapJZeEovt/sfefWt2FWvJPddCc2aZjKzHRqUVGAQMAte4AV7X1a0ZCEiWVAV4u1NqA2uOzSI+Xwl170pqJbhQFD6eErN5qKADWvwV9ArcKtJO8cEE9XKC6TCgl6S6+06QMFJVjKWrJ0KB2LJhFaLrGSBDk5AFwYds2BjRe10aBDbgYqoZk6yMKM3okaM1ItZvlBoGJRIvWRJwKwFlLzxfUt68mTbr6LqT7yjE0FUA+3b0MmtRzgtVzB4PPVt+8CYAYpuMvzQZC6xlup3Nbtgs3ywI9DM41LeJNg1B2iwTfooMmYPSup63SF2vIj1ELrCocTD4AtaZLUSNoNQl48XABZRvApCLGDHusZjJALM2qyzhDTiiz93/QUZuQM2UlL0Ytaa2CxoiYQZ0/EXAEYou67QoUH8QzfRHs8s/NVDBRtNM8tZS+RdWz5sKILGzn5ZYeylzBbbyNbm57fzTvAqueOZWB6jBo9kFgwSgDFALswsFBZS1yoCQy2phbduYFgIu/Vues8Z7B5hE4GZpZQHBalwcqSSbklYSKHZjr+ALXmYNRg8YL8K9tvuAY00Cql1ryUwYze8rFUNdowSjccwi6DBGk+QtR2GVupifwfgSccs96SJOkGWpBTbjAdmdX4c2Kx4EDhesmw4GEMJKWKYBc1KRMIsWAB7ONPCH+6zGCMQbuIdZRP9gX6GMoy/VGldwL5Tt7Jn33IGzBpyxyFAd7yGSQtlH9sxVV/fDSjZW0GdGUZX7aUpMKQv3B4NgovrQFkfSgpMeF1i7N/o8A5bfDHNho09eIESMAHtf4AxAOkg/Yb2cMqymwqWWcJdg2rW2ni2dMfLewmHY5WzcImfVRQ6XkUd/IQdr30JM6jB+nyu4w4NepgfpCkYJ1mtsUux/uLVIOi9jllCtRAl6XApMwkt5oOqcZVWt6Qe7Qj/Obna12h/qsWbFLwvDcPqiGFWDG9+JBsgUkRePQy7ZppupWKtoetYQx27CIZZwkLUWtfDOONKXjaLzdQWGzAJGzCrVuAFxWdJ2wgxdiwDEE7oj11hCyM05FYy9otMBCKBjRrNrOBuMhEMkJIGDl/p4N5hg4Jgh7ZZ9/oJr5a+Gz0R8i6CIQE4xXhGB/cQS5ZePhdnjA0nBGOMLbjzEmFW759t4K0XEMHYmrAzGB9kvnkjfLqNL56/OWe/FcjAU5wtl9tg4YZQbjlb+DVmlostBtlmaRdI1/Fo62HGaon8TepMez8LL0vlcNEH1QMWD/9DyoRLsiCJHGFZkwC0oHM3nYaL8cKaLCLvSMDEwKxzDzi8k6Tgew2NW7Z4zjpVhE3lmTALT2lSDtU/qUQaXPTMQoS1IFkxBD6IN0wxC0uWdxYVXdGlk0VGiJllD8xyawIwoKp2qZqKqS6rWVbh1eNZgrwqNqf0G29dm+UVOu/v58UF3n8MBmu2qsmy7eerf9zus4P/002SfSmrhkqmkb87QO+ubNvrTrd9/P/uAM+2Qxf/SXw6UiQawLWc7oLyyuvv6K26YzB1Jwf9LfFfQ9i4Kaunf2M/vw7gcA/uatP76J+XIwOCOwxPRo4lR9je6xmFIC3Li99f0e/Oc4dn6D9Z0SW/RDPrHJ+zgoELDzm9rPzmfqhnOtq/ZxSUM+33bVGXTShUjm99ko5/nvrNvrLcBL4Q+dEpKHf1z3flWWbYnNSl5Xj+xcJy6v32W+Q/xJMbDkWA7mpVCentYMvbQ7Beij/ZiwNb2KpM3SC0AVs4XtB8Cjv/LrJusuCDGxDahzRfOcXysUzm5Yv7IcHI2zhtV9D6TE4dx516YdaH/hg1kOOH9mtB2cTNpRS36T0jaeKp/jxd8/5M7PuYITV53K6Ra4WBZd2AUf+9OwD+K6gLsli+sIkFb+XEO+d4zNH6yS2aZwgbNcyppZggUdpj0P0QbTsO5BDrv/Bbu28+9Ptkk7Qu9vRuUO3nP47Fsq3AT5VQgrnz3CCExOyInQ90zND9dN5tndzG8ESA3T3OB1n87eQFneqCYKS8ci+B7QZptVnbrbPeruudtE408dg3k0RHMZGQek425jFM49QWXPBxG+vwKZb+R0gGPdhFnYXIklO59H2vqsIyWKa5vTHvy+1mmXXxmON5L92lemvWtz00Aui37lrVX9ONSD/0Z6lrYfsAhpWC7/oY1sEboavcFarAD5vbtrSEw3qX1cWuEC+rnRz76TawUgpKRHH1sVf/LMngJgeCHELruufGztReCVHWhG2StKsmFA6xYAm+b7lU1kWWP1rwXyIOfbu+HKy2od0cIsHy3Mbq7BwRyM8mkX+XRjJikW6tHuQxsdQJQQSFLP1v3meTyL9KfGyva0CHfSjyDkfZ8+AlqcMxq49k/X8i1xuYBeTAjgbqV+fDrP9PxBZvNIDv/bmk/Yf+IP0fB1/IXuHKZQcAAAAASUVORK5CYII=" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mon stage chez gamned</h5>
                <p class="card-text">Découvrez le stage que j'ai effectué chez Gamned! à Marseille. La publicité programmatique a beaucoup à offrir !</p>
                <p class="card-text"><small class="text-muted">Le 16 août 2019</small></p>
            </div>
        </div>
        <div class="card click" onclick="window.location.href='netflix.php';">
            <img src="https://cdn.static.nicematin.com/media/npo/xlarge/2016/11/netflix-logo-print_cmyk.jpg" class="card-img-top" alt="Logo de netflix">
            <div class="card-body">
                <h5 class="card-title">Le chaos engineering chez Netflix</h5>
                <p class="card-text">Vous pensiez que Netflix se tournait les pouces depuis leur succès ? Vous vous trompiez !</p>
                <p class="card-text"><small class="text-muted">Le 15 juillet 2019</small></p>
            </div>
        </div>
        <div class="card click" onclick="window.location.href='wwh.php';">
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/582500/capsule_616x353.jpg?t=1576758030" class="card-img-top" alt="Image de couverture de We were here">
            <div class="card-body">
                <h5 class="card-title">We were here, la triologie de jeux immanquable !</h5>
                <p class="card-text">Vous cherchez un jeu pour vous amuser à deux ? C'est ici que vous le trouverez !</p>
                <p class="card-text"><small class="text-muted">Le 09 janvier 2020</small></p>
            </div>
        </div>
        <div class="card click" onclick="window.location.href='hacktag.php';">
            <img src="https://d3isma7snj3lcx.cloudfront.net/optim/images/gallery/10/106407/hacktag-pc-684b1b80.jpg" class="card-img-top" alt="Image de couverture de Hacktag">
            <div class="card-body">
                <h5 class="card-title">Hacktag : le jeu co-op à tester</h5>
                <p class="card-text">Piece of Cake studios nous régalent avec leur premier jeu en co-op sur le thème du hacking !</p>
                <p class="card-text"><small class="text-muted">Le 10 décembre 2019</small></p>
            </div>
        </div>
        <div class="card click" onclick="window.location.href='webix.php';">
            <img src="https://webix.com/assets/common-new/webix-facebook-opg.jpg" class="card-img-top" alt="Image de couverture de Webix">
            <div class="card-body">
                <h5 class="card-title">Webix : le framework Javascript qui facilite la vie</h5>
                <p class="card-text">Un framework aussi efficace est forcément fait pour vous.</p>
                <p class="card-text"><small class="text-muted">Le 15 septembre 2019</small></p>
            </div>
        </div>
        <div class="card click" onclick="window.location.href='recalbox.php';">
            <img src="http://www.fulguropop.com/wp-content/uploads/2018/01/recalboxlogo-1140x455.png" class="card-img-top" alt="Logo de Recalbox">
            <div class="card-body">
                <h5 class="card-title">Recalbox : l'OS pour votre borne d'arcade</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Le 23 novembre 2019</small></p>
            </div>
        </div>
    </div>


    <div class="d-flex flex-column" id="intro">
        <div class="card border-info mb-3" style="max-width: 18rem;">
            <h5 class="card-header text-info">Bienvenue sur mon blog</h5>
            <div class="card-body text-info">
<!--                <h5 class="card-title">Info card title</h5>-->
                <p class="card-text">Dans ce blog vous retrouverez mes retours d'expériences ainsi que divers articles d'actualités.</p>
            </div>
        </div>

        <ul class="list-group list-group-flush">
            <h5>Les articles les plus récents</h5>
            <li class="list-group-item" onclick="window.location.href='wwh.php'">We were here, la triologie de jeux immanquable !</li>
            <li class="list-group-item" onclick="window.location.href='hacktag.php'">Hacktag : le jeu co-op à tester</li>
            <li class="list-group-item" onclick="window.location.href='recalbox.php'">Recalbox : l'OS pour votre borne d'arcade</li>
            <li class="list-group-item" onclick="window.location.href='webix.php'">Webix : le framework Javascript qui facilite la vie</li>
            <li class="list-group-item" onclick="window.location.href='gamned.php'">Mon stage chez gamned</li>
        </ul>
    </div>

</main>

<?php //#On inclut le footer
//include ('../footer.php');
//?>

</body>
</html>