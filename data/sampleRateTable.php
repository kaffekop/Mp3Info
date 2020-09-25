<?php
use wapmorgan\Mp3Info\Mp3Info;

return [
	// 24000 and down are for LAME encoder
    Mp3Info::MPEG_1 => [44100, 48000, 32000, 24000, 22050, 16000, 12000, 11025, 8000, false], // MPEG 1
    Mp3Info::MPEG_2 => [22050, 24000, 16000, 44100, 48000, 32000, 24000, 22050, 16000, 12000, 11025, 8000, false], // MPEG 2
    Mp3Info::MPEG_25 => [11025, 12000, 8000, 44100, 48000, 32000], // MPEG 2
];
