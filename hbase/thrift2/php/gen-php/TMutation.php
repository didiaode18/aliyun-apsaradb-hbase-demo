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
 * Atomic mutation for the specified row. It can be either Put or Delete.
 */
class TMutation
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'put',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\TPut',
        ),
        2 => array(
            'var' => 'deleteSingle',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\TDelete',
        ),
    );

    /**
     * @var \TPut
     */
    public $put = null;
    /**
     * @var \TDelete
     */
    public $deleteSingle = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['put'])) {
                $this->put = $vals['put'];
            }
            if (isset($vals['deleteSingle'])) {
                $this->deleteSingle = $vals['deleteSingle'];
            }
        }
    }

    public function getName()
    {
        return 'TMutation';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->put = new \TPut();
                        $xfer += $this->put->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->deleteSingle = new \TDelete();
                        $xfer += $this->deleteSingle->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('TMutation');
        if ($this->put !== null) {
            if (!is_object($this->put)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('put', TType::STRUCT, 1);
            $xfer += $this->put->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->deleteSingle !== null) {
            if (!is_object($this->deleteSingle)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('deleteSingle', TType::STRUCT, 2);
            $xfer += $this->deleteSingle->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
