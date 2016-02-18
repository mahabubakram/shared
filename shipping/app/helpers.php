<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 23.11.2014
 * Time: 19:10
 */

// address display format
function addressFormat($name, $address, $loc_id, $mob1, $mob2)
{
    $loc = DimLocation::find($loc_id);

    $string1 = '';
    $string1 .= $name.'<br />';
    $string1 .= $address.'<br />';
    $string1 .= $loc->thana.', '.$loc->district.', '.$loc->division;
    //if($loc->is_inner_city) $string1 .= ' (Inner city)';
    if($mob1) $string1 .= '<br />'.$mob1;
    if($mob2) $string1 .= ', '.$mob2;

    return  $string1;

    //return (mt_rand(1,2) == 1) ? 'something' : 'other';
}

// tracking history display
function trackingStatusLocFormat($tracking_status_id, $loc_id)
{
    $loc = DimLocation::find($loc_id);
    $trk_status = DimTrackingStatus::find($tracking_status_id);

    $string1 = '';
    $string1 .= $trk_status->name.' at '. $loc->thana.', '.$loc->district;

    return $string1;
}

// tracking history display
function trackingStatus($tracking_status_id)
{
    $trk_status = DimTrackingStatus::find($tracking_status_id);

    $string1 = '';
    $string1 .= $trk_status->name;

    return $string1;
}

// tracking history display
function singleLocFormat($loc_id)
{
    $loc = DimLocation::find($loc_id);

    $string1 = '';
    $string1 .= $loc->name.', '.$loc->district;

    return $string1;
}

// location data
function locationDataArray()
{
    $locationArray = array();
    $locationArray[''] = ' -- select location/Thana ---';
    $locObj = DimLocation::all();

    foreach($locObj as $loc){
        $locationArray[$loc->id] = $loc->name.', '.$loc->district;
    }

    return $locationArray;
}

// product type
function productTypeDataArray()
{
    $productArray = array();
    $productArray[''] = ' -- select product type ---';
    $productArray['document'] = 'Document';
    $productArray['non_document'] = 'Non Document';

    return $productArray;
}

// weight
function weightDataArray()
{
    $weightArray = array();
    $weightArray[''] = ' -- select weight range ---';
    $weightArray['500'] = '< 0.5 kg';
    for($i=1000; $i <= 100000; $i=$i+500){
        $kg1 = round(($i-500)/1000, 1);
        $kg2 = round($i/1000, 1);
        $weightArray[$i] = $kg1.' - '.$kg2.' kg';
    }
    return $weightArray;
}

// product type
function deliveryTypeDataArray()
{
    $dataArray = array();
    $dataArray[''] = ' -- select delivery type ---';
    $dataArray['Home delivery'] = 'Home delivery';
    $dataArray['Office delivery'] = 'Office delivery';
    return $dataArray;
}

// product type
function paymentTypeDataArray()
{
    $dataArray = array();
    $dataArray[''] = ' -- select payment type ---';
    $dataArray['cash'] = 'Cash';
    $dataArray['cc'] = 'Credit card';
    $dataArray['bkash'] = 'bKash';
    $dataArray['serfpay'] = 'SERFpay';
    return $dataArray;
}

//------------------------ format --------------------------------

// weight format
/**
 * @param int $gram
 * @return string
 */
function weightFormat($gram = 500)
{
    return number_format($gram/1000, 1).' kg';
}

/* returns money as a formatted string
* @param integer $amount
* @param string $symbol currency symbol
* @return string
*/
function moneyFormat($amount, $symbol = 'Tk. ')
{
    //setlocale(LC_MONETARY, 'en_US');
    return $symbol . number_format($amount, 2);
}

?>