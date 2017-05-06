<?php
include_once("bean.config.php");

/**
 * Class BeanSinglePkDateTime
 * Bean class for object oriented management of the MySQL table single_pk_date_time
 *
 * Comment of the managed table single_pk_date_time: Not specified.
 *
 * Responsibility:
 *
 *  - provides instance constructors for both managing of a fetched table or for a new row
 *  - provides destructor to automatically close database connection
 *  - defines a set of attributes corresponding to the table fields
 *  - provides setter and getter methods for each attribute
 *  - provides OO methods for simplify DML select, insert, update and delete operations.
 *  - provides a facility for quickly updating a previously fetched row
 *  - provides useful methods to obtain table DDL and the last executed SQL statement
 *  - provides error handling of SQL statement
 *  - uses Camel/Pascal case naming convention for Attributes/Class used for mapping of Fields/Table
 *  - provides useful PHPDOC information about the table, fields, class, attributes and methods.
 *
 * @extends MySqlRecord
 * @filesource BeanSinglePkDateTime.php
 * @category MySql Database Bean Class
 * @package beans
 * @author Rosario Carvello <rosario.carvello@gmail.com>
 * @version GIT:v1.0.0
 * @note  This is an auto generated PHP class builded with MVCMySqlReflection, a small code generation engine extracted from the author's personal MVC Framework.
 * @copyright (c) 2016 Rosario Carvello <rosario.carvello@gmail.com> - All rights reserved. See License.txt file
 * @license BSD
 * @license https://opensource.org/licenses/BSD-3-Clause This software is distributed under BSD Public License.
*/

// namespace beans;

class BeanSinglePkDateTime extends MySqlRecord
{
    /**
     * A control attribute for the update operation.
     * @note An instance fetched from db is allowed to run the update operation.
     *       A new instance (not fetched from db) is allowed only to run the insert operation but,
     *       after running insertion, the instance is automatically allowed to run update operation.
     * @var bool
     */
    private $allowUpdate = false;

    /**
     * Class attribute for mapping the primary key id_date_time of table single_pk_date_time
     *
     * Comment for field id_date_time: Not specified<br>
     * @var string $idDateTime
     */
    private $idDateTime;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field field_string
     *
     * Comment for field field_string: Not specified.<br>
     * Field information:
     *  - Data type: varchar(200)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $fieldString
     */
    private $fieldString;

    /**
     * Class attribute for mapping table field field_date
     *
     * Comment for field field_date: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $fieldDate
     */
    private $fieldDate;

    /**
     * Class attribute for mapping table field field_date_time
     *
     * Comment for field field_date_time: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $fieldDateTime
     */
    private $fieldDateTime;

    /**
     * Class attribute for mapping table field field_decimal
     *
     * Comment for field field_decimal: Not specified.<br>
     * Field information:
     *  - Data type: decimal(12,2)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var float $fieldDecimal
     */
    private $fieldDecimal;

    /**
     * Class attribute for mapping table field field_int
     *
     * Comment for field field_int: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $fieldInt
     */
    private $fieldInt;

    /**
     * Class attribute for mapping table field field_text
     *
     * Comment for field field_text: Not specified.<br>
     * Field information:
     *  - Data type: text
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $fieldText
     */
    private $fieldText;

    /**
     * Class attribute for storing the SQL DDL of table single_pk_date_time
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBzaW5nbGVfcGtfZGF0ZV90aW1lYCAoCiAgYGlkX2RhdGVfdGltZWAgZGF0ZXRpbWUgTk9UIE5VTEwsCiAgYGZpZWxkX3N0cmluZ2AgdmFyY2hhcigyMDApIERFRkFVTFQgTlVMTCwKICBgZmllbGRfZGF0ZWAgZGF0ZSBERUZBVUxUIE5VTEwsCiAgYGZpZWxkX2RhdGVfdGltZWAgZGF0ZXRpbWUgREVGQVVMVCBOVUxMLAogIGBmaWVsZF9kZWNpbWFsYCBkZWNpbWFsKDEyLDIpIERFRkFVTFQgTlVMTCwKICBgZmllbGRfaW50YCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgZmllbGRfdGV4dGAgdGV4dCwKICBQUklNQVJZIEtFWSAoYGlkX2RhdGVfdGltZWApIFVTSU5HIEJUUkVFCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmOA==";

    /**
     * setIdDateTime Sets the class attribute idDateTime with a given value
     *
     * The attribute idDateTime maps the field id_date_time defined as datetime.<br>
     * Comment for field id_date_time: Not specified.<br>
     * @param string $idDateTime
     * @category Modifier
     */
    public function setIdDateTime($idDateTime)
    {
        $this->idDateTime = (string)$idDateTime;
    }

    /**
     * setFieldString Sets the class attribute fieldString with a given value
     *
     * The attribute fieldString maps the field field_string defined as varchar(200).<br>
     * Comment for field field_string: Not specified.<br>
     * @param string $fieldString
     * @category Modifier
     */
    public function setFieldString($fieldString)
    {
        $this->fieldString = (string)$fieldString;
    }

    /**
     * setFieldDate Sets the class attribute fieldDate with a given value
     *
     * The attribute fieldDate maps the field field_date defined as string|date.<br>
     * Comment for field field_date: Not specified.<br>
     * @param string $fieldDate
     * @category Modifier
     */
    public function setFieldDate($fieldDate)
    {
        $this->fieldDate = (string)$fieldDate;
    }

    /**
     * setFieldDateTime Sets the class attribute fieldDateTime with a given value
     *
     * The attribute fieldDateTime maps the field field_date_time defined as datetime.<br>
     * Comment for field field_date_time: Not specified.<br>
     * @param string $fieldDateTime
     * @category Modifier
     */
    public function setFieldDateTime($fieldDateTime)
    {
        $this->fieldDateTime = (string)$fieldDateTime;
    }

    /**
     * setFieldDecimal Sets the class attribute fieldDecimal with a given value
     *
     * The attribute fieldDecimal maps the field field_decimal defined as decimal(12,2).<br>
     * Comment for field field_decimal: Not specified.<br>
     * @param float $fieldDecimal
     * @category Modifier
     */
    public function setFieldDecimal($fieldDecimal)
    {
        $this->fieldDecimal = (float)$fieldDecimal;
    }

    /**
     * setFieldInt Sets the class attribute fieldInt with a given value
     *
     * The attribute fieldInt maps the field field_int defined as int(11).<br>
     * Comment for field field_int: Not specified.<br>
     * @param int $fieldInt
     * @category Modifier
     */
    public function setFieldInt($fieldInt)
    {
        $this->fieldInt = (int)$fieldInt;
    }

    /**
     * setFieldText Sets the class attribute fieldText with a given value
     *
     * The attribute fieldText maps the field field_text defined as text.<br>
     * Comment for field field_text: Not specified.<br>
     * @param string $fieldText
     * @category Modifier
     */
    public function setFieldText($fieldText)
    {
        $this->fieldText = (string)$fieldText;
    }

    /**
     * getIdDateTime gets the class attribute idDateTime value
     *
     * The attribute idDateTime maps the field id_date_time defined as datetime.<br>
     * Comment for field id_date_time: Not specified.
     * @return string $idDateTime
     * @category Accessor of $idDateTime
     */
    public function getIdDateTime()
    {
        return $this->idDateTime;
    }

    /**
     * getFieldString gets the class attribute fieldString value
     *
     * The attribute fieldString maps the field field_string defined as varchar(200).<br>
     * Comment for field field_string: Not specified.
     * @return string $fieldString
     * @category Accessor of $fieldString
     */
    public function getFieldString()
    {
        return $this->fieldString;
    }

    /**
     * getFieldDate gets the class attribute fieldDate value
     *
     * The attribute fieldDate maps the field field_date defined as string|date.<br>
     * Comment for field field_date: Not specified.
     * @return string $fieldDate
     * @category Accessor of $fieldDate
     */
    public function getFieldDate()
    {
        return $this->fieldDate;
    }

    /**
     * getFieldDateTime gets the class attribute fieldDateTime value
     *
     * The attribute fieldDateTime maps the field field_date_time defined as datetime.<br>
     * Comment for field field_date_time: Not specified.
     * @return string $fieldDateTime
     * @category Accessor of $fieldDateTime
     */
    public function getFieldDateTime()
    {
        return $this->fieldDateTime;
    }

    /**
     * getFieldDecimal gets the class attribute fieldDecimal value
     *
     * The attribute fieldDecimal maps the field field_decimal defined as decimal(12,2).<br>
     * Comment for field field_decimal: Not specified.
     * @return float $fieldDecimal
     * @category Accessor of $fieldDecimal
     */
    public function getFieldDecimal()
    {
        return $this->fieldDecimal;
    }

    /**
     * getFieldInt gets the class attribute fieldInt value
     *
     * The attribute fieldInt maps the field field_int defined as int(11).<br>
     * Comment for field field_int: Not specified.
     * @return int $fieldInt
     * @category Accessor of $fieldInt
     */
    public function getFieldInt()
    {
        return $this->fieldInt;
    }

    /**
     * getFieldText gets the class attribute fieldText value
     *
     * The attribute fieldText maps the field field_text defined as text.<br>
     * Comment for field field_text: Not specified.
     * @return string $fieldText
     * @category Accessor of $fieldText
     */
    public function getFieldText()
    {
        return $this->fieldText;
    }

    /**
     * Gets DDL SQL code of the table single_pk_date_time
     * @return string
     * @category Accessor
     */
    public function getDdl()
    {
        return base64_decode($this->ddl);
    }

    /**
    * Gets the name of the managed table
    * @return string
    * @category Accessor
    */
    public function getTableName()
    {
        return "single_pk_date_time";
    }

    /**
     * The BeanSinglePkDateTime constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $idDateTime is given.
     *  - with a fetched data row from the table single_pk_date_time having id_date_time=$idDateTime
     * @param datetime $idDateTime. If omitted an empty (not fetched) instance is created.
     * @return BeanSinglePkDateTime Object
     */
    public function __construct($idDateTime = null)
    {
        parent::__construct();
        if (!empty($idDateTime)) {
            $this->select($idDateTime);
        }
    }

    /**
     * The implicit destructor
     */
    public function __destruct()
    {
        $this->close();
    }

    /**
     * Explicit destructor. It calls the implicit destructor automatically.
     */
    public function close()
    {
        unset($this);
    }

    /**
     * Fetchs a table row of single_pk_date_time into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param datetime $idDateTime the primary key id_date_time value of table single_pk_date_time which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($idDateTime)
    {
        $sql =  "SELECT * FROM single_pk_date_time WHERE id_date_time={$this->parseValue($idDateTime,'datetime')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->idDateTime = empty($rowObject->id_date_time) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->id_date_time));
            @$this->fieldString = $this->replaceAposBackSlash($rowObject->field_string);
            @$this->fieldDate = empty($rowObject->field_date) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->field_date));
            @$this->fieldDateTime = empty($rowObject->field_date_time) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->field_date_time));
            @$this->fieldDecimal = (float)$rowObject->field_decimal;
            @$this->fieldInt = (integer)$rowObject->field_int;
            @$this->fieldText = $this->replaceAposBackSlash($rowObject->field_text);
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table single_pk_date_time
     * @param datetime $idDateTime the primary key id_date_time value of table single_pk_date_time which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($idDateTime)
    {
        $sql = "DELETE FROM single_pk_date_time WHERE id_date_time={$this->parseValue($idDateTime,'datetime')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of single_pk_date_time
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->idDateTime = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO single_pk_date_time
            (id_date_time,field_string,field_date,field_date_time,field_decimal,field_int,field_text)
            VALUES({$this->parseValue($this->idDateTime,'datetime')},
			{$this->parseValue($this->fieldString,'notNumber')},
			{$this->parseValue($this->fieldDate,'date')},
			{$this->parseValue($this->fieldDateTime,'datetime')},
			{$this->parseValue($this->fieldDecimal)},
			{$this->parseValue($this->fieldInt)},
			{$this->parseValue($this->fieldText,'notNumber')})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->idDateTime = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table single_pk_date_time with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param datetime $idDateTime the primary key id_date_time value of table single_pk_date_time which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($idDateTime)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                single_pk_date_time
            SET 
				field_string={$this->parseValue($this->fieldString,'notNumber')},
				field_date={$this->parseValue($this->fieldDate,'date')},
				field_date_time={$this->parseValue($this->fieldDateTime,'datetime')},
				field_decimal={$this->parseValue($this->fieldDecimal)},
				field_int={$this->parseValue($this->fieldInt)},
				field_text={$this->parseValue($this->fieldText,'notNumber')}
            WHERE
                id_date_time={$this->parseValue($idDateTime,'datetime')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($idDateTime);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of single_pk_date_time previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->idDateTime != "") {
            return $this->update($this->idDateTime);
        } else {
            return false;
        }
    }

}
?>
