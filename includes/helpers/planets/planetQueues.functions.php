<?php

namespace UniEngine\Engine\Includes\Helpers\Planets\Queues;

function parseStructuresQueueString($queueString) {
    if (empty($queueString)) {
        return [];
    }

    $queueElementStrings = explode(";", $queueString);

    return array_map(
        function ($queueElementString) {
            $queueElementData = explode(",", $queueElementString);

            return [
                'elementID' => $queueElementData[0],
                'level' => $queueElementData[1],
                'duration' => $queueElementData[2],
                'endTimestamp' => $queueElementData[3],
                'mode' => $queueElementData[4]
            ];
        },
        $queueElementStrings
    );
}

function serializeStructuresQueue($queue) {
    $serializedElements = array_map(
        function ($queueElement) {
            $detailsAsArray = [
                $queueElement['elementID'],
                $queueElement['level'],
                $queueElement['duration'],
                $queueElement['endTimestamp'],
                $queueElement['mode']
            ];

            return implode(",", $detailsAsArray);
        },
        $queue
    );

    return implode(";", $serializedElements);
}

?>
