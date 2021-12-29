<table style="padding: 0px; border-spacing: 5px; width: 100%">
    <tr>
        <td style="width: 33%; padding: 0px; vertical-align: top">
            <form id="nick_form">
                <fieldset class="rounded">
                    <legend>Ник</legend>
                    <table style="margin: 0px; padding: 0px; border-spacing: 1px; width: 100%">
                        <tr>
                            <td style="width: 150px">
                                Ник:
                            </td>
                            <td>
                                <input type="text" name="nick_text" class="input_text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Цвет текста:
                            </td>
                            <td>
                                <input type="text" name="nick_text_color" class="input_text colorpick" value="ffffff"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Размер шрифта:
                            </td>
                            <td>
                                <select name="nick_font_size" class="input_select">
                                    <?php
                                    foreach ($font_sizes as $key => $value) {
                                        echo '<option value="' . $value . '">' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Шрифт:
                            </td>
                            <td>
                                <select name="nick_font_type" class="input_select">
                                    <?php
                                    foreach ($font_types as $key => $value) {
                                        echo '<option value="' . $key . '">' . $value['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px" colspan="2">
                                Обводить: <label><input type="radio" name="nick_border" value="1" checked="checked" onchange="disableSwitcher(this, 'nick_border_color')" class="input_radio"/>Да</label> <label><input type="radio" name="nick_border" value="0" onchange="disableSwitcher(this, 'nick_border_color')" class="input_radio"/>Нет</label>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center" colspan="2">
                                Цвет обводки: <input type="text" name="nick_border_color" class="input_text colorpick" value="000000"/>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        <td style="width: 34%; vertical-align: top">
            <form id="clan_form">
                <fieldset class="rounded">
                    <legend>Клан</legend>
                    <table style="margin: 0px; padding: 0px; border-spacing: 1px; width: 100%">
                        <tr>
                            <td style="width: 150px">
                                Клан:
                            </td>
                            <td>
                                <input type="text" name="clan_text" class="input_text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Цвет текста:
                            </td>
                            <td>
                                <input type="text" name="clan_text_color" class="input_text colorpick" value="ffffff"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Размер шрифта:
                            </td>
                            <td>
                                <select name="clan_font_size" class="input_select">
                                    <?php
                                    foreach ($font_sizes as $key => $value) {
                                        echo '<option value="' . $value . '">' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Шрифт:
                            </td>
                            <td>
                                <select name="clan_font_type" class="input_select">
                                    <?php
                                    foreach ($font_types as $key => $value) {
                                        echo '<option value="' . $key . '">' . $value['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px" colspan="2">
                                Обводить: <label><input type="radio" name="clan_border" value="1" checked="checked" onchange="disableSwitcher(this, 'clan_text_color')" class="input_radio"/>Да</label> <label><input type="radio" name="clan_border" value="0" onchange="disableSwitcher(this, 'clan_text_color')" class="input_radio"/>Нет</label>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center" colspan="2">
                                Цвет обводки: <input type="text" name="clan_border_color" class="input_text colorpick" value="000000"/>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        <td style="width: 33%; vertical-align: top">
            <form id="ally_form">
                <fieldset class="rounded">
                    <legend>Альянс</legend>
                    <table style="margin: 0px; padding: 0px; border-spacing: 1px; width: 100%">
                        <tr>
                            <td style="width: 150px">
                                Альянс:
                            </td>
                            <td>
                                <input type="text" name="ally_text" class="input_text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Цвет текста:
                            </td>
                            <td>
                                <input type="text" name="ally_text_color" class="input_text colorpick" value="ffffff"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Размер шрифта:
                            </td>
                            <td>
                                <select name="ally_font_size" class="input_select">
                                    <?php
                                    foreach ($font_sizes as $key => $value) {
                                        echo '<option value="' . $value . '">' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Шрифт:
                            </td>
                            <td>
                                <select name="ally_font_type" class="input_select">
                                    <?php
                                    foreach ($font_types as $key => $value) {
                                        echo '<option value="' . $key . '">' . $value['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px" colspan="2">
                                Обводить: <label><input type="radio" name="ally_border" value="1" checked="checked" onchange="disableSwitcher(this, 'ally_text_color')" class="input_radio"/>Да</label> <label><input type="radio" name="ally_border" value="0" onchange="disableSwitcher(this, 'ally_text_color')" class="input_radio"/>Нет</label>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center" colspan="2">
                                Цвет обводки: <input type="text" name="ally_border_color" class="input_text colorpick" value="000000"/>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
		<td style="width: 33%; vertical-align: top">
            <form id="server_form">
                <fieldset class="rounded">
                    <legend>Сервер</legend>
                    <table style="margin: 0px; padding: 0px; border-spacing: 1px; width: 100%">
                        <tr>
                            <td style="width: 150px">
                                Сервер:
                            </td>
                            <td>
                                <input type="text" name="server_text" class="input_text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Цвет текста:
                            </td>
                            <td>
                                <input type="text" name="server_text_color" class="input_text colorpick" value="ffffff"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Размер шрифта:
                            </td>
                            <td>
                                <select name="server_font_size" class="input_select">
                                    <?php
                                    foreach ($font_sizes as $key => $value) {
                                        echo '<option value="' . $value . '">' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Шрифт:
                            </td>
                            <td>
                                <select name="server_font_type" class="input_select">
                                    <?php
                                    foreach ($font_types as $key => $value) {
                                        echo '<option value="' . $key . '">' . $value['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px" colspan="2">
                                Обводить: <label><input type="radio" name="server_border" value="1" checked="checked" onchange="disableSwitcher(this, 'server_border_color')" class="input_radio"/>Да</label> <label><input type="radio" name="server_border" value="0" onchange="disableSwitcher(this, 'server_border_color')" class="input_radio"/>Нет</label>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center" colspan="2">
                                Цвет обводки: <input type="text" name="server_border_color" class="input_text colorpick" value="000000"/>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
    </tr>
	
	<td style="width: 33%; padding: 0px; vertical-align: top">
            <form id="lvl1_form">
                <fieldset class="rounded">
                    <legend>LvL Персонажа</legend>
                    <table style="margin: 0px; padding: 0px; border-spacing: 1px; width: 100%">
                        <tr>
                            <td style="width: 150px">
                                LvL:
                            </td>
                            <td>
                                <input type="text" name="lvl1_text" class="input_text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Цвет текста:
                            </td>
                            <td>
                                <input type="text" name="lvl1_text_color" class="input_text colorpick" value="ffffff"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Размер шрифта:
                            </td>
                            <td>
                                <select name="lvl1_font_size" class="input_select">
                                    <?php
                                    foreach ($font_sizes as $key => $value) {
                                        echo '<option value="' . $value . '">' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                Шрифт:
                            </td>
                            <td>
                                <select name="lvl1_font_type" class="input_select">
                                    <?php
                                    foreach ($font_types as $key => $value) {
                                        echo '<option value="' . $key . '">' . $value['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px" colspan="2">
                                Обводить: <label><input type="radio" name="lvl1_border" value="1" checked="checked" onchange="disableSwitcher(this, 'lvl1_border_color')" class="input_radio"/>Да</label> <label><input type="radio" name="lvl1_border" value="0" onchange="disableSwitcher(this, 'lvl1_border_color')" class="input_radio"/>Нет</label>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center" colspan="2">
                                Цвет обводки: <input type="text" name="lvl1_border_color" class="input_text colorpick" value="000000"/>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
		

        <td style="width: 33%; padding: 0px; vertical-align: top">
            <fieldset class="rounded">
                <legend>Фон</legend>
                <select name="background" class="input_select" onchange="generateaion(<?php echo $type; ?>);">
                    <?php
                    foreach ($backgrounds as $key => $value) {
                       $name = isset($background[$key]) ? $background[$key] : 'Фон №' . $key;

                        echo '<option value="' . $key . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </fieldset>
			
           
        </td>

		<td style="width: 33%; padding: 0px; vertical-align: top">
            <fieldset class="rounded">
                <legend>Расса</legend>
                <select name="icon6" class="input_select" onchange="generateaion(<?php echo $type; ?>);">
                    <?php
                    foreach ($icons6 as $key => $value) {
                        $name = isset($icons6_names[$key]) ? $icons6_names[$key] : 'Иконка №' . $key;

                        echo '<option value="' . $key . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </fieldset>
			 </td>
			 <td style="width: 33%; padding: 0px; vertical-align: top">
			<fieldset class="rounded">
                <legend>Класс</legend>
                <select name="icon3" class="input_select" onchange="generateaion(<?php echo $type; ?>);">
                    <?php
                    foreach ($icons3 as $key => $value) {
                        $name = isset($icons3_names[$key]) ? $icons3_names[$key] : 'Иконка №' . $key;

                        echo '<option value="' . $key . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </fieldset>
        </td>
		

    </tr>
</table>