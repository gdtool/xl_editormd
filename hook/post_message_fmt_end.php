include APP_PATH.'plugin/xl_editormd/model/Parsedown.php';

if ($arr['doctype'] == 2) {
    $Parsedown = new Parsedown();
    $arr['message_fmt'] = $Parsedown->text($arr['message']);
}
