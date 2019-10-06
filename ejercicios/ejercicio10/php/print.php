<?php

function print_file_data()
{
    echo <<<EOD
    <table class="file-table">
        <tbody class="file-table__body">
            <tr class="file-table__body__row">
                <td>Error</td><td>$_GET[error]</td>
            </tr>
            <tr class="file-table__body__row">
                <td>Name</td><td>$_GET[name]</td>
            </tr>
            <tr class="file-table__body__row">
                <td>Type</td><td>$_GET[type]</td>
            </tr>
            <tr class="file-table__body__row">
                <td>Size</td><td>$_GET[size]</td>
            </tr>
        </tbody>
    </table>
EOD;
}
