<?php

include_once __DIR__.'/../../core.php';

if (empty($record['firma_file'])) {
    $frase = tr('Anteprima e firma');
    $info_firma = '';
} else {
    $frase = tr('Nuova anteprima e firma');
    $info_firma = '<span class="label label-success"><i class="fa fa-edit"></i> '.tr('Firmato il _DATE_ alle _TIME_ da _PERSON_', [
        '_DATE_' => Translator::dateToLocale($record['firma_data']),
        '_TIME_' => Translator::timeToLocale($record['firma_data']),
        '_PERSON_' => '<b>'.$record['firma_nome'].'</b>',
    ]).'</span>';
}

// Disabilito il tasto di firma per ddt firmati
echo '

<!-- EVENTUALE FIRMA GIA\' EFFETTUATA -->
'.$info_firma.'

<button type="button" class="btn btn-primary " onclick="launch_modal( \''.tr('Anteprima e firma').'\', globals.rootdir + \'/modules/ddt/add_firma.php?id_module='.$id_module.'&id_record='.$id_record.'&anteprima=1\', 1 );" '.($record['flag_completato'] ? 'disabled' : '').'>
    <i class="fa fa-desktop"></i> '.$frase.'...
</button>';

if (!in_array($record['stato'], ['Bozza', 'Fatturato'])) {
    echo '
	<a class="btn btn-info" data-href="'.$rootdir.'/modules/fatture/crea_documento.php?id_module='.$id_module.'&id_record='.$id_record.'&documento=fattura" data-toggle="modal" data-title="Crea fattura">
	    <i class="fa fa-magic"></i> '.tr('Crea fattura').'
	</a>';
}
