<?php


class AppKitDoctrineUtil {

    /**
     * Updates an doctrine record
     * @param Doctrine_Record $record
     * @param array $argsArray
     * @param array $attribArray
     * @return boolean
     * @throws AppKitDoctrineUtilException
     * @author Marius Hein
     */
    public static function updateRecordsetFromArray(Doctrine_Record &$record, array $argsArray, array $attribArray) {
        foreach($attribArray as $attribute) {

            if (array_key_exists($attribute, $argsArray)) {
                if ($record->getTable()->hasColumn($attribute)) {
                    // Clean update
                    $record-> { $attribute } = $argsArray[$attribute];
                } else {
                    // Wrong attribute definition, throw something!
                    throw new AppKitDoctrineUtilException("Field $attribute is not available on ". get_class($record));
                }
            }
        }

        return true;
    }

    public static function toggleRecordValue(Doctrine_Record &$record, $field=null) {
        // Try to autodetect the fieldname
        if ($field === null) {
            foreach($record->getTable()->getColumns() as $name=>$info) {
                if (preg_match('@_disabled$@', $name) && in_array($info['type'], array('boolean', 'integer')) == true) {
                    $field = $name;
                }
            }
        }

        if ($field && $record->getTable()->hasColumn($field)) {
            $record-> { $field } = !$record-> { $field };
        } else {
            throw new AppKitDoctrineUtilException("Field does not exist on the record (tableobject) ");
        }

    }

    public static function checkNullAttributes(AgaviRequestDataHolder &$rd, array $null_attribute_names, $set=null) {
        foreach($null_attribute_names as $attrib_name) {
            if ($rd->getParameter($attrib_name, null) === null) {
                $rd->setParameter($attrib_name, $set);
            }
        }

        return true;
    }

    /**
     * Shortcut for Doctrine_Table::findAll but with sorting and flagselection
     * @param string $component_name
     * @param string $where
     * @param string $orderby
     * @return Doctrine_Collection
     * @author Marius Hein
     */
    public static function fastTableCollection($component_name, $where=null, $orderby=null) {
        $query = Doctrine_Query::create()
                 ->from($component_name);

        if ($order) {
            $query->orderBy($orderby);
        }

        if ($where) {
            $query->andWhere($where);
        }

        return $query->execute();
    }

}

class AppKitDoctrineUtilException extends AppKitDoctrineException {}

?>