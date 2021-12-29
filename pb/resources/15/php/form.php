<table style="padding: 0px; border-spacing: 5px; width: 100%">
    <tr>
        <td style="width: 33%; padding: 0px; vertical-align: top">
            <form id="nick_form">
                <fieldset class="rounded">
                    <legend>Название клана</legend>
                    <table style="margin: 0px; padding: 0px; border-spacing: 1px; width: 100%">
                        <tr>
                            <td style="width: 150px">
                                Название:
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
                <legend>Ранг клана</legend>
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
        <td style="width: 33%; vertical-align: top">
            <fieldset class="rounded">
                <legend>Логотип Клана</legend>
                <label><input type="radio" name="icon_choose" value="0" checked="checked" class="input_radio"/>Без логотипа</label>
                <select name="icon2" class="input_select" onchange="changeIconChoose('first'); generatepb(<?php echo $type; ?>);">
                    <?php
                    foreach ($icons2 as $key => $value) {
                        $name = isset($icons2_names[$key]) ? $icons2_names[$key] : 'Иконка №' . $key;

                        echo '<option value="' . $key . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                <div>
                    <label><input type="radio" name="icon_choose" value="1" class="input_radio"/>Загрузить</label>
                    <form method="post" enctype="multipart/form-data" target="hidden_frame" name="load_form" action="upload.php">
                        <input type="file" name="file" onchange="$('form[name=load_form]').submit(); changeIconChoose('last');" style="width: 100px"/>
                    </form>
                    <iframe name="hidden_frame" style="width: 0px; height: 0px; margin: 0px; padding: 0px; border: 0px; display: none"></iframe>
                    <div id="hidden_block" style="width: 300px; height: 150px; display: none; overflow: hidden">
                        <table style="width: 100%; padding: 0px; margin: 0px; border-spacing: 0px">
                            <tr>
                                <td style="width: 80px; text-align: center">
                                    <div style="width:60px; height:60px; overflow:hidden; margin: 0px auto" id="div_prev"></div>
                                    <form action="crop.php" method="post" target="crop_frame" onsubmit="return checkCoords();" id="crop_form">
                                        <input type="hidden" id="x" name="x" />
                                        <input type="hidden" id="y" name="y" />
                                        <input type="hidden" id="w" name="w" />
                                        <input type="hidden" id="h" name="h" />
                                        <input type="button" value="Обрезать" style="margin-top: 5px" class="input_button" onclick="$('#crop_form').submit();"/>
                                    </form>
                                    <iframe name="crop_frame" style="width: 0px; height: 0px; margin: 0px; padding: 0px; border: 0px; display: none"></iframe>
                                </td>
                                <td>
                                    <div id="img_block" style="width: 220px; height: 150px; overflow: auto"></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </fieldset>
        </td>
    </tr>
</table>