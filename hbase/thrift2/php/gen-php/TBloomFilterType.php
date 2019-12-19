<?php
/**
 * Autogenerated by Thrift Compiler (0.12.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

/**
 * Thrift wrapper around
 * org.apache.hadoop.hbase.regionserver.BloomType
 */
final class TBloomFilterType
{
    /**
     * Bloomfilters disabled
     */
    const NONE = 0;

    /**
     * Bloom enabled with Table row as Key
     */
    const ROW = 1;

    /**
     * Bloom enabled with Table row &amp; column (family+qualifier) as Key
     */
    const ROWCOL = 2;

    /**
     * Bloom enabled with Table row prefix as Key, specify the length of the prefix
     */
    const ROWPREFIX_FIXED_LENGTH = 3;

    static public $__names = array(
        0 => 'NONE',
        1 => 'ROW',
        2 => 'ROWCOL',
        3 => 'ROWPREFIX_FIXED_LENGTH',
    );
}
