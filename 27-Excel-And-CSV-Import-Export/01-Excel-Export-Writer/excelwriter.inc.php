<?php
class ExcelWriter {
    private $fp = null;

    function __construct($file_name) {
        $this->fp = fopen($file_name, "w+");
        if($this->fp) {
            fwrite($this->fp, '<table border="1">');
        }
    }

    function writeLine($line_arr, $style = array()) {
        if(!$this->fp) return false;
        $color = isset($style['color']) ? $style['color'] : 'black';
        $align = isset($style['text-align']) ? $style['text-align'] : 'left';
        
        fwrite($this->fp, '<tr>');
        foreach($line_arr as $val) {
            fwrite($this->fp, '<td style="color:'.$color.'; text-align:'.$align.';">'.$val.'</td>');
        }
        fwrite($this->fp, '</tr>');
    }

    function close() {
        if($this->fp) {
            fwrite($this->fp, '</table>');
            fclose($this->fp);
        }
    }
}
?>