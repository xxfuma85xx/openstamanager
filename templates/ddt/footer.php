<?php

// TABELLA PRINCIPALE
echo '
<table class="table-bordered">';

if ($options['pricing']) {
    // Riga 1
    echo "
    <tr>
        <td rowspan='7'>
            <p class='small-bold'>".tr('Note', [], ['upper' => true]).'</p>
            <p>'.nl2br($records[0]['note'])."</p>
        </td>
        <td style='width:33mm;'>
            <p class='small-bold'>".tr('Totale imponibile', [], ['upper' => true]).'</p>
        </td>
    </tr>';

    // Dati riga 1
    echo "
    <tr>
        <td class='cell-padded text-right'>
            ".Translator::numberToLocale($imponibile).' &euro;
        </td>
    </tr>';

    // Riga 2
    echo "
    <tr>
        <td style='width:33mm;'>
            <p class='small-bold'>".tr('Totale imposte', [], ['upper' => true])."</p>
        </td>
    </tr>

    <tr>
        <td class='cell-padded text-right'>
            ".Translator::numberToLocale($iva).' &euro;
        </td>
    </tr>';

    // Riga 3
    echo "
    <tr>
        <td>
            <p class='small-bold'>".tr('Totale documento', [], ['upper' => true])."</p>
        </td>
    </tr>

    <tr>
        <td class='cell-padded text-right'>
            ".Translator::numberToLocale($totale).' &euro;
        </td>
    </tr>';
} else {
    // Riga 1
    echo "
    <tr>
        <td style='height:40mm;'>
            <p class='small-bold'>".tr('Note', [], ['upper' => true]).'</p>
            '.nl2br($records[0]['note']).'
        </td>
    </tr>';
}

echo '
</table>';

// Informazioni aggiuntive
echo '
<table class="table-bordered">
    <tr>
        <th class="small" class style="width:25%">
            '.tr('Aspetto beni', [], ['upper' => true]).'
        </th>

        <th class="small" class style="width:20%">
            '.tr('Num. colli', [], ['upper' => true]).'
        </th>

        <th class="small" style="width:30%">
            '.tr('Causale trasporto', [], ['upper' => true]).'
        </th>

        <th class="small" style="width:25%">
            '.tr('Porto', [], ['upper' => true]).'
        </th>
    </tr>

    <tr>
        <td class="cell-padded">
            $aspettobeni$ &nbsp;
        </td>

        <td class="cell-padded">
            $n_colli$ &nbsp;
        </td>

        <td class="cell-padded">
            $causalet$ &nbsp;
        </td>

        <td class="cell-padded">
            $porto$ &nbsp;
        </td>
    </tr>

    <tr>
        <th class="small">
            '.tr('Peso lordo', [], ['upper' => true]).'
        </th>

        <th class="small">
            '.tr('Volume', [], ['upper' => true]).'
        </th>

        <th class="small">
            '.tr('Vettore', [], ['upper' => true]).'
        </th>

        <th class="small">
            '.tr('Tipo di spedizione', [], ['upper' => true]).'
        </th>
    </tr>

    <tr>
        <td class="cell-padded">
        '.(!empty($peso_lordo) ? Translator::numberToLocale($peso_lordo) : '').'&nbsp;KG
        </td>

        <td class="cell-padded">
            '.(!empty($volume) ? Translator::numberToLocale($volume) : '').'&nbsp;M<sup>3</sup>
        </td>

        <td class="cell-padded">
            $vettore$ &nbsp;
        </td>

        <td class="cell-padded">
            $spedizione$ &nbsp;
        </td>
    </tr>
</table>';

// Firme
echo '
<table class="table-bordered">
    <tr>
        <th class="small" style="width:33%">
            '.tr('Firma conducente', [], ['upper' => true]).'
        </th>

        <th class="small" style="width:33%">
            '.tr('Firma vettore', [], ['upper' => true]).'
        </th>

        <th class="small" style="width:33%">
            '.tr('Firma destinatario', [], ['upper' => true]).'
        </th>
    </tr>

    <tr>
        <td style="height: 10mm"></td>
        <td style="height: 10mm"></td>
        <td style="height: 10mm"></td>
    </tr>
</table>';

echo '
$default_footer$';
