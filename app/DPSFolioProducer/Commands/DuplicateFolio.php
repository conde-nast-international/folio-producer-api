<?php
namespace DPSFolioProducer\Commands;

class DuplicateFolio extends Command
{
    public function execute()
    {
        $folioID = $this->options['folio_id'];
        $request = new \DPSFolioProducer\APIRequest('folios/'.$folioID.'/duplicate', $this->config,
            array(
                'data' => '',
                'type' => 'post'
            )
        );

        return $request->run();
    }
}
