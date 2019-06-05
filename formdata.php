<?php
  echo $_POST['password'];
  echo $_POST['name'];
  echo $_POST['time'];

  #$currentDate===date(r);  
  $result = mail("e.a.abr@ya.ru","TEST","Вы ввели данные: \nИмя $_POST[name] \nПароль: $_POST[password] \nВремя $_POST[time] Спит $_POST[sleep] часов \nСвои наработки $_POST[text]");
  if ($result) {
    echo "<p>Message was sent ",date(),"<p>";
  }
  else {
    echo "<p>Message was'nt sent<p>";
  }


?>

