<?php

namespace MaxMind\Db\Reader;

class Decoder
{
    private $fileStream;
    private $pointerBase;
    // This is only used for unit testing
    private $pointerTestHack;
    private $switchByteOrder;
    private $types = [0 => 'extended', 1 => 'pointer', 2 => 'utf8_string', 3 => 'double', 4 => 'bytes', 5 => 'uint16', 6 => 'uint32', 7 => 'map', 8 => 'int32', 9 => 'uint64', 10 => 'uint128', 11 => 'array', 12 => 'container', 13 => 'end_marker', 14 => 'boolean', 15 => 'float'];
    public function __construct($fileStream, $pointerBase = 0, $pointerTestHack = false)
    {
    }
    public function decode($offset)
    {
    }
    private function decodeByType($type, $offset, $size)
    {
    }
    private function verifySize($expected, $actual)
    {
    }
    private function decodeArray($size, $offset)
    {
    }
    private function decodeBoolean($size)
    {
    }
    private function decodeDouble($bits)
    {
    }
    private function decodeFloat($bits)
    {
    }
    private function decodeInt32($bytes)
    {
    }
    private function decodeMap($size, $offset)
    {
    }
    private $pointerValueOffset = [1 => 0, 2 => 2048, 3 => 526336, 4 => 0];
    private function decodePointer($ctrlByte, $offset)
    {
    }
    private function decodeUint($bytes)
    {
    }
    private function decodeBigUint($bytes, $byteLength)
    {
    }
    private function decodeString($bytes)
    {
    }
    private function sizeFromCtrlByte($ctrlByte, $offset)
    {
    }
    private function zeroPadLeft($content, $desiredLength)
    {
    }
    private function maybeSwitchByteOrder($bytes)
    {
    }
    private function isPlatformLittleEndian()
    {
    }
}