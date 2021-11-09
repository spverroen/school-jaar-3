<?php

class OutputData {
    public function CreateTable($rows) {
        $html = '<table class="w-50 m-auto border p-3">';
        $html .= '<tr>';

        foreach($rows[0] as $key => $value){
            $html .= '<th class="p-2 border-bottom">'.$key.'</th>';
        }
        $html .= '<th class="p-2 border-bottom">Actions</th>';
        $html.= '</tr>';
        foreach($rows as $row){
            $html.='<tr>';
            foreach($row as $column){
                $html.= '<td>'. $column. '</td>';
            }
            $html.= '<td><a onclick="loadPage(\'?action=delete&id='.$row['product_id'].'\', sendToContent)"><span class="material-icons-outlined material-icons text-dark cursor-pointer">delete</span></a>&nbsp;';
            $html.= '<a onclick="loadPage(\'?action=updateform&id='.$row['product_id'].'\', sendToContent)"><span class="material-icons-outlined material-icons text-dark cursor-pointer">upgrade</span></a>';
            $html.= '<a href="?action=read&id='.$row['product_id'].'"><span class="material-icons-outlined material-icons text-dark">edit</span></a></td>';
            $html .= '</tr>';
        }
        $html .= '</table>';

        return $table = $html; 
    }
}