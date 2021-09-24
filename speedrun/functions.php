<?php
function showVar($x, $display='block')
{
    if ($dispay == 'block'):
        $style = 'style="display: block"';
    else:
        $style = 'style="display:none"';
    endif;
    echo '<pre ' . $style . '>';
    print_r($x);
    echo '</pre>';
}
function showDate($date)
{

    $arD = explode('-', $date);
    return $arD[2] . '.' . $arD[1] . '.' . $arD[0];
}
function showSelect($name, $arList)
{
    echo '<select name="' . $name . '">';
    echo '<option value="0"> Выберите мероприятие</option>';
    foreach ($arList as $key => $value):
        echo '<option value="' . $key . '">' . $value . '</option>';
    endforeach;
    echo '</select>';
}
?>
