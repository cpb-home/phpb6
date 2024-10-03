<?php

echo '
    <div style="padding: 10px; background-color: lightblue;">
        <ul style="display: flex; width: 100%; justify-content: center; gap: 50px; list-style-type: none; align-items: center;">
            <li style="text-transform: uppercase;">
                <a style="text-decoration: none; font-size: 30; color: darkblue;" onMouseOver="this.style.color=\'blue\'" onMouseOut="this.style.color=\'darkblue\'" href="/index.php">Главная</a>
            </li>
            <li style="text-transform: uppercase;">
                <a style="text-decoration: none; font-size: 30; color: darkblue;" onMouseOver="this.style.color=\'blue\'" onMouseOut="this.style.color=\'darkblue\'" href="/page1.php">Первая(404)</a>
            </li>
            <li style="text-transform: uppercase;">
                <a style="text-decoration: none; font-size: 30; color: darkblue;" onMouseOver="this.style.color=\'blue\'" onMouseOut="this.style.color=\'darkblue\'" href="/page2.php?text=text">Вторая(сохранение)</a>
            </li>
            <li style="text-transform: uppercase;">
                <a style="text-decoration: none; font-size: 30; color: darkblue;" onMouseOver="this.style.color=\'blue\'" onMouseOut="this.style.color=\'darkblue\'" href="/page3.php">Третья(сессия)</a>
            </li>
            <li style="text-transform: uppercase;">
                <a style="text-decoration: none; font-size: 30; color: darkblue;" onMouseOver="this.style.color=\'blue\'" onMouseOut="this.style.color=\'darkblue\'" href="/page4.php">Четвёртая(вывод)</a>
            </li>
        </ul>
    </div>
';

echo '<h1>Куда переходим? Ссылки в меню сверху.</h1>';