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

        <td style="width: 33%; vertical-align: top">
            <fieldset class="rounded">
                <legend>Фон</legend>
                <select name="background" class="input_select" onchange="generatepb(<?php echo $type; ?>);">
                    <?php
                    foreach ($backgrounds as $key => $value) {
                        $name = isset($background[$key]) ? $background[$key] : 'Фон №' . $key;

                        echo '<option value="' . $key . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </fieldset>

            <fieldset class="rounded">
                <legend>Иконка Звания</legend>
                <select name="icon1" class="input_select" onchange="generatepb(<?php echo $type; ?>);">
                    <?php
                    foreach ($icons1 as $key => $value) {
                        $name = isset($icons1_names[$key]) ? $icons1_names[$key] : 'Иконка №' . $key;

                        echo '<option value="' . $key . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </fieldset>
        </td>

        <td style="width: 33%; padding: 0px; vertical-align: top">
            <fieldset class="rounded">
                <legend>Иконка Клана / Ранг Клана</legend>
                <label><input type="radio" name="icon_choose" value="0" checked="checked" class="input_radio"/> Стандартная</label>
                <select name="icon2" class="input_select" onchange="changeIconChoose('first'); generatepb(<?php echo $type; ?>);">
                    <?php
                    foreach ($icons2 as $key => $value) {
                        $name = isset($icons2_names[$key]) ? $icons2_names[$key] : 'Иконка №' . $key;

                        echo '<option value="' . $key . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                
            </fieldset>
        </td>
        <td style="width: 34%; vertical-align: top">

        </td>
        <td style="width: 33%; vertical-align: top">

        </td>
    </tr>
</table>