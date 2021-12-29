$(document).ready(function() {
    $('input.colorpick').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            $(el).val(hex);
            $(el).ColorPickerHide();
            $(el).css('backgroundColor', '#' + hex);
        },
        onBeforeShow: function () {
            $(this).ColorPickerSetColor(this.value);
        }
    })
    .bind('keyup', function(){
        $(this).ColorPickerSetColor(this.value);
    });
});

function disableSwitcher(object, name) {
    // включаем
    if(object.value == 1) {
        $('input[name=' + name + ']').removeAttr('disabled');
    }
    else {
        $('input[name=' + name + ']').attr('disabled', 'disabled');
    }
}

function changeIconChoose(index) {
    if(index == 'first') {
        $('input[name=icon_choose]').first().attr('checked', 'checked');
        $('#hidden_block').css({
            'display' : 'none'
        });
        
        $('input[name=file]').val('');
    }
    else {
        $('input[name=icon_choose]').last().attr('checked', 'checked');
    }
}

function afterUpload(data) {
    if(data.errors == '') {
        $('#img_block').html('<img src="tmp/' + data.filename + '" id="target"/>');
    
        $('#hidden_block').css({
            'display' : 'block'
        });
    
        $('#div_prev').html('<img src="tmp/' + data.filename + '" id="preview"/>');
    
        $('#target').Jcrop({
            onChange: showPreview,
            onSelect: showPreview,
            onRelease: hidePreview,
            aspectRatio: 1
        });

        $preview = $('#preview');
    }
    else {
        alert(data.errors);
    }
}

function showPreview(coords) {
    if (parseInt(coords.w) > 0) {
        var prev_w = $('#div_prev').width();
        var prev_x = $('#div_prev').height();
        
        var rx = prev_w / coords.w;
        var ry = prev_x / coords.h;
        
        var big_w = $('#target').width();
        var big_h = $('#target').height();
        
        $preview.css({
            width: Math.round(rx * big_w) + 'px',
            height: Math.round(ry * big_h) + 'px',
            marginLeft: '-' + Math.round(rx * coords.x) + 'px',
            marginTop: '-' + Math.round(ry * coords.y) + 'px'
        }).show();
    }
    
    $('#x').val(coords.x);
    $('#y').val(coords.y);
    $('#w').val(coords.w);
    $('#h').val(coords.h);
}

function hidePreview() {
    $preview.stop().fadeOut('fast');
}

function checkCoords() {
    if (parseInt($('#w').val())>0)  {
        return true;
    }
    else {
        alert('Выделите часть картинки');
        return false;
    }
    
};

function afterCrop(data) {
    if(data.errors == '') {
        alert('Координаты иконки сохранены');
    }
    else {
        alert(data.errors);
    }
}

function generatepb(type) {
    var s = 'type=' + type + '&';
    
    var nick_form = $('#nick_form').serialize();
    var clan_form = $('#clan_form').serialize();
    var kd_form = $('#kd_form').serialize();
    var hs_form = $('#hs_form').serialize();
    var weapon_form = $('#weapon_form').serialize();
    var weapon2_form = $('#weapon2_form').serialize();
    var background = $('select[name=background]').val();
    var icon1 = $('select[name=icon1]').val();
    var icon2 = $('select[name=icon2]').val();
	var icon3 = $('select[name=icon3]').val();
	var icon4 = $('select[name=icon4]').val();
	var icon5 = $('select[name=icon5]').val();
	var icon6 = $('select[name=icon6]').val();
    var icon_choose = $('input[name=icon_choose]:checked').val();
    
    switch(type) {
        case 1:
             s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
               break;
            
        case 2:
             s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
               break;
            
        case 3:
              s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
               
        case 4:
              s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;          
            break;
            
        case 5:
              s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
               
            break;
            
        case 6:
              s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
                
            break;
			
		case 7:
              s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
                
            break;
			
		case 8:
              s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
               
            break;
 
		case 9:
             s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
                
            break; 

		case 10:
             s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
                
            break;
			
			
		case 11:
             s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
            
            break;

                            case 12:
             s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
            
            break;

                            case 13:
             s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
            
            break;

                           case 14:
             s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
            
            break;

                            case 15:
             s += nick_form + '&' + clan_form + '&' + kd_form + '&' + hs_form + '&' + 
            weapon_form + '&' + weapon2_form + '&background=' + background + '&icon1=' + icon1 + '&icon2=' + icon2 + '&icon3=' + icon3 + '&icon4=' + icon4 + '&icon5=' + icon5 + '&icon6=' + icon6 + '&icon_choose=' + icon_choose;
               break;
			
        default:
            
    }
    
    $.post('savedata.php', s, function(data) {
        if(data.errors == '') {
            $('#generated_image').html('<img src="img.php?r=' + Math.random() + '"/>');
        }
        else {
            alert(data.errors);
        }
    }, 'json');
}











