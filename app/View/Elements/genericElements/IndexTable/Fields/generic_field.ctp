<?php
    $data = Hash::extract($row, $field['data_path']);
    if (is_array($data)) {
        if (count($data) > 1) {
            $data = implode(', ', $data);
        } else {
            if (count($data) > 0) {
                $data = $data[0];
            } else {
                $data = '';
            }
        }
    }
    echo h($data);
?>
