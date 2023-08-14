<?php
use Illuminate\Support\Facades\Storage;
use Jaspersoft\Client\Client;

function reporte($idRegistro, $name, $params, $type = 'pdf')
{
    try {
        $client = new Client(env('JASPER_SERVER_URL'), env('JASPER_SERVER_USERNAME'), env('JASPER_SERVER_PASSWORD'));
        $report = $client->reportService()->runReport('/reports/'.$name, $type, null, null, $params);
        $nombre_temporal = str_replace('/', '_', $name).'_'.$idRegistro.'.'.$type;
        Storage::disk('public')->put('reports/'.$nombre_temporal, $report);

        return 'storage/reports/'.$nombre_temporal;
    } catch (Throwable $error) {
        return 'error '.$error;
    }
}
