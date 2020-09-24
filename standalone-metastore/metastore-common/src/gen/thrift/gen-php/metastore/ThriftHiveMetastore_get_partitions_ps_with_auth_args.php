<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
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

class ThriftHiveMetastore_get_partitions_ps_with_auth_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'db_name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'tbl_name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'part_vals',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        4 => array(
            'var' => 'max_parts',
            'isRequired' => false,
            'type' => TType::I16,
        ),
        5 => array(
            'var' => 'user_name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'group_names',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
    );

    /**
     * @var string
     */
    public $db_name = null;
    /**
     * @var string
     */
    public $tbl_name = null;
    /**
     * @var string[]
     */
    public $part_vals = null;
    /**
     * @var int
     */
    public $max_parts = -1;
    /**
     * @var string
     */
    public $user_name = null;
    /**
     * @var string[]
     */
    public $group_names = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['db_name'])) {
                $this->db_name = $vals['db_name'];
            }
            if (isset($vals['tbl_name'])) {
                $this->tbl_name = $vals['tbl_name'];
            }
            if (isset($vals['part_vals'])) {
                $this->part_vals = $vals['part_vals'];
            }
            if (isset($vals['max_parts'])) {
                $this->max_parts = $vals['max_parts'];
            }
            if (isset($vals['user_name'])) {
                $this->user_name = $vals['user_name'];
            }
            if (isset($vals['group_names'])) {
                $this->group_names = $vals['group_names'];
            }
        }
    }

    public function getName()
    {
        return 'ThriftHiveMetastore_get_partitions_ps_with_auth_args';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->db_name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tbl_name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->part_vals = array();
                        $_size1511 = 0;
                        $_etype1514 = 0;
                        $xfer += $input->readListBegin($_etype1514, $_size1511);
                        for ($_i1515 = 0; $_i1515 < $_size1511; ++$_i1515) {
                            $elem1516 = null;
                            $xfer += $input->readString($elem1516);
                            $this->part_vals []= $elem1516;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I16) {
                        $xfer += $input->readI16($this->max_parts);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->user_name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::LST) {
                        $this->group_names = array();
                        $_size1517 = 0;
                        $_etype1520 = 0;
                        $xfer += $input->readListBegin($_etype1520, $_size1517);
                        for ($_i1521 = 0; $_i1521 < $_size1517; ++$_i1521) {
                            $elem1522 = null;
                            $xfer += $input->readString($elem1522);
                            $this->group_names []= $elem1522;
                        }
                        $xfer += $input->readListEnd();
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
        $xfer += $output->writeStructBegin('ThriftHiveMetastore_get_partitions_ps_with_auth_args');
        if ($this->db_name !== null) {
            $xfer += $output->writeFieldBegin('db_name', TType::STRING, 1);
            $xfer += $output->writeString($this->db_name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tbl_name !== null) {
            $xfer += $output->writeFieldBegin('tbl_name', TType::STRING, 2);
            $xfer += $output->writeString($this->tbl_name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->part_vals !== null) {
            if (!is_array($this->part_vals)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('part_vals', TType::LST, 3);
            $output->writeListBegin(TType::STRING, count($this->part_vals));
            foreach ($this->part_vals as $iter1523) {
                $xfer += $output->writeString($iter1523);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->max_parts !== null) {
            $xfer += $output->writeFieldBegin('max_parts', TType::I16, 4);
            $xfer += $output->writeI16($this->max_parts);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->user_name !== null) {
            $xfer += $output->writeFieldBegin('user_name', TType::STRING, 5);
            $xfer += $output->writeString($this->user_name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->group_names !== null) {
            if (!is_array($this->group_names)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('group_names', TType::LST, 6);
            $output->writeListBegin(TType::STRING, count($this->group_names));
            foreach ($this->group_names as $iter1524) {
                $xfer += $output->writeString($iter1524);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
