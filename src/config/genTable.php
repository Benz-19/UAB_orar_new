<?php
require __DIR__ . '/../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

function readExcelToHTMLTable($filePath)
{
    if (!file_exists($filePath)) {
        return "<p class='text-danger'>The file does not exist.</p>";
    }

    try {
        $spreadsheet = IOFactory::load($filePath);
        $worksheet = $spreadsheet->getActiveSheet();

        $htmlOutput = '<div class="d-none d-md-block table-responsive">';
        $htmlOutput .= '<table class="table table-striped table-bordered text-center">';

        // Generate the header
        $isHeader = true;
        foreach ($worksheet->getRowIterator() as $row) {
            if ($isHeader) {
                $htmlOutput .= "<thead><tr>";
                foreach ($row->getCellIterator() as $cell) {
                    $htmlOutput .= "<th>" . htmlspecialchars($cell->getValue()) . "</th>";
                }
                $htmlOutput .= "</tr></thead><tbody>";
                $isHeader = false;
            } else {
                $htmlOutput .= "<tr>";
                foreach ($row->getCellIterator() as $cell) {
                    $htmlOutput .= "<td>" . htmlspecialchars($cell->getValue()) . "</td>";
                }
                $htmlOutput .= "</tr>";
            }
        }

        $htmlOutput .= "</tbody></table></div>";

        // Generate card view for mobile
        $htmlOutput .= '<div class="d-block d-md-none">';
        foreach ($worksheet->getRowIterator() as $row) {
            $htmlOutput .= '<div class="card mb-3">';
            $htmlOutput .= '<div class="card-body">';
            $cellIndex = 0;
            foreach ($row->getCellIterator() as $cell) {
                if ($cellIndex === 0) {
                    $htmlOutput .= '<h5 class="card-title">' . htmlspecialchars($cell->getValue()) . '</h5>';
                } else {
                    $htmlOutput .= '<p class="card-text">' . htmlspecialchars($cell->getValue()) . '</p>';
                }
                $cellIndex++;
            }
            $htmlOutput .= '</div></div>';
        }
        $htmlOutput .= '</div>';

        return $htmlOutput;
    } catch (Exception $e) {
        return "<p class='text-danger'>Error reading file: " . $e->getMessage() . "</p>";
    }
}


?>


<style>
    .table {
        table-layout: fixed;
    }

    .table th,
    .table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    .table tr {
        background-color: #f9f9f9;
    }


    .table td:hover {
        background-color: #f1f1f1;
    }
</style>