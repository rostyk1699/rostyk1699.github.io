<html>
<head>
     <meta charset="UTF-8">
    <title>Сайт web-студії "Web-DECO" </title>
    <script src="js/clock1.js"></script>
    <script type="text/javascript">
    function send()
    {
        var valid = true;
        var elems = document.forms[0].elements;
        for(var i=0; i<document.forms[0].length; i++)
        {
            if( elems[i].getAttribute('type') == 'text' ||
                elems[i].getAttribute('type') == 'password' ||
                elems[i].getAttribute('type') == 'emal')
                 {
                    if(elems[i].value == '')
                     {
                        elems[i].style.border = '2px solid red';
                        valid = false;
                    }
                }            
        }
        if(!valid)
         {
            alert('Заповніть всі поля !!!');
            return false;
        }
    }

    </script>
    <style>
        .shadowtext{
            text-shadow: 1px 3px 2px white, 0 0 1em red;
            color: #210042;
            font-size: 2em;
        }
    </style>
    <script>
        window.onload = function()
        {
            setInterval(clockPainting, 1000);
        }
    </script>
 </head>
<body background="images/bg-3.jpg">
<table border="1" align="center" cellpadding="10" >
    <tr>
        <td colspan="2" height="150" align="right" hspace="10"><font size="5" color="Maroon"><hl class="shadowtext">Сайт web-студії "Web-DECO"</hl></font></td>
    </tr>
    <tr>
        <td colspan="2"><font size="4"><b>
                        <a href="#">Головна</a>&nbsp;&nbsp;
                        <a href="#">Фотогалерея</a>&nbsp;&nbsp;
                        <a href="#">Телефони</a>&nbsp;&nbsp;
                        <a href="#">Статистика</a>&nbsp;&nbsp;
                        <a href="#">Зареєстровані</a>&nbsp;&nbsp;
                        </b></font></td>
    </tr>
    <tr>
        <td width="30%" valign="top" >
            <center><canvas id="canvas" height="120"></canvas></center>
         <font size="5" color="navy"><h2>Новини</h2></font>
           <font size="5" >
         <ul>
              
            <li><a href="#">Сайт будівельної компанії</a></li>
            <li><a href="#">Сайт ТМ "Новашкола"</a></li>
            <li><a href="#">Редизайн сайту classno.com.ua</a></li>
            <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
            <li><a href="#">Сайт-візитка дизайнера інтерфейсів </a></li><br>
            <p align="right"><a href="#">інші...</a></p>
         </ul> 
           </font> 
         <hr>
         <H1 align="center"><font color="green">Реєстрація</font></H1>  
         <form action="forma.php" method="post" onsubmit="return send();">
            <TABLE align="center" bgcolor="#ccc">
                <TR>
                    <TD><font color="green">Прізвище</font>: </TD>
                    <TD><input type="text" size="10" maxlength="20" name="name2"></TD>
                    </TR>
                    <TR>
                        <TD><font color="green">Ім'я</font> : </TD>
                        <TD><input type="text" size="10" maxlength="20" name="name1"></TD>
                        <TR>
                            <TD><font color="green">E-mail</font>: </TD>
                            <TD><input type="email" size="10" maxlength="20" name="email"></TD>
                            </TR>
                            <TR>
                                <TD><font color="green">Пароль</font>: </TD>
                                <TD><input type="password" size="10" maxlength="20" name="password"></TD>
                                </TR>
                                </TABLE>

                                <p align="center">
                                <input type="submit" value="Зареєструватись">
                                <input type="reset" value="Очистити">     
                                </p>
                                </form>
                            </hr>
        </td>
        <td width="70%" valign='top'>
            <hl align="center">Дякуємо за реєстрацію !</hl>
            <?php
            $st = $_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password']."\n";

            $fp = fopen("baza.txt","a");
            $test = fwrite($fp,$st);
            echo "<h2 align='center' >Ви ввели :".$_POST['name2'].",".$_POST['name1'].",".$_POST['email'].",".$_POST['password']"</h2>";
            ?>
        </hl>
         <h2>Зробити сайт з нами легко</h2></font>
          Ми можемо створити сайт, який стане для Вас вдалою інвестицією.</p></p></font>
        </td>
    </tr>
    <tr>
        <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">(Низ сайта)
        <font size="4">Сайт Розробив "Автор"</font>
    </td>
    </tr>
</table>

</body>
</html>
